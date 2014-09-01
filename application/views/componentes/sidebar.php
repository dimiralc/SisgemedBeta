<!-- Sidebar start-->   
<div id="main" class="container-fluid">
    <div class="row">
        <div id="sidebar-left" class="col-xs-2 col-sm-2">
            <ul class="nav main-menu">
                <li>
                    <a href="<?=base_url();?>index">
                            <i class="fa fa-home"></i>
                            <span class="hidden-xs">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>perfil">
                            <i class="fa fa-user"></i>
                            <span class="hidden-xs">Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url();?>calendario">
                            <i class="fa fa-calendar"></i>
                            <span class="hidden-xs">Calendario</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-suitcase"></i>
                            <span class="hidden-xs">Pacientes</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a href="<?=base_url();?>administrarPacientes/registrarPaciente">Nuevo Paciente</a></li>
                            <li><a href="<?=base_url();?>administrarPacientes/administrarPaciente">Administrar Pacientes</a></li>                            
                    </ul>
                </li>               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-chain"></i>
                             <span class="hidden-xs">Consulta Médica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=base_url();?>administrarCME/agregarCME">Nueva Consulta</a></li>
                            <li><a  href="<?=base_url();?>administrarCME/administrarConsulta">Administrar Consultas</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-tablet"></i>
                             <span class="hidden-xs">Ficha Clínica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=base_url();?>administrarFCE/registrarFCE">Nueva Ficha Clínica</a></li>
                            <li><a  href="<?=base_url();?>administrarFCE/actualizarFCE">Actualizacion de Fichas</a></li>
                            <li><a  href="<?=base_url();?>administrarFCE/eliminarFCE">Eliminación de Fichas</a></li>
                            
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                            <i class="fa fa-upload"></i>
                             <span class="hidden-xs">Órden Médica</span>
                    </a>
                    <ul class="dropdown-menu">
                            <li><a  href="<?=base_url();?>administrarOME/agregarOME">Nueva Órden Medica</a></li>
                            <li><a  href="<?=base_url();?>administrarOME/eliminarOME">Administración de Órdenes</a></li>                            
                    </ul>
                </li>              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-dedent"></i>
                        <span class="hidden-xs">Consentimientos</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a  href="<?=base_url();?>administrarCIE/agregarCIE">Nuevo Consentimiento</a></li>
                        <li><a  href="<?=base_url();?>administrarCIE/eliminarCIE">Administrar Cons. Médico</a></li>
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