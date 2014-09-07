<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Administrar Tratamientos</a></li> 
		</ol>
	</div>
    </div>
    <div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
                                <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Administración de Tratamientos</span>
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
				<h4 class="page-header">Búsqueda de Datos</h4>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">ID del Tratamiento</label>
                                        <div class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="Ingrese el Id del Tratamiento" data-toggle="tooltip" data-placement="bottom" title="Si no conoce la ID, agregue un nuevo Tratamiento"> 
                                        </div>                                        
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-primary btn-label-left">
						<span><i class="fa fa-clock-o"></i></span>
							Buscar
                                            </button>
                                        </div>
                                    </div>                                    
                                </form>                                
                                <h4 class="page-header">Datos del Tratamiento</h4>
                                <?php
                                    $attributes = 'class="form-horizontal"';
                                    $id = array(
                                        'name' => 'Id',
                                        'placeholder'=>'Ingrese el Código del Tratamiento',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Código Tratamiento'  
                                    );
                                    $nombre = array(
                                        'name' => 'Nombre',
                                        'placeholder'=>'Ingrese el Nombre del Tratamiento',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Nombre Tratamiento'  
                                    );
                                    $sistema = array(
                                        'name' => 'Sistema',
                                        'placeholder'=>'Ingrese el Sistema Tratado',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Sistema Tratado'  
                                    );
                                    $descripcion = array(
                                        'name' => 'Descripcion',
                                        'placeholder'=>'Ingrese la Descripcion del Tratamiento',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Descripcion Tratamiento',
                                        'rows' => '3'
                                    );
                                    $indicaciones = array(
                                        'name' => 'Indicaciones',
                                        'placeholder'=>'Ingrese las Indicaciones de Administracion',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Indicaciones de administracion' ,
                                        'rows' => '3'
                                    );
                                    
                                    
                                ?>
				<?= form_open('administrarTratamientos/recibirDatos', $attributes)?>
					<div class="form-group">
						<label class="col-sm-2 control-label">ID del Tratamiento</label>
                                                <div class="col-sm-4">
                                                    <?= form_input($id)?>
                                                </div>
						<label class="col-sm-2 control-label">Nombre</label>
                                                <div class="col-sm-4">
                                                    <?= form_input($nombre)?>
                                                </div>
					</div>
					<div class="form-group has-success">
						<label class="col-sm-2 control-label">Sistema Tratado</label>
                                                <div class="col-sm-4">
                                                    <?= form_input($sistema)?>
                                                </div>						
					</div>
					<div class="form-group has-warning">
						<label class="col-sm-2 control-label" for="form-styles">Descripción del Tratamiento</label>
                                                <div class="col-sm-10">
                                                    <?= form_textarea($descripcion)?>
                                                </div>
					</div>
                                        <div class="form-group has-error">
						<label class="col-sm-2 control-label" for="form-styles">Indicaciones de Administración</label>
                                                <div class="col-sm-10">
                                                    <?= form_textarea($indicaciones)?>
                                                </div>
					</div>
                                        <div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
                                                    <button type="cancel" class="btn btn-primary btn-label-left" name="btotratamiento" value="Agregar">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Agregar
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" name="btotratamiento" value="Actualizar">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Actualizar
							</button>
						</div>
                                                <div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" name="btotratamiento" value="Eliminar">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Eliminar
							</button>
						</div>
                                                <div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" name="btotratamiento" value="Cancelar">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancelar
							</button>
						</div>
					</div>
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
