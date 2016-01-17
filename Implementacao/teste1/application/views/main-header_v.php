<!-- Main Header -->
<header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
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
                      <li><a href="<?php echo site_url('Cliente_c/insert'); ?>">Novo Cliente</a></li>
                    <li><a href="<?php echo site_url('Cliente_c/lista'); ?>">Listar Clientes</a></li>
                    <li><a href="<?php echo site_url('Cliente_c/busca'); ?>">Buscar Clientes</a></li>
                  </ul>
                </li>
					<li class="dropdown">
                  <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url('Consulta_c/insert'); ?>">Nova Consulta</a></li>
                    <li><a href="<?php echo site_url('Consulta_c/lista'); ?>">Listar Consultas</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('Atendimento_c/insert'); ?>">Novo Atendimento</a></li>
                    <li><a href="<?php echo site_url('Atendimento_c/lista'); ?>">Histórico Atendimentos</a></li>
                   
                  </ul>
                </li>
					<li class="dropdown">
                  <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Pagamentos
                   <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url('Pagamento_c/'); ?>">Nova Pagamento à Receber</a></li>
                    <li><a href="<?php echo site_url('Pagamento_c/'); ?>">Listar Débitos</a></li>
                    <li><a href="<?php echo site_url('Pagamento_c/lista'); ?>">Listar Pagamentos</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('Pagamento_c/'); ?>">Lançar Recebimento</a></li>
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