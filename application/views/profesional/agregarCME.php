<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="#">Inicio</a></li>
			<li><a href="#">Consulta Médica Electrónica CME</a></li> 
		</ol>
	</div>
    </div>
    <?= form_open('administrarCME/recibirDatos')?>
    <div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
                                <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Consulta Médica Electrónica</span>
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
				<h4 class="page-header">Nueva Consulta Médica</h4>
                                <!-- Metadatos del Formulario de Ingreso de Medicamentos -->
                                <?php
                                    $attributes = 'class= "form-horizontal"';
                                    $nombre = array(
                                            'name'=> 'Nombre',
                                            'placeholder'=>'Nombre del Paciente',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Nombre del paciente'                                                                                  
                                        );
                                    $snombre = array(
                                            'name'=> 'Snombre',
                                            'placeholder'=> 'Segundo Nombre',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Segundo Nombre'
                                        );
                                    $paterno = array(
                                            'name'=> 'Paterno',
                                            'placeholder'=>'Apellido Paterno',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Apellido Paterno'
                                        );
                                    $materno = array(
                                            'name'=> 'Materno',
                                            'placeholder'=>'Apellido Materno',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Apellido Materno'
                                        );
                                    $peso = array(
                                            'name'=> 'Peso',
                                            'placeholder'=>'Peso del Paciente',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Peso del Paciente'
                                        );
                                    $estatura = array(
                                            'name'=> 'Estatura',
                                            'placeholder'=>'Estatura del Paciente',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Estatura del Paciente'
                                        );
                                    $patologia = array(
                                            'name'=> 'Patologia',
                                            'placeholder'=>'Patologia detectada',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Patologia detectada',
                                            'rows' => '2'
                                        );
                                    $estadoSalud = array(
                                            'name'=> 'EstadoSalud',
                                            'placeholder'=>'Estado de Salud del Paciente',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Estado de Salud del paciente',
                                            'rows' => '2'
                                        );
                                    $habitos = array(
                                            'name'=> 'Habitos',
                                            'placeholder'=>'Hábitos contraindicados',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Hábitos contraindicados',
                                            'rows' => '2'
                                        );
                                    $examenes = array(
                                            'name'=> 'Examenes',
                                            'placeholder'=>'Exámenes sugeridos',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Exámenes a realizar',
                                            'rows' => '2'
                                        );
                                    $medicamentos = array(
                                            'name'=> 'Medicamentos',
                                            'placeholder'=>'Medicamentos Sugeridos',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'No reemplazan a la Receta Médica',
                                            'rows' => '2'
                                        );
                                    $reposo = array(
                                            'name'=> 'Reposo',
                                            'placeholder'=>'Período de Reposo',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Período de Reposo',
                                            'rows' => '2'
                                        );
                                    $espacialidadSugerida = array(
                                            'name'=> 'EspecialidadSugerida',
                                            'placeholder'=>'Remitir a una especialidad',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Remitir a una especialidad',
                                            'rows' => '2'
                                        );
                                    $cirugias = array(
                                            'name'=> 'Cirugias',
                                            'placeholder'=>'Cirugias previas',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Cirugias previas',
                                            'rows' => '2'
                                        );
                                    $fechaControl = array(
                                            'name'=> 'FechaControl',
                                            'placeholder'=>'Fecha del Control',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Fecha del Control',
                                            'rows' => '2'
                                        );
                                    $observaciones = array(
                                            'name'=> 'Observaciones',
                                            'placeholder'=>'Observaciones',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Observaciones',
                                            'rows' => '2'
                                        );
                                    $preliminar = array(
                                            'name'=> 'Preliminar',
                                            'placeholder'=>'Diagnóstico Preliminar',
                                            'size' => '90',
                                            'class' => 'form-control',
                                            'data-placement' => 'bottom',
                                            'data-toggle' => 'tooltip',
                                            'title'=> 'Primeras impresiones',
                                            'rows' => '2'
                                        );
                                    
                                ?>
                                <!-- Fin Metadatos del Formulario de Registro de Medicamentos -->
                                
                                <div class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-4">
							<?=form_input($nombre)?>
						</div>
						<label class="col-sm-2 control-label">Segundo N.</label>
						<div class="col-sm-4">
							<?=form_input($snombre)?>
                                                </div>
					</div>
					<div class="form-group has-success">
						<label class="col-sm-2 control-label">A. Materno</label>
						<div class="col-sm-4">
							<?=form_input($paterno)?>
						</div>
						<label class="col-sm-2 control-label">A. Paterno</label>
						<div class="col-sm-4">
							<?=form_input($materno)?>
							<span class="form-control-feedback"></span>
						</div>
					</div>
                                        <div class="form-group has-warning">
						<label class="col-sm-2 control-label">Peso (Kg)</label>
						<div class="col-sm-4">
							<?=form_input($peso)?>
						</div>
						<label class="col-sm-2 control-label">Estatura (Cms)</label>
						<div class="col-sm-4">
							<?=form_input($estatura)?>
							<span class="form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Patología detectada</label>
						<div class="col-sm-10">
							<?=  form_textarea($patologia)?>
						</div>
					</div>
                                        <div class="form-group has-warning">
						<label class="col-sm-2 control-label" for="form-styles">Estado de Salud</label>
                                                <div class="col-sm-10">
                                                        <?=  form_textarea($estadoSalud)?>
                                                </div>
					</div>
                                        <div class="form-group has-error">
						<label class="col-sm-2 control-label" for="form-styles">Malos Hábitos</label>
                                                <div class="col-sm-10">
                                                        <?=  form_textarea($habitos)?>
                                                </div>
					</div>
                                        <div class="clearfix"></div>    
			</div>
		</div>
	</div>
        <div class="col-xs-12">
		<div class="box">
			<div class="box-header">
                                <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Adjuntar Archivos</span>
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
				<h4 class="page-header">Adjuntar Archivo</h4>   
                                <form enctype="multipart/form-data" action="uploader.php" method="POST" class="form-group">
                                    <input name="uploadedfile" type="file"/>
                                    <div class="clearfix"></div>
                                    <label class="control-label">Archivos Permitidos: JPG, PDF, DOC, DOCX</label> 
                                    <div class="clearfix"></div>
                                    <input type="submit" value="Subir archivo" class="btn btn-primary btn-label-left" />
                                </form> 
					
			</div>
		</div>
	</div>
        <div class="col-xs-12">
		<div class="box">
			<div class="box-header">
                                <div class="box-name">
					<i class="fa fa-search"></i>
					<span>Recomandaciones Clínicas</span>
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
				<h4 class="page-header">Recomendaciones Clínicas</h4>
                                <div class="form-horizontal">
                                        <div class="form-group">
						<label class="col-sm-2 control-label">Exémenes a Realizar</label>
						<div class="col-sm-4">
							<?=form_input($examenes)?>
						</div>
						<label class="col-sm-2 control-label">Medicamentos Sugeridos</label>
						<div class="col-sm-4">
							<?=form_input($medicamentos)?>
                                                </div>
					</div>
					<div class="form-group has-success">
						<label class="col-sm-2 control-label">Indicación de Reposo</label>
						<div class="col-sm-4">
							<?=form_input($reposo)?>
						</div>
						<label class="col-sm-2 control-label">Remitir a especialidad Médica </label>
						<div class="col-sm-4">
							<?=form_input($espacialidadSugerida)?>
							<span class="form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Intervenciones Quirúrgicas</label>
						<div class="col-sm-4">
							<?=form_input($cirugias)?>
							<span class="txt-warning form-control-feedback"></span>
						</div>
						<label class="col-sm-2 control-label">Fecha de Control</label>
                                                <div class="col-sm-4">
                                                        <?=form_input($fechaControl)?>
                                                </div>						
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Observaciones / Recomendaciones</label>
						<div class="col-sm-10">
							<?=  form_textarea($observaciones)?>
						</div>
					</div>
                                        <div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Diagnóstico Preliminar</label>
                                                <div class="col-sm-10">
                                                        <?=  form_textarea($preliminar)?>
                                                </div>
					</div>
                                        <div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" class="btn btn-primary btn-label-left" value="Agregar" name="btoConsulta">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Agregar
							</button>
						</div>
						<div class="col-sm-2">
                                                    <button type="submit" class="btn btn-primary btn-label-left" value="Cancelar" name="btoConsulta">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancelar
							</button>
						</div>
					</div>
				
			</div>
		</div>
	</div>
</div>

<?= form_close()?>
    </div>
</div>
<!--End Content-->
