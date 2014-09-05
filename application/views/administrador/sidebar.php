<!-- Sidebar start-->   
<div id="main" class="container-fluid">
    <div class="row">
        <div id="sidebar-left" class="col-xs-2 col-sm-2">
            <ul class="nav main-menu">
                <li>
                    <a href="<?=$url_base;?>index">
                            <i class="fa fa-dashboard"></i>
                            <span class="hidden-xs">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="<?=$url_base;?>perfilAdministrador">
                            <i class="fa fa-dashboard"></i>
                            <span class="hidden-xs">Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="<?=$url_base;?>">
                            <i class="fa fa-calendar"></i>
                            <span class="hidden-xs">Calendario</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-bar-chart-o"></i>
                            <span class="hidden-xs">Institucion</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a href="<?=$url_base;?>administrarInstituciones">Nuevo Institucion</a></li>
                            <li><a href="<?=$url_base;?>administrarInstituciones">Administrar Instituciones</a></li>                            
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-table"></i>
                             <span class="hidden-xs">Gestor de Datos</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=$url_base;?>">Usuarios</a></li>
                            <li><a  href="<?=$url_base;?>">Instituciones</a></li>
                            <li><a  href="<?=$url_base;?>">Pacientes</a></li>                           
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-pencil-square-o"></i>
                             <span class="hidden-xs">Ficha Clínica Electrónica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=$url_base;?>">Registro de FCE</a></li>
                            <li><a  href="<?=$url_base;?>">Actualizacion de FCE</a></li>
                            <li><a  href="<?=$url_base;?>">Eliminación de FCE</a></li>
                            
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-desktop"></i>
                             <span class="hidden-xs">Órden Médica Electrónica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=$url_base;?>">Registro de OME</a></li>
                            <li><a  href="<?=$url_base;?>">Eliminación de OME</a></li>                            
                    </ul>
                </li>              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-desktop"></i>
                        <span class="hidden-xs">Con. Médico Informado</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a  href="<?=$url_base;?>administrarCIE/agregarCIE">Registro de CIE</a></li>
                        <li><a  href="<?=$url_base;?>administrarCIE/eliminarCIE">Eliminación de CIE</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-picture-o"></i>
                             <span class="hidden-xs">Cons. Médica Electrónica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=$url_base;?>administrarCME/agregarCME">Registro de CME</a></li>
                            <li><a  href="<?=$url_base;?>administrarCME/actualizarCME">Eliminacion de CME</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-picture-o"></i>
                             <span class="hidden-xs">Soporte</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a data-toggle="modal" href="#myModal1">Contactenos</a></li>
                            <li><a data-toggle="modal" href="#myModal">Acerca de Sisgemed</a></li>
                    </ul>
                </li>               
            </ul>
        </div>
<!-- Sidebar end -->