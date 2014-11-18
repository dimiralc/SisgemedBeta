<!--Start Content-->
<?php
    $attributes = 'class= "form-horizontal"';
    $run = array(
            'name'=> 'Run',
            'placeholder'=>'Ingrese su Rut',
            'value'=>$datos_administrador->rut,
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Rol Único Nacional'                                                                                  
        );
    $pnombre = array(
            'name'=> 'Pnombre',
            'placeholder'=>'Ingrese su Nombre',
            'value'=>$datos_administrador->primer_nombre,
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su Primer Nombre'
        );
    $snombre = array(
            'name'=> 'Snombre',
            'placeholder'=>'Ingrese su segundo nombre',
            'value'=>$datos_administrador->segundo_nombre,
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su segundo nombre'
        );
    $paterno = array(
            'name'=> 'Paterno',
            'placeholder'=>'Ingrese su apellido paterno',
            'value'=>$datos_administrador->apellido_paterno,    
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su apellido paterno'
        );
    $materno = array(
            'name'=> 'Materno',
            'placeholder'=>'Ingrese su apellido materno',
            'value'=>$datos_administrador->apellido_materno,
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su apellido materno'
        );
    $telefono = array(
            'name'=> 'Telefono',
            'placeholder'=>'Ingrese su telefono de contacto',
            'value'=>$datos_administrador->telefono, 
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Celular o Fijo'
        ); 
    $fecnac = array(
            'name'=> 'Fecnac',
            'placeholder'=>'Fecha de Nacimiento',
            'value'=>$datos_administrador->fecha_nacimiento,
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su fecha de Naciemiento'

        );
    $correo = array(
            'name'=> 'correo',
            'placeholder'=>'Correo electronico',
            'value'=>$datos_administrador->correo,
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su correo electronico'                                            
        );
         
    $direccion = array(
            'name'=> 'Direccion',
            'placeholder'=>'Direccion de residencia',
            'value'=>$datos_administrador->direccion,
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su direccion personal',
            'rows' => '2'
        );
    $passactual = array(
            'name'=> 'Pactual',
            'placeholder'=>'Contraseña Actual',
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su contraseña de acceso'                                            
        );
     $passnueva = array(
            'name'=> 'Pnueva',
            'placeholder'=>'Contraseña Nueva',
            'size' => '90',
            'class' => 'form-control',
            'data-placement' => 'bottom',
            'data-toggle' => 'tooltip',
            'title'=> 'Su cnueva contraseña'                                            
        );
     
     $genero_m = array(
              'name'        => 'genero',
              'value'       => 'M',
              'checked'     => $datos_administrador->sexo=='M'?TRUE:FALSE,
            );
     $genero_f = array(
              'name'        => 'genero',
              'value'       => 'F',
              'checked'     => $datos_administrador->sexo=='F'?TRUE:FALSE,
            );
?>
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
            <li><a href="<?=base_url();?>administrador"><?=$institucion;?></a></li>
			<li><a href="<?=base_url();?>administrador/perfil">Perfil</a></li> 
            <li><a href="#"><?=$perfil;?></a></li>
            <li><a href="#"><?=$administrador;?></a></li>
		</ol>
	</div>
    </div>
    <div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Mi Perfil</span>
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
				<h4 class="page-header">Mi Perfil de Usuario</h4>
				<!-- Fin Metadatos del Formulario de Registro de Medicamentos -->
                    <?= form_open('perfil/recibirdatos', $attributes)?>
					<div class="form-group">
						<label class="col-sm-2 control-label">Run</label>
						<div class="col-sm-4">
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
						<label class="col-sm-2 control-label">País de Residencia</label>
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
                        <label class="col-sm-2 control-label">Correo</label>
                            <div class="col-sm-3">
                                <?=form_input($correo)?>
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
                        <div class="row form-group">
                                <div class="col-sm-4">
                                    <div class="radio">
                                        <label>
                                            <?=form_radio($genero_m);?> Masculino
                                            <i class="fa fa-circle-o"></i>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <?=form_radio($genero_f);?> Femenino
                                            <i class="fa fa-circle-o"></i>
                                        </label>
                                    </div>                                                        
                                </div>
                        </div>
                    </div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Dirección</label>
						<div class="col-sm-10">
                           <?= form_textarea($direccion)?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Cambio de Contraseña</label>
						<div class="col-sm-2">
                             <div class="input-group">
                                  <?= form_input($passactual)?>
                                  <span class="input-group-addon"><i class="fa fa-key"></i></span>
                             </div>
						</div>
						<div class="col-sm-2">
							<div class="input-group">
                               <?= form_input($passnueva) ?>
                               <span class="input-group-addon"><i class="fa fa-key"></i></span>
							</div>
						</div>
					</div>
                    <div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
                            <button type="submit" class="btn btn-default btn-label-left" value="Cancelar" name="btoPerfil">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancelar
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left" value="Guardar" name="btoPerfil">
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
					<span>Imagen de Perfil</span>
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
                <img src="<?=  base_url();?>img/administradores/<?=$datos_administrador->imagen?>" width="150"alt="<?=$administrador;?>">
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
