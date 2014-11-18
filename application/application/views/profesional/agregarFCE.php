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
    $vacunas = array(
        'name'=> 'vacunas',
        'placeholder'=>'Ingrese una vacuna',
        'type'=>'text',
        'class' =>'form-control');
    
    //crear input (arreglo) para alergias
    $alergias = array(
        'name'=>'alergias',
        'type'=>'text',
        'placeholder'=>'Ingrese una alergia',
        'class' => 'form-control');
    
    //crear input (arreglo) para medicamentos
    $medicamentos = array(
        'name'=> 'medicamentos',
        'type'=>'text',
        'placeholder'=>'Ingrese un medicamento',
        'class' => 'form-control');
    
    //crear input (arreglo) para enfermedades
    $enfermedades = array(
        'name'=>'enfermedades',
        'placeholder'=>'Ingrese una enfermedad',
        'type'=>'text',
        'class' => 'form-control');
    
    //crear input (arreglo) para accidentes
    $accidentes = array(
        'name'=>'accidentes',
        'type'=>'text',
        'placeholder'=>'Ingrese un accidente',
        'class' => 'form-control');
    
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
                    
                    <!-- creao arreglo de vacunas-->
                    <div class="form-group">
                        <div class="example example_objects_as_vacunas">
                            <?= form_label('Vacunas','form-styles', $attr_lbl);?>
                            <div class="bs-example col-sm-10">
                              <?=form_input($vacunas);?>
                            </div>
                        </div>
                    </div>
                    <!-- fin arreglo de vacunas -->
                   
                    <!-- creao arreglo de alergias-->
                    <div class="form-group">
                        <div class="example example_objects_as_alergias">
                            <?= form_label('Alergias','form-styles', $attr_lbl);?>
                            <div class="bs-example col-sm-10">
                              <?=form_input($alergias);?>
                            </div>
                        </div>
                    </div>
                    <!-- fin arreglo de alergias -->
                    
                    <!-- crear arreglo de medicamentos-->
                    <div class="form-group">
                        <div class="example example_objects_as_medicamentos">
                             <?= form_label('Medicamentos','', $attr_lbl);?>
                            <div class="bs-example col-sm-10">
                             <?=form_input($medicamentos);?>
                            </div>
                        </div>
                    </div><!-- fin arreglo de medicamentos -->
                    
                    <!-- crear arreglo de enfermedades-->
                    <div class="form-group">
                        <div class="example example_objects_as_enfermedades">
                             <?= form_label('Enfermedades','', $attr_lbl);?>
                            <div class="bs-example col-sm-10">
                             <?=form_input($enfermedades);?>
                            </div>
                        </div>
                    </div><!-- fin arreglo de enfermedades -->
                    
                    <!-- crear arreglo de accidentes -->
                    <div class="form-group">
                        <div class="example example_objects_as_accidentes">
                             <?= form_label('Accidentes','',$attr_lbl);?>
                            <div class="bs-example col-sm-10">
                             <?=form_input($accidentes);?>
                            </div>
                        </div>
                    </div><!-- fin arreglo de accidentes -->
                    
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
