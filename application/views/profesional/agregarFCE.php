<?php
    //atributos del formulario
    $attributes = 'class="form-horizontal" role="form" name="defaultForm" id="formulario_ajax" onSubmit="return ingresarFCE(this)"';
    //clase utilizada por los label
    $attr_lbl = array('class' => 'col-lg-2 control-label');
    //crear input paciente
    $rut = array('name'=>'rut','id'=>'rut','placeholder'=>'Seleccione un paciente','class' => 'form-control');
    //crear texarea descripcion breve
    $desc_breve = array('name'=> 'desc_breve','placeholder'=>'Descripcion Breve','class' => 'form-control',
        'data-toggle' => 'tooltip',
        'title'=> 'Descripcion Breve',
        'rows' => '3'
    );
    //crear input (arreglo) para vacunas
    $vacunas = array('name'=> 'vacunas[]','placeholder'=>'Ingrese una vacuna','class' =>'form-control');
    //crear boton agregar vacuna
    $btn_agregar_vacuna = array(
        'name' => 'agregar_vacuna',
        'id' => 'button',
        'value' => 'true',
        'type' => 'button',
        'class'=>'btn btn-warning btn-label-left addButton',
        'data-template'=>'vacunas',
        'content'=>'<span><i class="fa fa-clock-o"></i></span>Agregar mas Vacunas'
    );
    //boton eliminar vacuna
    $btn_eliminar_vacuna = array(
        'name' => 'eliminar_vacuna',
        'id' => 'button',
        'value' => 'true',
        'type' => 'cancel',
        'class'=>'btn btn-default btn-label-left removeButton',
        'content'=>'<span><i class="fa fa-clock-o txt-danger"></i></span>Eliminar Vacuna'
    );
    
    //crear input (arreglo) para alergias
    $alergias = array('name'=> 'alergias[]','placeholder'=>'Ingrese una alergia','class' => 'form-control');
     //crear boton agregar alergia
    $btn_agregar_alergia = array(
        'name' => 'agregar_alergia',
        'id' => 'button',
        'value' => 'true',
        'type' => 'button',
        'class'=>'btn btn-warning btn-label-left addButton',
        'data-template'=>'alergias',
        'content'=>'<span><i class="fa fa-clock-o"></i></span>Agregar mas Alergias'
    );
    //boton eliminar alergia
    $btn_eliminar_alergia = array(
        'name' => 'eliminar_alergia',
        'id' => 'button',
        'value' => 'true',
        'type' => 'cancel',
        'class'=>'btn btn-default btn-label-left removeButton',
        'content'=>'<span><i class="fa fa-clock-o txt-danger"></i></span>Eliminar Alergia'
    );
    
    //crear input (arreglo) para medicamentos
    $medicamentos = array('name'=> 'medicamentos[]','placeholder'=>'Ingrese un medicamento','class' => 'form-control');
     //crear boton agregar medicamentos
    $btn_agregar_medicamento = array(
        'name' => 'agregar_medicamento',
        'id' => 'button',
        'value' => 'true',
        'type' => 'button',
        'class'=>'btn btn-warning btn-label-left addButton',
        'data-template'=>'medicamentos',
        'content'=>'<span><i class="fa fa-clock-o"></i></span>Agregar mas medicamentos'
    );
    //boton eliminar medicamento
    $btn_eliminar_medicamento = array(
        'name' => 'eliminar_medicamento',
        'id' => 'button',
        'value' => 'true',
        'type' => 'cancel',
        'class'=>'btn btn-default btn-label-left removeButton',
        'content'=>'<span><i class="fa fa-clock-o txt-danger"></i></span>Eliminar medicamento'
    );
    
    //crear input (arreglo) para enfermedades
    $enfermedades = array('name'=> 'enfermedades[]','placeholder'=>'Ingrese una enfermedad','class' => 'form-control');
     //crear boton agregar anfermedad
    $btn_agregar_enfermedad = array(
        'name' => 'agregar_enfermedad',
        'id' => 'button',
        'value' => 'true',
        'type' => 'button',
        'class'=>'btn btn-warning btn-label-left addButton',
        'data-template'=>'enfermedades',
        'content'=>'<span><i class="fa fa-clock-o"></i></span>Agregar mas enfermedades'
    );
    //boton eliminar enfermedad
    $btn_eliminar_enfermedad = array(
        'name' => 'eliminar_enfermedad',
        'id' => 'button',
        'value' => 'true',
        'type' => 'cancel',
        'class'=>'btn btn-default btn-label-left removeButton',
        'content'=>'<span><i class="fa fa-clock-o txt-danger"></i></span>Eliminar enfermedad'
    );
    
    //crear input (arreglo) para accidentes
    $accidentes = array('name'=> 'accidentes[]','placeholder'=>'Ingrese un accidente','class' => 'form-control');
     //crear boton agregar accidentes
    $btn_agregar_accidentes = array(
        'name' => 'agregar_accidentes',
        'id' => 'button',
        'value' => 'true',
        'type' => 'button',
        'class'=>'btn btn-warning btn-label-left addButton',
        'data-template'=>'accidentes',
        'content'=>'<span><i class="fa fa-clock-o"></i></span>Agregar mas accidentes'
    );
    //boton eliminar accidente
    $btn_eliminar_accidente = array(
        'name' => 'eliminar_accidente',
        'id' => 'button',
        'value' => 'true',
        'type' => 'cancel',
        'class'=>'btn btn-default btn-label-left removeButton',
        'content'=>'<span><i class="fa fa-clock-o txt-danger"></i></span>Eliminar accidente'
    );
    //crear texarea observaciones
    $observaciones = array('name'=> 'observaciones','placeholder'=>'Observaciones','class' => 'form-control',
        'data-toggle' => 'tooltip',
        'title'=> 'Observaciones',
        'rows' => '5'
    );
    //crear boton submit
    $btn_submit = array(
        'name' => 'btn_fce',
        'id' => 'btn_fce',
        'value' => 'agregarFCE',
        'type' => 'submit',
        //'onclick'=>'ingresarFCE()',
        'class'=>'btn btn-primary btn-label-left',
        'content'=>'<span><i class="fa fa-clock-o"></i></span>Añadir Ficha Clinica'
    );
?>
<!--Start Content-->
<div id="content" class="col-xs-12 col-sm-10">        
    <div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
            <li><a href="#"><?=$institucion;?></a></li>
			<li><a href="#">Fichas Medicas Electronicas</a></li>
            <li><a href="#"><?=$perfil;?></a></li>
            <li><a href="#"><?=$profesional;?></a></li>
		</ol>
	</div>
    </div>
    <div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Ficha Clinica Electronica</span>
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
				<h4 class="page-header">Crear Ficha Clinica Electronica</h4>
                
                    <?= form_open('profesional/recibirdatosFCE',$attributes)?>
                    <!-- input paciente -->
                     <div class="form-group">
                            <?= form_label('Paciente','form-styles',$attr_lbl);?>
                        <div class="col-sm-5">
                            <?=form_input($rut);?>
                            <div id="error_rut"></div>
                        </div>
                          
                    </div><!-- fin input paciente --> 
                    
                    <!-- descripcion breve -->
                    <div class="form-group">
                            <?=form_label('Descripcion breve','form-styles',$attr_lbl);?>
						<div class="col-sm-10">
                            <?= form_textarea($desc_breve);?> 
						</div>
					</div><!-- fin descripcion breve --> 
                    <hr>
                    <!-- creao arreglo de vacunas-->
                    <div class="form-group">
                            <?= form_label('Vacunas','form-styles', $attr_lbl);?>
                        <div class="col-lg-5">
                            <?=form_input($vacunas);?>
                        </div>
                        <div class="col-lg-4">
                            <?=form_button($btn_agregar_vacuna);?>
                        </div>
                    </div>
                    <div class="form-group hide" id="vacunasTemplate">
                        <div class="col-lg-offset-2 col-lg-5">
                            <input class="form-control" type="text" />
                        </div>
                        <div class="col-lg-4">
                            <?=form_button($btn_eliminar_vacuna);?>
                        </div>
                    </div><!-- fin arreglo de vacunas -->
                    <hr>
                    <!-- creao arreglo de alergias-->
                    <div class="form-group">
                            <?= form_label('Alergias','form-styles', $attr_lbl);?>
                        <div class="col-lg-5">
                            <?=form_input($alergias);?>
                        </div>
                        <div class="col-lg-4">
                           <?=form_button($btn_agregar_alergia);?>
                        </div>
                    </div>
                    <div class="form-group hide" id="alergiasTemplate">
                        <div class="col-lg-offset-2 col-lg-5">
                            <input class="form-control" type="text" />
                        </div>
                        <div class="col-lg-4">
                            <?=form_button($btn_eliminar_alergia);?>
                        </div>
                    </div><!-- fin arreglo de alergias -->
                    <hr>
                    <!-- crear arreglo de medicamentos-->
                    <div class="form-group">
                        <?= form_label('Medicamentos','', $attr_lbl);?>
                        <div class="col-lg-5">
                            <?=form_input($medicamentos);?>
                        </div>
                        <div class="col-lg-4">
                           <?=form_button($btn_agregar_medicamento);?>
                        </div>
                    </div>
                    <div class="form-group hide" id="medicamentosTemplate">
                        <div class="col-lg-offset-2 col-lg-5">
                            <input class="form-control" type="text" />
                        </div>
                        <div class="col-lg-4">
                            <?=form_button($btn_eliminar_medicamento);?>
                        </div>
                    </div><!-- fin arreglo de medicamentos -->
                    <hr>
                    <!-- crear arreglo de enfermedades-->
                    <div class="form-group">
                            <?= form_label('Enfermedades','', $attr_lbl);?>
                        <div class="col-lg-5">
                            <?=form_input($enfermedades);?>
                        </div>
                        <div class="col-lg-4">
                           <?=form_button($btn_agregar_enfermedad);?>
                        </div>
                    </div>
                    <div class="form-group hide" id="enfermedadesTemplate">
                        <div class="col-lg-offset-2 col-lg-5">
                            <input class="form-control" type="text" />
                        </div>
                        <div class="col-lg-4">
                            <?=form_button($btn_eliminar_enfermedad);?>
                        </div>
                    </div><!-- fin arreglo de enfermedades -->
                    <hr>
                    <!-- crear arreglo de accidentes -->
                    <div class="form-group">
                            <?= form_label('Accidentes','',$attr_lbl);?>
                        <div class="col-lg-5">
                            <?=form_input($accidentes);?>
                        </div>
                        <div class="col-lg-4">
                           <?=form_button($btn_agregar_accidentes);?>
                        </div>
                    </div>
                    <div class="form-group hide" id="accidentesTemplate">
                        <div class="col-lg-offset-2 col-lg-5">
                            <input class="form-control" type="text" />
                        </div>
                        <div class="col-lg-4">
                            <?=form_button($btn_eliminar_accidente);?>
                        </div>
                    </div><!-- fin arreglo de accidentes -->
                    <hr>
					<div class="form-group">
						<?= form_label('Observaciones','', $attr_lbl);?>
						<div class="col-sm-10">
                        <?= form_textarea($observaciones);?>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
						<?=form_button($btn_submit);?>
						</div>
                   </div>
                    <div class="clearfix"></div>
                    <div id="progreso"></div>
                </form>
			</div>
		</div>
	</div>
</div>
</div>

<!--End Content-->
