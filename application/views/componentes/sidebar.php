<!-- Sidebar start--><div id="main" class="container-fluid">	<div class="row">		<div id="sidebar-left" class="col-xs-2 col-sm-2">			<ul class="nav main-menu">				<li>				<a href="<?=base_url();?>profesional/index"> <i class="fa fa-dashboard"></i>				<span class="hidden-xs">Inicio</span>				</a>				</li>				<li>				<a href="<?=base_url();?>profesional/perfil"> <i class="fa fa-pencil-square-o"></i>				<span class="hidden-xs">Perfil</span>				</a>				</li>				<li>				<a href="<?=base_url();?>calendario/"> <i class="fa fa-calendar"></i>				<span class="hidden-xs">Calendario</span>				</a>				</li>				<li class="dropdown">				<a href="#" class="dropdown-toggle">				<i class="fa fa-user"></i>				<span class="hidden-xs">Pacientes</span>				</a>				<ul class="dropdown-menu">                                        					<li><a href="<?=base_url();?>administrarPacientes/registrarPaciente" >Nuevo Paciente</a></li>                                        <li><a href="<?=base_url();?>administrarPacientes/administrarPaciente">Administrar Pacientes</a></li>				</ul>				</li>				<li class="dropdown">				<a href="#" class="dropdown-toggle">				<i class="fa fa-chain"></i>				<span class="hidden-xs">Consultas Médicas</span>				</a>				<ul class="dropdown-menu">                                    <li><a href="<?=base_url();?>administrarCME">Nueva Consulta</a></li>                                    <li><a href="<?=base_url();?>administrarCME">Editar Consulta</a></li>				</ul>				</li>                                <!--				<li class="dropdown">				<a href="#" class="dropdown-toggle">				<i class="fa fa-tablet"></i>				<span class="hidden-xs">Historias Clinicas</span>				</a>				<ul class="dropdown-menu">					<li><a href="<?=base_url();?>profesional/registrarFCE">Nueva Historia</a></li>					<li><a href="#">Actualizacion Historia</a></li>					<li><a href="#">Eliminación Historia    </a></li>				</ul>				</li>                                -->				<li class="dropdown">				<a href="#" class="dropdown-toggle">				<i class="fa fa-upload"></i>				<span class="hidden-xs">Órdenes Médicas </span>				</a>				<ul class="dropdown-menu">					<li><a href="<?=base_url();?>profesional/administrarOME/agregarOME">Nueva Órden</a></li>					<li><a href="<?=base_url();?>profesional/administrarOME/eliminarOME">Editar Órden</a></li>				</ul>				</li>				<li class="dropdown">				<a href="#" class="dropdown-toggle">				<i class="fa fa-dedent"></i>				<span class="hidden-xs">Consentimientos Informados</span>				</a>				<ul class="dropdown-menu">					<li><a href="<?=base_url();?>profesional/administrarCIE/agregarCIE">Nuevo Consentimiento</a></li>					<li><a href="<?=base_url();?>profesional/administrarCIE/eliminarCIE">Editar Consentimiento</a></li>				</ul>				</li>				<li class="dropdown">				<a href="#" class="dropdown-toggle">				<i class="fa fa-paperclip"></i>				<span class="hidden-xs">Registro de Datos</span>				</a>				<ul class="dropdown-menu">					<li><a href="<?=base_url();?>administrarMedicamentos">Medicamentos</a></li>					<li><a href="<?=base_url();?>administrarAlergia">Alergias</a></li>					<li><a href="<?=base_url();?>administrarEnfermedad">Patologías</a></li>					<li><a href="<?=base_url();?>administrarTratamientos">Tratamientos</a></li>					<li><a href="<?=base_url();?>administrarVacunas">Vacunas</a></li>				</ul>				</li>				<li class="dropdown">				<a href="#" class="dropdown-toggle">				<i class="fa fa-superscript"></i>				<span class="hidden-xs">Soporte</span>				</a>				<ul class="dropdown-menu">					<li><a data-toggle="modal" href="#myModal1">Contactenos</a></li>					<li><a data-toggle="modal" href="#myModal">Acerca de Sisgemed</a></li>				</ul>				</li>			</ul>                    		</div>      		<!-- Fin Barra Lateral -->