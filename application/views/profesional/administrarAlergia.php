<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Administrar Alergias</a></li> 
		</ol>
	</div>
    </div>
    <div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
                                <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Administración de Alergias</span>
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
                                        <label class="col-sm-2 control-label">ID de Alergia</label>
                                        <div class="col-sm-4">
                                                <input type="text" class="form-control" placeholder="Ingrese el Id de la Alergia" data-toggle="tooltip" data-placement="bottom" title="Si no conoce la ID, agregue una nueva Alergia"> 
                                        </div>                                        
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-primary btn-label-left">
						<span><i class="fa fa-clock-o"></i></span>
							Buscar
                                            </button>
                                        </div>
                                    </div>                                    
                                </form>                                
                                <h4 class="page-header">Datos de la Alergia</h4>
                                <?php
                                    $attributes = 'class="form-horizontal"';
                                    $id = array(
                                        'name' => 'Id',
                                        'placeholder'=>'Ingrese el Código de la Alergia',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Código Patología'  
                                    );
                                    $nombre = array(
                                        'name' => 'Nombre',
                                        'placeholder'=>'Ingrese el Nombre de la Alergia',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Nombre Alergia'  
                                    );
                                    $alergeno = array(
                                        'name' => 'Alergeno',
                                        'placeholder'=>'Ingrese el Alergeno detectado',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Alergeno Detectado'  
                                    );
                                    $zona = array(
                                        'name' => 'Zona',
                                        'placeholder'=>'Ingrese la Zona comprometida',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Zona Comprometida'  
                                    );
                                    $sintomatologia = array(
                                        'name' => 'Sintomatologia',
                                        'placeholder'=>'Ingrese los síntomas asociados',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Síntomas Asociados',
                                        'rows' => '3'
                                    );
                                    $indicaciones = array(
                                        'name' => 'Indeicaciones',
                                        'placeholder'=>'Ingrese las Indicaciones preliminares',
                                        'size' => '90',
                                        'class' => 'form-control',
                                        'data-placement' => 'bottom',
                                        'data-toggle' => 'tooltip',
                                        'title'=> 'Indicaciones Preliminares' ,
                                        'rows' => '3'
                                    );
                                    
                                    
                                ?>
				<?= form_open('administrarAlergia/recibirDatos', $attributes)?>
					<div class="form-group">
						<label class="col-sm-2 control-label">ID de la Alergia</label>
                                                <div class="col-sm-4">
                                                    <?= form_input($id)?>
                                                </div>
						<label class="col-sm-2 control-label">Nombre</label>
                                                <div class="col-sm-4">
                                                    <?= form_input($nombre)?>
                                                </div>
					</div>
					<div class="form-group has-success">
						<label class="col-sm-2 control-label">Alérgeno Detectado</label>
                                                <div class="col-sm-4">
                                                    <?= form_input($alergeno)?>
                                                </div>
						<label class="col-sm-2 control-label">Zona Afectada</label>
                                                <div class="col-sm-4">
                                                    <?= form_input($zona)?>
                                                </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Sintomatología</label>
                                                <div class="col-sm-10">
                                                    <?= form_textarea($sintomatologia)?>
                                                </div>
					</div>
                                        <div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Indicaciones Preliminares</label>
                                                <div class="col-sm-10">
                                                    <?= form_textarea($indicaciones)?>
                                                </div>
					</div>
                                        <div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
                                                    <button type="cancel" class="btn btn-primary btn-label-left" name="btoalergia" value="Agregar">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Agregar
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" name="btoalergia" value="Actualizar">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Actualizar
							</button>
						</div>
                                                <div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" name="btoalergia" value="Eliminar">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Eliminar
							</button>
						</div>
                                                <div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" name="btoalergia" value="Cancelar">
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
