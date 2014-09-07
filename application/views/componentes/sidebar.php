<!-- Sidebar start-->   
<div id="main" class="container-fluid">
    <div class="row">
        <div id="sidebar-left" class="col-xs-2 col-sm-2">
            <ul class="nav main-menu">
                <li>
                    <a href="<?=base_url();?>profesional/index">
                            <i class="fa fa-dashboard"></i>
                            <span class="hidden-xs">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>profesional/perfil">
                            <i class="fa fa-pencil-square-o"></i>
                            <span class="hidden-xs">Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>profesional/calendario">
                            <i class="fa fa-calendar"></i>
                            <span class="hidden-xs">Calendario</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-user"></i>
                            <span class="hidden-xs">Pacientes</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a href="<?=base_url();?>profesional/administrarPacientes/registrarPaciente">Nuevo Paciente</a></li>
                            <li><a href="<?=base_url();?>profesional/administrarPacientes/administrarPaciente">Administrar Pacientes</a></li>                            
                    </ul>
                </li>               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-chain"></i>
                             <span class="hidden-xs">Cons. Médica Electrónica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=base_url();?>profesional/administrarCME/agregarCME">Registro de CME</a></li>
                            <li><a  href="<?=base_url();?>profesional/administrarCME/actualizarCME">Eliminacion de CME</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-tablet"></i>
                             <span class="hidden-xs">Ficha Clínica Electrónica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=base_url();?>profesional/registrarFCE">Registro de FCE</a></li>
                            <li><a  href="<?=base_url();?>profesional/administrarFCE/actualizarFCE">Actualizacion de FCE</a></li>
                            <li><a  href="<?=base_url();?>profesional/administrarFCE/eliminarFCE">Eliminación de FCE</a></li>
                            
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-upload"></i>
                             <span class="hidden-xs">Órden Médica Electrónica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=base_url();?>profesional/administrarOME/agregarOME">Registro de OME</a></li>
                            <li><a  href="<?=base_url();?>profesional/administrarOME/eliminarOME">Eliminación de OME</a></li>                            
                    </ul>
                </li>              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-dedent"></i>
                        <span class="hidden-xs">Con. Médico Informado</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a  href="<?=base_url();?>profesional/administrarCIE/agregarCIE">Registro de CIE</a></li>
                        <li><a  href="<?=base_url();?>profesional/administrarCIE/eliminarCIE">Eliminación de CIE</a></li>
                    </ul>
                </li> 
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-paperclip"></i>
                             <span class="hidden-xs">Gestor de Datos</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=base_url();?>administrarMedicamentos">Medicamentos</a></li>
                            <li><a  href="<?=base_url();?>administrarAlergia">Alergias</a></li>
                            <li><a  href="<?=base_url();?>administrarEnfermedad">Patologías</a></li>
                            <li><a  href="<?=base_url();?>administrarTratamientos">Tratamientos</a></li>
                            <li><a  href="<?=base_url();?>administrarVacunas">Vacunas</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-superscript"></i>
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