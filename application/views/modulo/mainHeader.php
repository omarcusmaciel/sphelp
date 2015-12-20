<!--modulo/mainHeader-->
<header class="main-header" ng-controller="mainHeaderController">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <div>
                <img src="<?php echo LAYOUT_ASSETS; ?>img/logo.svg">
            </div><!--logo-->
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <div>
                <img src="<?php echo LAYOUT_ASSETS; ?>img/logo-light.svg">
            </div><!--logo-->
        </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- atalho:novo chamado -->
                <li>
                    <a href=""tooltip-placement="bottom"
                       data-toggle="tooltip" uib-tooltip="novo chamado">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                </li>

                <!-- meus chamados -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       tooltip-placement="bottom"
                       data-toggle="tooltip" uib-tooltip="meus chamados em aberto">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Design some buttons
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Create a nice theme
                                            <small class="pull-right">40%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Some task I need to do
                                            <small class="pull-right">60%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li><!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Make beautiful transitions
                                            <small class="pull-right">80%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
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

                <!-- informacoes do usuario -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle sp-text-overflow-ellipsis" data-toggle="dropdown"
                       tooltip-placement="bottom"
                       data-toggle="tooltip" uib-tooltip="informações do usuário">
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs"><?php echo $nome; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- perfil do usuario -->
                        <li><i class="fa fa-info"></i> Perfil</li>
                        <!-- estatísticas-->
                        <li><i class="fa fa-line-chart"></i> Estatísticas</li>
                    </ul>
                </li>

                <!-- logoff -->
                <li>
                    <a href="" ng-click="logoff()" tooltip-placement="bottom"
                       data-toggle="tooltip" uib-tooltip="sair">
                        <i class="fa fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </div>

    </nav>
</header>
