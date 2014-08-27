<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Registrar Paciente</a></li> 
		</ol>
	</div>
    </div>
    <div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Registro de Pacientes</span>
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
				<h4 class="page-header">Registro de Pacientes en el sistema</h4>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label">Rut</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Rut" data-toggle="tooltip" data-placement="bottom" title="Tooltip for name">
						</div>
						<label class="col-sm-2 control-label">Primer Nombre</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Primer Nombre" data-toggle="tooltip" data-placement="bottom" title="Tooltip for last name">
						</div>
					</div>
					<div class="form-group has-success">
						<label class="col-sm-2 control-label">Segundo Nombre</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Segundo Nombre">
						</div>
						<label class="col-sm-2 control-label">Apellido Paterno</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Apellido Paterno">
							<span class="form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Apellido Materno</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Apellido Materno">
							<span class="fa fa-key txt-warning form-control-feedback"></span>
						</div>
						<label class="col-sm-2 control-label">Teléfono</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Teléfono" data-toggle="tooltip" data-placement="top" title="Hello world!">
						</div>						
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">País de Orígen</label>
						<div class="col-sm-4">
							<select class="col-sm-8">
								<option>Chile</option>
								<option>Perú</option>
								<option>Brasil</option>
								<option>Ecuador</option>
								<option>Venezuela</option>
								<option>Argentina</option>
								<option>Colombia</option>
								<option>Uruguay</option>
								<option>Paraguay</option>
								<option>México</option>
								<option>Panamá</option>
							</select>
						</div>						
					</div>                                        
					<div class="form-group has-error has-feedback">
                                                <label class="col-sm-2 control-label">Fecha de Nacimiento</label>
						<div class="col-sm-3">
							<input type="text" id="input_date" class="form-control" placeholder="Fecha de Nacimiento">
							<span class="fa fa-calendar txt-danger form-control-feedback"></span>
						</div>						
					</div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Género</label>                                            
                                                    <div class="col-sm-4">
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="radio"> Hombre
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="radio"> Mujer
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>                                                        
                                                    </div>                                            
                                            <label class="col-sm-2 control-label">Estado Civil</label>                                            
                                                    <div class="col-sm-4">
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="radio"> Soltero
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="radio"> Casado
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div>         
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="radio"> Viudo
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div> 
                                                            <div class="radio">
                                                                    <label>
                                                                            <input type="radio" name="radio"> Separado
                                                                            <i class="fa fa-circle-o"></i>
                                                                    </label>
                                                            </div> 
                                                        <br>
                                                    </div>                                            
                                        </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Dirección</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="2"></textarea>
						</div>
					</div>
                                        <div class="form-group has-feedback">
						<label class="col-sm-2 control-label">Nivel de Estudios</label>
						<div class="col-sm-4">
							<select class="col-sm-8">
								<option>Sin Estudios</option>
								<option>Básica Incompleta</option>
								<option>Básica Completa</option>
								<option>Media Incompleta</option>
								<option>Medica Completa</option>
								<option>Técnico</option>
								<option>Técnico Profesional</option>
								<option>Universitaria Incompleta</option>
								<option>Universitaria Completa</option>
								<option>Postgrado</option>	
							</select>
						</div>						
					</div> 
                                        <div class="form-group has-feedback">
						<label class="col-sm-2 control-label">Preexistencias</label>
						<div class="col-sm-4">
							<select class="col-sm-8">
                                                                <option>Sin Preexistencias</option>
								<option>Hipertensión Arterial</option>
								<option>Arteriopatía obstructiva periférica y aneurismas</option>
								<option>Cardiopatía isquémica</option>
								<option>Valvulopatías congénitas o adquiridas</option>
								<option>Miocardiopatías</option>
								<option>Arritmias crónicas</option>
								<option>Tumores</option>
								<option>Otopatías</option>
								<option>Laringopatías</option>
								<option>Rinosinusal</option>
								<option>Misceláneas</option>
							</select>
						</div>						
					</div>            
										
                                        <div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancelar
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Guardar Cambios
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
        <div class="col-xs-12">
		<div class="box">
			<div class="box-header">
                                <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Imagen de Paciente</span>
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
				<h4 class="page-header">Adjuntar Imágen</h4>   
                                <form enctype="multipart/form-data" action="uploader.php" method="POST" class="form-group">
                                    <input name="uploadedfile" type="file"/>
                                    <div class="clearfix"></div>
                                    <label class="control-label">Archivos Permitidos: JPG, PNG, JEPG</label> 
                                    <div class="clearfix"></div>
                                    <input type="submit" value="Subir archivo" class="btn btn-primary btn-label-left" />
                                </form> 
					
			</div>
		</div>
	</div>
</div>

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
<!--End Content-->
