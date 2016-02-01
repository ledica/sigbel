<?php
if ($this->session->userdata('idCliente')) {

    $idCliente = $this->session->userdata('idCliente');
    $variaveis['idCliente'] = $this->session->userdata('idCliente');
    $nomeCliente = $this->session->userdata('nomeCliente');
    $numeroCPF = $this->session->userdata('numeroCPF');
    $fotografia = $this->session->userdata('fotografia');
    $dataNascimento = $this->session->userdata('dataNascimento');
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
        <?= link_tag('template/dist/font-awesome-4.5.0/css/font-awesome.min.css') ?>
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <?php // link_tag('template/dist/css/ionic.min.css') 
        ?>
        <!-- Theme style -->
        <?= link_tag('template/dist/css/AdminLTE.css') ?>
        <?= link_tag('template/dist/css/skins/skin-green.min.css') ?>

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

        <!-- Select2 -->
        <script src="<?= base_url('template/plugins/select2/select2.full.min.js') ?>"></script>    

        <script>
            $(function () {
                //Initialize Select2 Elements
                $(".select2").select2();
            });
        </script>
  
    </body>
</html>