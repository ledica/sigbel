<?php
if ($this->session->userdata('idCliente')) {
    $idCliente = $this->session->userdata('idCliente');
    $variaveis['idCliente'] = $this->session->userdata('idCliente');
    $cadastros = $this->m_cliente->get($idCliente);
    $nomeCliente = $cadastros->row()->nomeCliente;
    $numeroCPF = $cadastros->row()->numeroCPF;
    $fotografia = $cadastros->row()->fotografia;
    $quantidadeConsultaAgendada = 0;
    if ($cadastros->row()->dataNascimento) {
        date_default_timezone_set('America/Sao_Paulo');
        $hoje = getdate();
        $data = DateTime::createFromFormat('Y-m-d', $cadastros->row()->dataNascimento);
        $nasc = strtotime($data->format("Ymd"));
        $nasc1 = getdate($nasc);
        if ($hoje[mon] > $nasc1[mon]) {
            $dataNascimento = $hoje[year] - $nasc1[year];
        } else {
            $dataNascimento = $hoje[year] - $nasc1[year] - 1;
        }
    }
    if ($Consulta) {
        foreach ($Consulta->result() as $c) {
            date_default_timezone_set('America/Sao_Paulo');
            $hoje = getdate();
            $data = DateTime::createFromFormat('Y-m-d', $c->data);
            $nasc = strtotime($data->format("Ymd"));
            $nasc1 = getdate($nasc);
            if ($hoje[year] < $nasc1[year]) {
                $quantidadeConsultaAgendada++;
            } elseif (($hoje[year] == $nasc1[year]) && ($hoje[mon] < $nasc1[mon])) {
                $quantidadeConsultaAgendada++;
            } elseif (($hoje[year] == $nasc1[year]) && ($hoje[mon] == $nasc1[mon]) && ($hoje[day] < $nasc1[day])) {
                $quantidadeConsultaAgendada++;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SIGBEL</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
<?= link_tag('template/bootstrap/css/bootstrap.min.css') ?>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <?= link_tag('template/dist/css/AdminLTE.css') ?>
        <?= link_tag('template/dist/css/skins/skin-green.min.css') ?>
        <?= link_tag('template/plugins/datatables/dataTables.bootstrap.css') ?>
        <!-- daterange picker -->
        <?= link_tag('template/plugins/datepicker/datepicker3.css') ?>
        <?= link_tag('template/plugins/timepicker/bootstrap-timepicker.css') ?>

<?= link_tag('template/plugins/select2/select2.min.css') ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="hold-transition skin-green sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="<?= base_url(); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>S</b>bl</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>SIG</b>bel</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-custom-menu navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?= anchor('cliente/create', 'Novo Cliente', array('class' => '')); ?></li>
                                    <li><?= anchor('cliente/', 'Listar Clientes', array('class' => '')); ?></li>
                                </ul>
                            </li>
                            <li>
                            <li class="dropdown">
                                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?= anchor('consulta/create', 'Nova Consulta', array('class' => '')); ?></li>
                                    <li><?= anchor('consulta/', 'Listar Consultas', array('class' => '')); ?></li>
                                    <li class="divider"></li>
                                    <li><?= anchor('atendimento/create', 'Novo Atendimento', array('class' => '')); ?></li>
                                    <li><?= anchor('atendimento/', 'Histórico Atendimentos', array('class' => '')); ?></li>


                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Pagamentos
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><?= anchor('pagamento/create', 'Nova Pagamento à Receber', array('class' => '')); ?></li>
                                    <li><a href="#" id="listaDebito" data-id='0' />Listar Débitos</a></li>
                                    <li><a href="#" id="listaPagamento" data-id='0' />Listar Pagamentos</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#" id="lancaRecebimento" data-id='0' />Lançar Recebimento</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                    <!--BUSCADOR-->	
                    <div class="navbar-form navbar-right" role="search"> 
                        <div class="form-group">
                                <?= form_open_multipart('Principal/selecionaCliente') ?>
                            <select name="idCliente" id="navbar-search-input" class="select2 form-control" placeholder="Buscar Cliente" >
                                <?php
                                $protocolo = $this->m_cliente->get()->result();
                                $option = "<option value='0'  selected='selected'>    </option>";
                                foreach ($protocolo as $linha) {

                                    if ($linha->idCliente == $idCliente) {
                                        $option .= "<option value='$linha->idCliente'  selected='selected'>$linha->nomeCliente</option>";
                                    } else {
                                        $option .= "<option value='$linha->idCliente'  >$linha->nomeCliente</option>";
                                    }
                                }
                                echo $option;
                                ?>
                            </select>
                            <input type="submit" value=">>" class="btn btn-success form-control"  />
<?= form_close(); ?>
                        </div>
                    </div> 
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

<?php if ($this->session->userdata('idCliente')) { ?>
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">

                        <!-- Sidebar cliente panel (optional) -->
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src='<?php echo base_url() . "/" . $fotografia ?>' class="img-circle" width="160px" height="160px" alt="User Image">
                            </div>
                            <div class="pull-left info">
                                <p><?php echo $nomeCliente; ?></p>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <ul class="sidebar-menu">
                            <li class="header">MENU CLIENTE</li>
                            <!-- Optionally, you can add icons to the links -->
                            <li class="active">
    <?= anchor("cliente/edit/", '<i class="fa fa-envelope"></i> <span>Contato</span>'); ?>
                            </li>
                            <li>
    <?= anchor("cliente/relatorio/", '<i class="fa fa-pie-chart"></i> <span>Relatório</span>'); ?>
                            </li>
                            <li>                        
    <?= anchor("cliente/editPerfil/", '<i class="fa fa-child"></i> <span>Perfil / Anamnese</span>'); ?>
                            </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-dollar"></i><span>Pagamento</span>
                                    <?php if ($quantidadePagamentoPendente > 0) { ?>
                                        <small class="label pull-right bg-red"><?= $quantidadePagamentoPendente ?></small>
    <?php } ?>
                                    <ul class="treeview-menu">
                                        <li><a href="#" id="novoPagamento" data-id='0' />Pagamento à Receber</a></li>
                                        <li><a href="#" id="listaDebito" data-id='0' />Consultar Débitos</a></li>
                                        <li><a href="#" id="listaDebito" data-id='0' />Listar Pagamentos</a></li>

                                    </ul>      
                                </a>
                            </li>      

                            <li class="treeview"> 
                                <a href="calendar.html">
                                    <i class="fa fa-calendar"></i> <span>Consulta</span>
                                    <?php if ($quantidadeConsultaAgendada > 0) { ?>
                                        <small class="label pull-right bg-red"><?= $quantidadeConsultaAgendada ?></small>
    <?php } ?>
                                    <ul class="treeview-menu">
                                        <li><?= anchor("consulta/create/", 'Cadastrar Consulta'); ?></li>
                                        <li><?= anchor("consulta/index/", 'Listar Consultas'); ?></li>
                                        <li><?= anchor("atendimento/index/", 'Listar Atendimentos'); ?></li>
                                    </ul>
                                </a>
                            </li>
                        </ul><!-- /.sidebar-menu -->

                    </section>
                    <!-- /.sidebar -->
<?php } ?>
            </aside>

            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <section class="content-header text-left">    
<?php if ($idCliente > 0) { ?>
                        Cliente: <?php echo $nomeCliente; ?> 
                        |   CPF: <?php echo $numeroCPF; ?> 
                        |   Idade: <?php echo $dataNascimento; ?> anos
<?php } ?>
                    <ol class="breadcrumb">


                    </ol>
                </section>
                <div id="idSelecionado" class="col-md-2"></div>
                <div id="nomeSelecionado" class="col-md-6"></div>
                <!-- Main content -->
                <section class="content">
                    <div id="contents"><?php echo $contents ?></div>
                    <!-- Your Page Content Here -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
        </div>

        <!-- Main Footer -->

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="<?= base_url('template/plugins/jQuery/jQuery-2.1.4.min.js') ?>"></script>	
        <!-- Bootstrap 3.3.5 -->
        <script src="<?= base_url('template/bootstrap/js/bootstrap.min.js') ?>"></script>	
        <!-- AdminLTE App -->
        <script src="<?= base_url('template/dist/js/app.min.js') ?>"></script>	
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. Slimscroll is required when using the
             fixed layout. -->
        <script>

            var base_url = "<?= base_url(); ?>";

            $(function () {
                $('.confirma_exclusao').on('click', function (e) {
                    e.preventDefault();

                    var nome = $(this).data('nome');
                    var id = $(this).data('id');

                    $('#modal_confirmation').data('nome', nome);
                    $('#modal_confirmation').data('id', id);
                    $('#modal_confirmation').modal('show');
                });

                $('#modal_confirmation').on('show.bs.modal', function () {
                    var nome = $(this).data('nome');
                    $('#nome_exclusao').text(nome);
                });

                $('#btn_excluir_cliente').click(function () {
                    var id = $('#modal_confirmation').data('id');
                    document.location.href = base_url + "cliente/delete/" + id;
                });
                $('#btn_excluir_consulta').click(function () {
                    var id = $('#modal_confirmation').data('id');
                    document.location.href = base_url + "consulta/delete/" + id;
                });
                $('#btn_excluir_atendimento').click(function () {
                    var id = $('#modal_confirmation').data('id');
                    document.location.href = base_url + "atendimento/delete/" + id;
                });
                $('#btn_excluir_pagamento').click(function () {
                    var id = $('#modal_confirmation').data('id');
                    document.location.href = base_url + "pagamento/delete/" + id;
                });
                $('#btn_excluir_protocolo').click(function () {
                    var id = $('#modal_confirmation').data('id');
                    document.location.href = base_url + "ProtocoloAtendimento/delete/" + id;
                });
            });
        </script>
        <!-- DataTables -->
        <script src="<?= base_url('template/plugins/datatables/jquery.dataTables.min.js') ?>"></script>	
        <script src="<?= base_url('template/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>	
        <!-- SlimScroll -->
        <script src="<?= base_url('template/plugins/slimScroll/jquery.slimscroll.min.js') ?>"></script>	
        <!-- FastClick -->
        <script src="<?= base_url('template/plugins/fastclick/fastclick.min.js') ?>"></script>	
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('template/dist/js/demo.js') ?>"></script>	
        <!-- page script -->
        <script>
            $(function () {
                $('#example1').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#example3').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });

        </script>

        <!-- Select2 -->
        <script src="<?= base_url('template/plugins/select2/select2.full.min.js') ?>"></script>	

        <script src="<?= base_url('template/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>	
        <script src="<?= base_url('template/plugins/timepicker/bootstrap-timepicker.js') ?>"></script>	

        <script>

            $(function () {
                //Initialize Select2 Elements
                $(".select2").select2();
                //Datemask dd/mm/yyyy
                $("#data").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#dataNascimento").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#dataCadastro").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#dataUltimaGestacao").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#dataUltimaMenstruacao").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#dataInicioAnticoncepcional").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#tempoAlergia").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#tempoCirurgia").datepicker({
                    dateFormat: 'dd/mm/yy', altField: '#dbDate', altFormat: 'yy-mm-dd',
                });
                $("#horario").timepicker();
            });</script>


        <script src="<?= base_url('template/plugins/chartjs/Chart.min.js') ?>"></script>	
        <script>
            $(function () {




                var areaChartData = {
                    labels: [
<?php
foreach ($Atendimento->result() as $peso) {
    echo '"' . $peso->data . '",';
}
?>

                    ],
                    datasets: [
                        {
                            label: "Electronics",
                            fillColor: "rgba(255, 14, 0, 1)",
                            strokeColor: "rgba(255, 14, 0, 1)",
                            pointColor: "rgba(255, 14, 0, 1)",
                            pointStrokeColor: "#c1c7d1",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(255,20,0,1)",
                            data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->peso != "0") {
        echo '' . $atendimento->peso . ',';
        $vei = $atendimento->peso;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                            ]
                        }

                    ]
                };
                var areaChartOptions = {
                    //Boolean - If we should show the scale at all
                    showScale: true,
                    //Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: false,
                    //String - Colour of the grid lines
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,
                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,
                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: true,
                    //Boolean - Whether the line is curved between points
                    bezierCurve: true,
                    //Number - Tension of the bezier curve between points
                    bezierCurveTension: 0.3,
                    //Boolean - Whether to show a dot for each point
                    pointDot: false,
                    //Number - Radius of each point dot in pixels
                    pointDotRadius: 4,
                    //Number - Pixel width of point dot stroke
                    pointDotStrokeWidth: 1,
                    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                    pointHitDetectionRadius: 20,
                    //Boolean - Whether to show a stroke for datasets
                    datasetStroke: true,
                    //Number - Pixel width of dataset stroke
                    datasetStrokeWidth: 2,
                    //Boolean - Whether to fill the dataset with a color
                    datasetFill: true,
                    //String - A legend template
                    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                                maintainAspectRatio: true,
                                //Boolean - whether to make the chart responsive to window resizing
                                responsive: true
                            };
                            //Create the line chart


                            //-------------
                            //- LINE CHART -
                            //--------------
                            var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
                            var lineChart = new Chart(lineChartCanvas);
                            var lineChartOptions = areaChartOptions;
                            lineChartOptions.datasetFill = false;
                            lineChart.Line(areaChartData, lineChartOptions);
                            //----
                            //Gráfico Braço
                            //----


                            var areaChartDataBraco = {
                                labels: [
<?php
foreach ($Atendimento->result() as $peso) {
    echo '"' . $peso->data . '",';
}
?>

                                ],
                                datasets: [
                                    {
                                        label: "Braço Direito 10cm",
                                        fillColor: "rgba(210, 214, 222, 1)",
                                        strokeColor: "rgba(210, 214, 222, 1)",
                                        pointColor: "rgba(210, 214, 222, 1)",
                                        pointStrokeColor: "#c1c7d1",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->bracoDireito10cm != "0") {
        echo '' . $atendimento->bracoDireito10cm . ',';
        $vei = $atendimento->bracoDireito10cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Braço Direito 20cm",
                                        fillColor: "rgba(60,141,188,0.9)",
                                        strokeColor: "rgba(60,141,188,0.8)",
                                        pointColor: "rgba(60,141,188,1)",
                                        pointStrokeColor: "#3b8bba",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(60,141,188,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->bracoDireito20cm != "0") {
        echo '' . $atendimento->bracoDireito20cm . ',';
        $vei = $atendimento->bracoDireito20cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Braço Esquerdo 10cm",
                                        fillColor: "rgba(220,141,188,0.9)",
                                        strokeColor: "rgba(220,141,188,0.8)",
                                        pointColor: "rgba(220,141,188,1)",
                                        pointStrokeColor: "#3b8bba",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,141,188,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->bracoEsquerdo10cm != "0") {
        echo '' . $atendimento->bracoEsquerdo10cm . ',';
        $vei = $atendimento->bracoEsquerdo10cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Braço Esquerdo 20cm",
                                        fillColor: "rgba(220,241,88,0.9)",
                                        strokeColor: "rgba(220,241,88,0.8)",
                                        pointColor: "rgba(220,241,88,1)",
                                        pointStrokeColor: "#3b8bba",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,241,88,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->bracoEsquerdo20cm != "0") {
        echo '' . $atendimento->bracoEsquerdo20cm . ',';
        $vei = $atendimento->bracoEsquerdo20cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    }

                                ]
                            };
                            var lineChartCanvas2 = $("#lineChart2").get(0).getContext("2d");
                            var lineChart2 = new Chart(lineChartCanvas2);
                            lineChartOptions.datasetFill = false;
                            lineChart2.Line(areaChartDataBraco, lineChartOptions);
                            //----
                            //Gráfico coxa
                            //----


                            var areaChartDataCoxa = {
                                labels: [
<?php
foreach ($Atendimento->result() as $peso) {
    echo '"' . $peso->data . '",';
}
?>

                                ],
                                datasets: [
                                    {
                                        label: "Coxa Direita 10cm",
                                        fillColor: "rgba(210, 214, 222, 1)",
                                        strokeColor: "rgba(210, 214, 222, 1)",
                                        pointColor: "rgba(210, 214, 222, 1)",
                                        pointStrokeColor: "#c1c7d1",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->coxaDireita10cm != "0") {
        echo '' . $atendimento->coxaDireita10cm . ',';
        $vei = $atendimento->coxaDireita10cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Coxa Direita 20cm",
                                        fillColor: "rgba(250, 180, 180, 1)",
                                        strokeColor: "rgba(250, 180, 180, 1)",
                                        pointColor: "rgba(250, 180, 180, 1)",
                                        pointStrokeColor: "#c1c777",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->coxaDireita20cm != "0") {
        echo '' . $atendimento->coxaDireita20cm . ',';
        $vei = $atendimento->coxaDireita20cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Coxa Direita 20cm",
                                        fillColor: "rgba(250, 180, 180, 1)",
                                        strokeColor: "rgba(250, 180, 180, 1)",
                                        pointColor: "rgba(250, 180, 180, 1)",
                                        pointStrokeColor: "#c1c777",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->coxaDireita20cm != "0") {
        echo '' . $atendimento->coxaDireita20cm . ',';
        $vei = $atendimento->coxaDireita20cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Braço Esquerdo 10cm",
                                        fillColor: "rgba(20, 214, 222, 1)",
                                        strokeColor: "rgba(20, 214, 222, 1)",
                                        pointColor: "rgba(20, 214, 222, 1)",
                                        pointStrokeColor: "#c1c7d1",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->bracoEsquerdo10cm != "0") {
        echo '' . $atendimento->bracoEsquerdo10cm . ',';
        $vei = $atendimento->bracoEsquerdo10cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Braço Esquerdo 20cm",
                                        fillColor: "rgba(210, 0, 22, 1)",
                                        strokeColor: "rgba(210, 0, 22, 1)",
                                        pointColor: "rgba(210,  0, 22, 1)",
                                        pointStrokeColor: "#c1c777",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->bracoEsquerdo20cm != "0") {
        echo '' . $atendimento->bracoEsquerdo20cm . ',';
        $vei = $atendimento->bracoEsquerdo20cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    }

                                ]
                            };
                            var lineChartCanvas3 = $("#lineChart3").get(0).getContext("2d");
                            var lineChart3 = new Chart(lineChartCanvas3);
                            lineChartOptions.datasetFill = false;
                            lineChart3.Line(areaChartDataCoxa, lineChartOptions);



                            //----
                            //Gráfico perna
                            //----


                            var areaChartDataPerna = {
                                labels: [
<?php
foreach ($Atendimento->result() as $peso) {
    echo '"' . $peso->data . '",';
}
?>

                                ],
                                datasets: [
                                    {
                                        label: "Perna Direita 10cm",
                                        fillColor: "rgba(210, 214, 222, 1)",
                                        strokeColor: "rgba(210, 214, 222, 1)",
                                        pointColor: "rgba(210, 214, 222, 1)",
                                        pointStrokeColor: "#c1c7d1",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->pernaDireita10cm != "0") {
        echo '' . $atendimento->pernaDireita10cm . ',';
        $vei = $atendimento->pernaDireita10cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Perna Direita 20cm",
                                        fillColor: "rgba(250, 180, 180, 1)",
                                        strokeColor: "rgba(250, 180, 180, 1)",
                                        pointColor: "rgba(250, 180, 180, 1)",
                                        pointStrokeColor: "#c1c777",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->pernaDireita20cm != "0") {
        echo '' . $atendimento->pernaDireita20cm . ',';
        $vei = $atendimento->pernaDireita20cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Perna Esquerda 10cm",
                                        fillColor: "rgba(20, 214, 222, 1)",
                                        strokeColor: "rgba(20, 214, 222, 1)",
                                        pointColor: "rgba(20, 214, 222, 1)",
                                        pointStrokeColor: "#c1c7d1",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->pernaEsquerda10cm != "0") {
        echo '' . $atendimento->pernaEsquerda10cm . ',';
        $vei = $atendimento->pernaEsquerda10cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    },
                                    {
                                        label: "Perna Esquerda 20cm",
                                        fillColor: "rgba(210, 0, 22, 1)",
                                        strokeColor: "rgba(210, 0, 22, 1)",
                                        pointColor: "rgba(210,  0, 22, 1)",
                                        pointStrokeColor: "#c1c777",
                                        pointHighlightFill: "#fff",
                                        pointHighlightStroke: "rgba(220,220,220,1)",
                                        data: [
<?php
$vei = '0';
foreach ($Atendimento->result() as $atendimento) {

    if ($atendimento->pernaEsquerda20cm != "0") {
        echo '' . $atendimento->pernaEsquerda20cm . ',';
        $vei = $atendimento->pernaEsquerda20cm;
    } else {
        echo '' . $vei . ',';
    }
}
?>


                                        ]
                                    }

                                ]
                            };
                            var lineChartCanvas4 = $("#lineChart4").get(0).getContext("2d");
                            var lineChart4 = new Chart(lineChartCanvas4);
                            lineChartOptions.datasetFill = false;
                            lineChart4.Line(areaChartDataPerna, lineChartOptions);
                            legend($("#legenda"), areaChartDataPerna);
                        });
        </script>
    </body>
</html>