<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIGBEL</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="template/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="template/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="template/dist/css/skins/skin-green.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.html" class="logo">
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
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
         
            <ul class="nav navbar-nav">
					
                 <li class="dropdown">
                  <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Novo Cliente</a></li>
                    <li><a href="#">Listar Clientes</a></li>
                    <li><a href="#">Buscar Clientes</a></li>
                  </ul>
                </li>
					<li class="dropdown">
                  <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Nova Consulta</a></li>
                    <li><a href="#">Listar Consultas</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Novo Atendimento</a></li>
                    <li><a href="#">Histórico Atendimentos</a></li>
                   
                  </ul>
                </li>
					<li class="dropdown">
                  <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Pagamentos
                   <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Nova Pagamento à Receber</a></li>
                    <li><a href="#">Listar Débitos</a></li>
                    <li><a href="#">Listar Pagamentos</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Lançar Recebimento</a></li>
                  </ul>
                </li>
              
              
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
             
				<!--BUSCADOR-->	
			    <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input class="form-control" id="navbar-search-input" placeholder="Buscar Cliente" type="text">
                </div>
              </form>             
             
             
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar cliente panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
                <img src="template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>José da Silva</p>
            </div>
          </div>

        

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU CLIENTE</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-envelope"></i> <span>Contato</span></a></li>
            <li><a href="#"><i class="fa fa-pie-chart"></i> <span>Relatório</span></a></li>
            <li><a href="#"><i class="fa fa-child"></i> <span>Perfil / Anamnese</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-dollar"></i><span>Pagamento</span>
				      <small class="label pull-right bg-red">3</small>
                <ul class="treeview-menu">
                <li><a href="#">Cadastrar Pagamento à Receber</a></li>
                <li><a href="#">Consultar Débitos</a></li>   
                <li><a href="#">Lançar Pagamento</a></li>       
              </ul>      </a>
            </li>      
           
            <li class="treeview"> 
              <a href="calendar.html">
                <i class="fa fa-calendar"></i> <span>Consulta</span>
                <small class="label pull-right bg-red">1</small>
                <ul class="treeview-menu">
                <li><a href="#">Cadastrar Consulta</a></li>
                <li><a href="#">Cadastrar Atendimento</a></li>        
              </ul>
              </a>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
    
      <div class="content-wrapper">
       
         
        <!-- Content Header (Page header) -->
        
        <section class="content-header">    
            
          <?php echo $nomeCliente; ?> 
            | CPF:<?php echo  $nomeCliente;?> 
            | SEXO: <i class="fa fa-mars"> <?php echo  $nomeCliente; ?>  </i> 
            | IDADE:<?php echo  $nomeCliente; ?> anos
          <ol class="breadcrumb">
		
		
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa"> </i> Sair</a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa "></i> Ajuda</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          
         
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="template/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="template/dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>