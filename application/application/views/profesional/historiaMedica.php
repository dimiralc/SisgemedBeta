<!-- 
http://es.slideshare.net/eolmas/landa-med 
http://escuela.med.puc.cl/Publ/ManualSemiologia/050EjemploHistClini.htm
http://escuela.med.puc.cl/paginas/Cursos/tercero/IntegradoTercero/ApSemiologia/07_HriaClinica.html
http://escuela.med.puc.cl/Publ/ManualSemiologia/025LaHistoriaClinica.htm
http://slideplayer.es/slide/119776/
-->
<?php
$attributes = 'class= "form-horizontal"';
$id_historia_medica = array(
    'name'=> 'id_historia_medica',
    'placeholder'=>$datos_paciente->id_historia_medica,
    'class' => 'form-control',
    'id'=>'inputHistoriaMedica',
    'readonly'=>'true',
    'title'=> 'Id historia medica del paciente'                                                                                  
);

$rut = array(
    'name'=> 'rut',
    'placeholder'=>$datos_paciente->rut,
    'class' => 'form-control',
    'id'=>'inputPassword',
    'readonly'=>'true',
    'title'=> 'rut del paciente'                                                                                  
);

$nombre = array(
    'name'=> 'rut',
    'placeholder'=>$datos_paciente->primer_nombre." ".$datos_paciente->segundo_nombre." ".
    $datos_paciente->apellido_paterno." ".$datos_paciente->apellido_materno,
    'class' => 'form-control',
    'id'=>'inputNombre',
    'readonly'=>'true',
    'title'=> 'nombre del paciente'                                                                                  
);

$fecha_nacimiento = array(
    'name'=> 'fecha_nacimiento',
    'placeholder'=>$datos_paciente->fecha_nacimiento,
    'class' => 'form-control',
    'id'=>'inputFechaNac',
    'readonly'=>'true',
    'title'=> 'fecha de nacimiento del paciente'                                                                                  
);

/**********************************************************************************/
/*** OBTENER EDAD DEL PACIENTE
 * 
 **********************************************************************************/
$edad= $datos_paciente->fecha_nacimiento;
//Se debe pasar esta funcion a un helper
function CalculaEdad( $fecha ) {
    list($Y,$m,$d) = explode("-",$fecha);
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}
$edad = array(
    'name'=> 'edad',
    'placeholder'=>CalculaEdad($edad),
    'class' => 'form-control',
    'id'=>'inputEdad',
    'readonly'=>'true',
    'title'=> 'edad del paciente'                                                                                  
);

$lugar_nac = array(
    'name'=> 'lugar_nac',
    'placeholder'=>$datos_paciente->nom_region,
    'class' => 'form-control',
    'id'=>'inputLugarNacimientp',
    'readonly'=>'true',
    'title'=> 'nombre de la region donde nacio el paciente'                                                                                  
);

$direccion = array(
    'name'=> 'direccion',
    'placeholder'=>$datos_paciente->direccion,
    'class' => 'form-control',
    'id'=>'inputDireccion',
    'readonly'=>'true',
    'title'=> 'direccion actual del paciente'                                                                                  
);

$nivel_estudio = array(
    'name'=> 'nivel_estudio',
    'placeholder'=>$datos_paciente->nivel_estudio,
    'class' => 'form-control',
    'id'=>'inputNivelEstudio',
    'readonly'=>'true',
    'title'=> 'nivel de estudio del paciente'                                                                                  
);

$ocupacion = array(
    'name'=> 'ocupacion',
    'placeholder'=>$datos_paciente->ocupacion,
    'class' => 'form-control',
    'id'=>'inputOcupacion',
    'readonly'=>'true',
    'title'=> 'Ocupacion actual del paciente'                                                                                  
);

//setear campo sexo
$genero =  ($datos_paciente->sexo == 'M')  ? "masculino"  : "femenino";
$sexo = array(
    'name'=> 'sexo',
    'placeholder'=>$genero,
    'class' => 'form-control',
    'id'=>'inputSexo',
    'readonly'=>'true',
    'title'=> 'Sexo del paciente'                                                                                  
);
$estado_civil = array(
    'name'=> 'estado_civil',
    'placeholder'=>$datos_paciente->estado_civil,
    'class' => 'form-control',
    'id'=>'inputEstadoCivil',
    'readonly'=>'true',
    'title'=> 'estado civil del paciente'                                                                                  
);

$prevision_medica = array(
    'name'=> 'prevision_medica',
    'placeholder'=>$datos_paciente->prevision_medica,
    'class' => 'form-control',
    'id'=>'inputPrevisionMedica',
    'readonly'=>'true',
    'title'=> 'prevision medica del paciente'                                                                                  
);

$prevision_medica = array(
    'name'=> 'prevision_medica',
    'placeholder'=>$datos_paciente->prevision_medica,
    'class' => 'form-control',
    'id'=>'inputPrevisionMedica',
    'readonly'=>'true',
    'title'=> 'prevision medica del paciente'                                                                                  
);

$telefono = array(
    'name'=> 'telefono',
    'placeholder'=>$datos_paciente->telefono,
    'class' => 'form-control',
    'id'=>'inputTelefono',
    'readonly'=>'true',
    'title'=> 'telefono del paciente'                                                                                  
);

$correo = array(
    'name'=> 'correo',
    'placeholder'=>$datos_paciente->correo,
    'class' => 'form-control',
    'id'=>'inputCorreo',
    'readonly'=>'true',
    'title'=> 'correo del paciente'                                                                                  
);

$fecha_ingreso = array(
    'name'=> 'fecha_ingreso',
    'placeholder'=>$datos_paciente->fecha_ingreso,
    'class' => 'form-control',
    'id'=>'inputFechaIngreso',
    'readonly'=>'true',
    'title'=> 'fecha ingreso del paciente'                                                                                  
);
?>
<div id="content" class="col-xs-12 col-sm-10">
    
    <div class="row">

        <div id="breadcrumb" class="col-xs-12">

            <ol class="breadcrumb">

                <li><a href="#"><?=$titulo?> </a></li>

                            <li><a href="#"><?=$institucion;?></a></li>

                            <li><a href="#"><?=$perfil;?></a></li>

                            <li><a href="#"><?=$profesional;?></a></li>

            </ol>

        </div>
        
    </div>
    
    <div class="row">
        <!--  IDENTIFICACIÓN DEL PACIENTE -->
        <div class="col-xs-12 col-sm-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-name">
                        <i class="fa fa-table"></i>
                        <span> <a href="#">IDENTIFICACIÓN DEL PACIENTE:</a></span>
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
                <!--<h4 class="page-header">DATOS FILIATORIOS:</h4>-->

                    <div class="col-md-9">

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#datos_pacientes" role="tab" data-toggle="tab">Datos Filiatorios</a></li>
                            <li><a href="#ant_familiares" role="tab" data-toggle="tab" id="refreshAntFam" data-method="refresh">Antecentes Familiares</a></li>
                            <li><a href="#ant_personales" role="tab" data-toggle="tab" id="refreshAntPersonales" data-method="refresh">Antecentes Sociales y Personales</a></li>
                            <li><a href="#personas_contacto" role="tab" data-toggle="tab" id="refreshPersonasContacto" data-method="refresh">Personas de contacto</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="datos_pacientes">

                            <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">R.U.T: </label>
                                    <div class="col-sm-4">
                                      <div class="input-group">
                                          <?=form_input($rut)?>
                                          <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Buscar</button>
                                          </span>
                                        </div>
                                    </div>
                                    <label class="col-sm-2 control-label">N° HCE.:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($id_historia_medica)?>
                                    </div>

                                    </div>
                                    <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Nombre: </label>
                                    <div class="col-sm-10">
                                        <?=form_input($nombre)?>
                                    </div>

                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">F. Nac.:</label>
                                    <div class="col-sm-4">
                                         <?=form_input($fecha_nacimiento)?>
                                    </div>
                                    <label class="col-sm-2 control-label">Edad:</label>
                                    <div class="col-sm-4">
                                         <?=form_input($edad)?>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Lugar Nac.:</label>
                                    <div class="col-sm-4">  
                                        <?=form_input($lugar_nac)?>
                                    </div>
                                    <label class="col-sm-2 control-label">Nacionalidad:</label>
                                    <div class="col-sm-4">
                                       <input type="text" class="form-control" id="inputPassword" readonly="true"
                                           placeholder="Chile">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Residencia Actual:</label>
                                    <div class="col-sm-10">
                                        <?=form_input($direccion)?>
                                    </div>

                                    </div> 
                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">N. Estudios:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($nivel_estudio)?>
                                    </div>
                                    <label class="col-sm-2 control-label">Ocupacion:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($ocupacion)?>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Género:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($sexo)?>
                                    </div>
                                    <label class="col-sm-2 control-label">Estado Civil:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($estado_civil)?>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Prevision:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($prevision_medica)?>
                                    </div>
                                    <label class="col-sm-2 control-label">Religion:</label>
                                    <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword" readonly="true" 
                                           placeholder="Catolica">
                                    </div>

                                    </div>    

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Telefono:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($telefono)?>
                                    </div>
                                    <label class="col-sm-2 control-label">Email:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($correo)?>
                                    </div>
                                    </div>


                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">F. Ingreso:</label>
                                    <div class="col-sm-4">
                                        <?=form_input($fecha_ingreso)?>
                                    </div>

                                    </div>
                            </form>


                            </div>
                            <div class="tab-pane" id="ant_familiares">
                            
                            <table class="table table-striped" 
                                   data-toggle="table"
                                   id="table-ant_fam"
                                   data-url="<?=base_url();?>historiaMedica/jsonAntFamiliares/<?=$datos_paciente->id_paciente;?>" 
                                   data-height="400" 
                                   data-pagination="false"
                                   data-search="false">
                                <thead>
                                <tr>
                                    <th data-field="ant_familiar">Información</th>
                                </tr>
                                </thead>
                                </table>
                            
                            </div>
                            <div class="tab-pane" id="ant_personales">
                               <table class="table table-striped" 
                                   data-toggle="table"
                                   id="table-ant-per"
                                   data-url="<?=base_url();?>historiaMedica/jsonAntSocialPersonal/<?=$datos_paciente->id_paciente;?>" 
                                   data-height="400" 
                                   data-pagination="false"
                                   data-search="false">
                                <thead>
                                <tr>
                                    <th data-field="ant_social">Información</th>
                                </tr>
                                </thead>
                                </table>
                            </div>
                        <div class="tab-pane" id="personas_contacto">
                            <table class="table table-striped" 
                               data-toggle="table"
                               id="table-personas-contacto"
                               data-url="<?=base_url();?>historiaMedica/jsonAntPersonasContacto/<?=$datos_paciente->id_paciente;?>" 
                               data-height="400" 
                               data-pagination="true"
                               data-search="true"
                               >
                            <thead>
                            <tr>
                                <th data-field="nombres"    data-sortable="true">Nombres</th>
                                <th data-field="apellidos"  data-sortable="true">Apellidos</th>
                                <th data-field="parentesco" data-sortable="true">Parentesco</th>
                                <th data-field="telefono"   data-sortable="true">Telefono</th>
                                <th data-field="correo"     data-sortable="true">Correo</th>
                            </tr>
                            </thead>
                            </table>
                        </div>
                    </div>

                    </div>

                    <div class="col-md-3">
                        <!--.col-md-4-->
                        <img src="<?= base_url();?>img/pacientes/<?=$datos_paciente->imagen;?>" class="img-thumbnail">

                        <div class="form-group">
                            <div>
                                <button type="cancel" class="btn btn-default btn-label-left" value="Agregar" name="btoPacientes">
                                <span><i class="fa fa-clock-o txt-danger"></i></span>
                                    Cambiar Imagen
                                </button>
                            </div>						
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>  
            </div>
        </div>
        <!-- FIN IDENTIFICACION PACIENTE -->
        <!-- ANTECENTES CLINICOS DEL PACIENTE -->
    	<div class="col-xs-12 col-sm-12">
            <div class="box">
                <div class="box-header">
				<div class="box-name">
					<i class="fa fa-table"></i>
					<span> <a href="#">ANTECENTES CLINICOS DEL PACIENTE:</a></span>
				</div>
				<div class="box-icons pull-right">
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
                
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                    <li class="active">
                    <!-- id="refreshAntMorbido" data-method="refresh" permite recargar
                    la pagina al momento de seleccionar la pestaña -->
                    <a href="#morbidos" role="tab" data-toggle="tab"              id="refreshAntMorbido" data-method="refresh">Mórbidos</a></li>
                    <li><a href="#ginecoobstetricos" role="tab" data-toggle="tab" id="refreshAntGineco" data-method="refresh">Ginecoobstétricos</a></li>
                    <li><a href="#habitos" role="tab" data-toggle="tab"           id="refreshAntHabitos" data-method="refresh">Hábitos</a></li>
                    <li><a href="#medicamentos" role="tab" data-toggle="tab"      id="refreshAntMed" data-method="refresh">Medicamentos</a></li>
                    <li><a href="#alergias" role="tab" data-toggle="tab"          id="refreshAntAlerg" data-method="refresh">Alergias</a></li>
                    <li><a href="#inmunizaciones" role="tab" data-toggle="tab"    id="refreshAntInmuno" data-method="refresh">Inmunizaciones</a></li>
                    <li><a href="#revision_sistemas" role="tab" data-toggle="tab" >Revisión por sistemas</a></li>
                    
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="morbidos">                        
                        <table class="table table-striped" 
                               data-toggle="table"
                               id="table-ant-morbidos"
                               data-url="<?=base_url();?>historiaMedica/jsonAntMorbidos/<?=$datos_paciente->id_paciente;?>" 
                               data-height="400" 
                               data-pagination="true"
                               data-search="true"
                               >
                            <thead>
                            <tr>
                                <th data-field="nombre" data-sortable="true">Nombre</th>
                                <th data-field="tipo" data-sortable="true">tipo</th>
                                <th data-field="fecha" data-sortable="true">Fecha Ingreso</th>
                                <th data-field="diagnostico" data-sortable="true">Diagnostico</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="ginecoobstetricos">
                        <table     data-toggle="table"
                                   id="table-ant-gineco"
                                   data-url="<?=base_url();?>historiaMedica/jsonAntGineco/<?=$datos_paciente->id_paciente;?>" 
                                   data-height="400" 
                                   data-pagination="false"
                                   data-search="false"
                                   data-card-view="true">
                                <thead>
                                <tr>
                                    <th data-field="gestas">Gestas:</th>
                                    <th data-field="partos">Partos:</th>
                                    <th data-field="abortos">Abortos:</th>
                                    <th data-field="vivos">Vivos:</th>
                                    <th data-field="muertos">Muertos:</th>
                                    <th data-field="menarquia">Menarquia:</th>
                                    <th data-field="menopausia">Menopausia:</th>
                                    <th data-field="fur">FUR:</th>
                                    <th data-field="metodo_anticonceptivo">Metodos Anticonceptivos:</th>
                                    <th data-field="sintomas">Presencia Sintomas:</th>
                                    <th data-field="observaciones">Observaciones:</th>
                                </tr>
                                </thead>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="habitos">    
                        <table class="table table-striped" 
                               data-toggle="table"
                               id="table-ant-habitos"
                               data-url="<?=base_url();?>historiaMedica/jsonAntHabitos/<?=$datos_paciente->id_paciente;?>" 
                               data-height="400" 
                               data-pagination="true"
                               data-search="true"
                               >
                            <thead>
                            <tr>
                                <th data-field="habito"         data-sortable="true">Habito</th>
                                <th data-field="fecha_ingreso"  data-sortable="true">Fecha Ingreso</th>
                                <th data-field="descripcion"    data-sortable="true">Descripcion</th>
                            </tr>
                            </thead>
                            </table>
                    </div>
                    
                    <div class="tab-pane" id="medicamentos">
                        <table class="table table-striped" 
                               data-toggle="table"
                               id="table-ant-med"
                               data-url="<?=base_url();?>historiaMedica/jsonAntMedicamentos/<?=$datos_paciente->id_paciente;?>" 
                               data-height="400" 
                               data-pagination="true"
                               data-search="true"
                               >
                            <thead>
                            <tr>
                                <th data-field="id_med" data-sortable="true">Cod.</th>
                                <th data-field="nombre_medicamento" data-sortable="true">Medicamento</th>
                                <th data-field="fecha_incio" data-sortable="true">Inicio</th>
                                <th data-field="fecha_fin" data-sortable="true">Fin</th>
                                <th data-field="duracion" data-sortable="true">Duración</th>
                                <th data-field="indicaciones" data-sortable="true">Indicaciones Médicas</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="alergias">
                        <table class="table table-striped" 
                               data-toggle="table"
                               id="table-ant-alerg"
                               data-url="<?=base_url();?>historiaMedica/jsonAntAlergias/<?=$datos_paciente->id_paciente;?>" 
                               data-height="400" 
                               data-pagination="true"
                               data-search="true"
                               >
                            <thead>
                            <tr>
                                <th data-field="tipo_alergia" data-sortable="true">Tipo Alergia</th>
                                <th data-field="alergia" data-sortable="true">Alergia</th>
                                <th data-field="fecha_ingreso" data-sortable="true">Fecha Ingreso</th>
                                <th data-field="descripcion" data-sortable="true">Descripcion</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="inmunizaciones">
                        <table class="table table-striped" 
                               data-toggle="table"
                               id="table-ant-inmuno"
                               data-url="<?=base_url();?>historiaMedica/jsonAntInmuno/<?=$datos_paciente->id_paciente;?>" 
                               data-height="400" 
                               data-pagination="true"
                               data-search="true"
                            >
                            <thead>
                            <tr>
                                <th data-field="inmunizacion"       data-sortable="true">Inmunización</th>
                                <th data-field="tipo_inmunizacion"  data-sortable="true">Inmu. Durante</th>
                                <th data-field="fecha_ingreso"      data-sortable="true">Fecha Ingreso</th>
                                <th data-field="observaciones"      data-sortable="true">Observaciones</th>
                            </tr>
                            </thead>
                        </table>      
                    </div>
                    
                    <div class="tab-pane" id="revision_sistemas">
                       TABLA MASTER REVISION POR SISTEMAS
                        <!--
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                              <tr>
                                <th width="2%">#</th>
                                <th width="15%">Sistema</th>
                                <th width="20%">Sintomas</th>
                                <th width="10%">Fecha</th>
                                <th width="40%">Observaciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Sintomas Generales</td>
                                <td>Fiebre, Trastornos en el Peso, Sudoración Nocturna,Insomnio</td>
                                <td>29-09-2014</td>
                                <td>
                                    Esta revisión no debiera ser muy larga ya que se supone que los principales problemas ya fueron identificados en la anamnesis
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Respiratorio</td>
                                <td>Disnea, Expectoracion</td>
                                <td>29-09-2014</td>
                                <td>
                                    Esta revisión no debiera ser muy larga ya que se supone que los principales problemas ya fueron identificados en la anamnesis
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Cardiovascular</td>
                                <td>No Presenta síntomas relevantes</td>
                                <td>29-09-2014</td>
                                <td>
                                    sta revisión no debiera ser muy larga ya que se supone que los principales problemas ya fueron identificados en la anamnesis
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Neurológico</td>
                                <td>Cefalea, Mareos, Paresias</td>
                                <td>29-09-2014</td>
                                <td>
                                    Esta revisión no debiera ser muy larga ya que se supone que los principales problemas ya fueron identificados en la anamnesis
                                </td>
                              </tr>
                            </tbody>
                            </table>
                        </div>-->
                    </div>
                </div>
                <hr>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#consultas" role="tab" data-toggle="tab" id="refreshAntConsultaMed" data-method="refresh">Consultas Medicas</a></li>
                    <li><a  href="#documentos" role="tab" data-toggle="tab">Documentos</a></li>    
                </ul>
                
                <div class="tab-content">
                    <div class="tab-pane active" id="consultas">
                        <table class="table table-striped" 
                               data-toggle="table"
                               id="table-ant-consultas-med"
                               data-url="<?=base_url();?>historiaMedica/jsonAntConsultasMed/<?=$datos_paciente->id_paciente;?>" 
                               data-height="400" 
                               data-pagination="true"
                               data-search="true"
                            >
                            <thead>
                            <tr>
                                <th data-field="id_consulta"    data-sortable="true">N°</th>
                                <th data-field="fecha_consulta" data-sortable="true">Fecha / Hora</th>
                                <th data-field="motivo"         data-sortable="true">Motivo Consulta</th>
                                <th data-field="anamnesis"      data-sortable="true">Anamnesis Próxima</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="tab-pane" id="documentos">
                        TABLA MASTER DOCUMENTOS
                    </div>
                    
                </div>
			</div>
		</div>
        </div>
        <!-- FIN ANTECENTES CLINICOS DEL PACIENTE -->
    
    </div>
</div>