<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Administrar datos de Paciente</a></li> 
		</ol>
	</div>
    </div>
    <!-- Formulario de Búsqueda de Pacientes en el sistema -->
    <div class="row">
        <div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
                            <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Actualización o Eliminación de Pacientes en el Sistema</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>  
                        </div>
                    <div class="box-content">
                        <h4 class="page-header">Búsqueda de Datos</h4>
                        <?= form_open('administrarPacientes/buscarPaciente') ?>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Búsqueda por Rut  </label>
                                <div class="col-sm-4">
                                        <input type="text" 
                                               class="form-control" placeholder="Rut del paciente" 
                                               data-toggle="tooltip" data-placement="bottom" 
                                               title="Ingrese el rut del paciente que desea encontrar" 
                                               name="Run">
                                </div>                                        
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-primary btn-label-left" name="btoPaciente">
                                        <span><i class="fa fa-clock-o"></i></span>
                                                Buscar
                                    </button>
                                </div>                                                                                        
                            </div>    
                        </div>
                    </div>
                </div>
        </div>        
    </div>
    <!-- Fin del Formulario de Busqueda -->
    <?php 
    if(isset($pacientes)){
        foreach ($pacientes -> result() as $paciente){?>
    <div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
                                <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Datos del Paciente</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Datos del Paciente</h4>
                                 <?php
                                    $attributes = 'class= "form-horizontal"';
                                    $run = array(
                                            'name'=> 'Run',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Rol Único Nacional'
                                            
                                        
                                        );
                                    $pnombre = array(
                                            'name'=> 'Pnombre',
                                            'placeholder'=> 'Ingrese su Nombre',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Su Primer Nombre'
                                        );
                                    $snombre = array(
                                            'name'=> 'Snombre',
                                            'placeholder'=>'Ingrese su segundo nombre',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Su segundo nombre'
                                        );
                                    $paterno = array(
                                            'name'=> 'Paterno',
                                            'placeholder'=>'Ingrese su apellido paterno',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Su apellido paterno'
                                        );
                                    $materno = array(
                                            'name'=> 'Materno',
                                            'placeholder'=>'Ingrese su apellido materno',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Su apellido materno'
                                        );
                                    $telefono = array(
                                            'name'=> 'Telefono',
                                            'placeholder'=>'Ingrese su telefono de contacto',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Celular o Fijo'
                                        ); 
                                    $fecnac = array(
                                            'name'=> 'Fecnac',
                                            'placeholder'=>'Fecha de Nacimiento',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Su fecha de Naciemiento'
                                            
                                        );
                                    $direccion = array(
                                            'name'=> 'Direccion',
                                            'placeholder'=>'Direccion de residencia',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Su direccion personal',
                                            'rows' => '2'
                                        );
                                ?>				
					<div class="form-group">
						<label class="col-sm-2 control-label">Rut</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" name="infoRut"  value="<?php echo $paciente->rut;?>">
                                                    <?=form_input($run)?>
                                                </div>
						<label class="col-sm-2 control-label">Primer Nombre</label>
                                                <div class="col-sm-4">
                                                    <?=form_input($pnombre)?>
                                                </div>
					</div>
					<div class="form-group has-success">
						<label class="col-sm-2 control-label">Segundo Nombre</label>
						<div class="col-sm-4">
                                                    <?=form_input($snombre)?>
                                                </div>
						<label class="col-sm-2 control-label">Apellido Paterno</label>
                                                <div class="col-sm-4">
                                                    <?=form_input($paterno)?>
                                                </div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Apellido Materno</label>
                                                <div class="col-sm-4">
                                                    <?=form_input($materno)?>
                                                </div>
						<label class="col-sm-2 control-label">Teléfono</label>
                                                <div class="col-sm-4">
                                                    <?=form_input($telefono)?>
                                                </div>						
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">País de Orígen</label>
						<div class="col-sm-4">
							<select class="col-sm-8" name="pais" id="pais">
								<option value="Chile">Chile</option>
								<option value="Perú">Perú</option>
								<option value="Brasil">Brasil</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Argentina">Argentina</option>
								<option value="Colombia">Colombia</option>
								<option value="Uruguay">Uruguay</option>
								<option value="Paraguay">Paraguay</option>
								<option value="México">México</option>
								<option value="Panamá">Panamá</option>
							</select>
						</div>						
					</div>                                        
					<div class="form-group has-error has-feedback">
                                                <label class="col-sm-2 control-label">Fecha de Nacimiento</label>
						<div class="col-sm-3">
                                                    <?=form_input($fecnac)?>
                                                </div>						
					</div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Género</label>                                            
                                                    <div class="col-sm-4">
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="genero" value="Masculino"> Masculino
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="genero" value="Femenino"> Femenino
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>                                                        
                                                    </div>                                            
                                            <label class="col-sm-2 control-label">Estado Civil</label>                                            
                                                    <div class="col-sm-4">
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="ecivil" value="Soltero"> Soltero
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="ecivil" value="Casado"> Casado
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>         
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="ecivil" value="Viudo"> Viudo
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div> 
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="ecivil" value="Separado"> Separado
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div> 
                                                        <br>
                                                    </div>                                            
                                        </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Dirección</label>
                                                <div class="col-sm-10">
                                                    <?= form_textarea($direccion)?>
                                                </div>
					</div>
                                        <div class="form-group has-feedback">
						<label class="col-sm-2 control-label">Nivel de Estudios</label>
						<div class="col-sm-6">
							<select class="col-sm-5" name="nivelestudios" id="nivelestudios">
								<option value="Sin Estudios">Sin Estudios</option>
								<option value="Básica Incompleta">Básica Incompleta</option>
								<option value="Básica Completa">Básica Completa</option>
								<option value="Media Incompleta">Media Incompleta</option>
								<option value="Medica Completa">Medica Completa</option>
								<option value="Técnico">Técnico</option>
								<option value="Técnico Profesional">Técnico Profesional</option>
								<option value="Universitaria Incompleta">Universitaria Incompleta</option>
								<option value="Universitaria Completa">Universitaria Completa</option>
								<option value="Postgrado">Postgrado</option>								
							</select>
						</div>						
					</div> 
                                        <div class="form-group has-feedback">
						<label class="col-sm-2 control-label">Preexistencias</label>
						<div class="col-sm-6">
							<select class="col-sm-5" name="preexistencias" id="preexistencias">
                                                                <option value="Sin preexistencias">Sin Preexistencias</option>
								<option value="Hipertensión Arterial">Hipertensión Arterial</option>
								<option value="Arteriopatía obstructiva">Arteriopatía obstructiva</option>
								<option value="Cardiopatía isquémica">Cardiopatía isquémica</option>
								<option value="Valvulopatías congénitas">Valvulopatías congénitas</option>
								<option value="Miocardiopatías">Miocardiopatías</option>
								<option value="Arritmias crónicas">Arritmias crónicas</option>
								<option value="Tumores">Tumores</option>
								<option value="Otopatías">Otopatías</option>
								<option value="Laringopatías">Laringopatías</option>
								<option value="Rinosinusal">Rinosinusal</option>
								<option value="Misceláneas">Misceláneas</option>
							</select>
						</div>						
					</div>            
										
                                        <div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" class="btn btn-default btn-label-left" value="Actualizar" name="btoPaciente">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Actualizar Datos
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" value="Eliminar" name="btoPaciente">
							<span><i class="fa fa-clock-o"></i></span>
								Eliminar Paciente
							</button>
						</div>
					</div>
				<?= form_close() ?> 
			</div>
		</div>
	</div>
</div>
    
    <?php
    }    
    
    }else{
    echo 'Paciente no ha sido Ingresado al sistema';
    }
        
        
        
    
    
    
/**
<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>

    </div>
</div>
-->
 * */
 
