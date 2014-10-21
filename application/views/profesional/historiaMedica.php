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
                            <li><a href="#ant_personales" role="tab" data-toggle="tab">Antecentes Sociales y Personales</a></li>
                            <li><a href="#personas_contacto" role="tab" data-toggle="tab">Personas de contacto</a></li>
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
                                     
                            <div class="bs-example">
                            <table class="table table-striped" 
                                   data-toggle="table"
                                   id="table-ant_fam"
                                   data-url="<?=base_url();?>historiaMedica/jsonAntFamiliares/<?=$datos_paciente->id_paciente;?>" 
                                   data-height="400" 
                                   data-pagination="true"
                                   data-search="true"
                                   data-card-view="true">
                                <thead>
                                <tr>
                                    <th data-field="nombre" data-sortable="true">Nombre</th>
                                    <th data-field="rut" data-sortable="true">Rut</th>
                                    <th data-field="parentesco" data-sortable="true">Parentesco</th>
                                    <th data-field="edad" data-sortable="true">Edad</th>
                                    <th data-field="enfermedades">Enfermedades</th>
                                    <th data-field="estado" data-sortable="true">Estado</th>
                                    <th data-field="observaciones">Observaciones</th>
                                </tr>
                                </thead>
                            </table>
                            </div>
                            </div>
                            <div class="tab-pane" id="ant_personales">
                                <!--
                                <br>
                                <p>
                                En esta sección se investigan aspectos personales del paciente que permitan conocerlo mejor. La intención es evaluar y comprender cómo su enfermedad lo afecta y qué ayuda podría llegar a necesitar en el plano familiar, de su trabajo, de su previsión, de sus relaciones interpersonales.
                                <br>
                                Información que podría haber ido junto a la Identificación del Paciente, se puede traspasar a esta sección. Es el caso del estado civil o las personas con las que vive.
                                <br>
                                Otras informaciones, que según el caso se pueden incluir, son: composición familiar, tipo de casa habitación, disponibilidad de agua potable, presencia de animales domésticos, nivel de educación, actividad laboral o profesión, previsión o seguro de salud, etc.
                                <br>
                                Toda esta información servirá para conocer mejor al paciente como persona; saber con qué recursos cuenta para enfrentar su enfermedad, cuál es el grado de apoyo familiar; su situación laboral, previsional y social.
                                <br>
                                También puede ser el lugar para mencionar aspectos específicos de sus creencias, de su religiosidad, de los aspectos a los cuales no quisiera ser sometido en el tratamiento de su enfermedad (por ejemplo, no recibir transfusiones de sangre o no ser sometido a ventilación mecánica).
                                <br>
                                La Historia Clínica (7) Otros aspectos a investigar son antecedentes sobre actividad sexual, exposición a enfermedades infecciosas o profesionales, viajes efectuados en los meses anteriores.
                                </p>
                                <p>Ejemplo:</p>
                                <p>"La paciente vive con su marido y una hija. Tiene dos hijos casados. Desempeña labores de casa. El apoyo que tiene de su familia es muy bueno."</p>
                                -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Cristian Alejandro Vidal Muñoz</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Ejm: El paciente vive con su esposa y una hija. Tiene dos hijos casados. Desempeña labores de casa. El apoyo que tiene de su familia es muy bueno.</td>
                                      </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        <div class="tab-pane" id="personas_contacto">
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apeliidos</th>
                                <th>Parentesco</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Gustavo Alexis</td>
                                <td>Vidal muñoz</td>
                                <td>Hermano</td>
                                <td>09-78965412</td>
                                <td>gustavo@gmail.com</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Daniel Andres</td>
                                <td>Vidal muñoz</td>
                                <td>Hermano</td>
                                <td>09-78965412</td>
                                <td>daniel@gmail.com</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Jose Manuel</td>
                                <td>Vidal Flores</td>
                                <td>Padre</td>
                                <td>09-78958874</td>
                                <td>jose@gmail.com</td>
                              </tr>
                            </tbody>
                            </table>
                        </div>
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
                    <a href="#morbidos" role="tab" data-toggle="tab" id="refreshAntMorbido" data-method="refresh">Mórbidos</a></li>
                    <li><a href="#ginecoobstetricos" role="tab" data-toggle="tab">Ginecoobstétricos</a></li>
                    <li><a href="#habitos" role="tab" data-toggle="tab">Hábitos</a></li>
                    <li><a href="#medicamentos" role="tab" data-toggle="tab">Medicamentos</a></li>
                    <li><a href="#alergias" role="tab" data-toggle="tab">Alergias</a></li>
                    <li><a href="#inmunizaciones" role="tab" data-toggle="tab">Inmunizaciones</a></li>
                    <li><a href="#revision_sistemas" role="tab" data-toggle="tab">Revisión por sistemas</a></li>
                    
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
                                    <th data-field="fecha" data-sortable="true">Fecha</th>
                                    <th data-field="diagnostico" data-sortable="true">Diagnostico</th>
                                </tr>
                                </thead>
                            </table>
                            
                        <br>
                    </div>
                    <div class="tab-pane" id="ginecoobstetricos">
                        <!--http://190.242.36.221/helponline/manuales_robohelp/manual_de_usuario_hc_pep_v1.0/gineco-obstetricos.htm#1
                        http://es.slideshare.net/geovanamont/antecedentes-ginecoobstetricos
                        -->
                        <!--
                        <br>
                        <p>
                            En las mujeres se debe precisar:<br>

                            Respecto a sus menstruaciones:<br>

                            Edad de la primera menstruación espontánea (menarquia). Lo habitual es que ocurra entre los 11 y 15 años.
                            Edad en que dejó de menstruar en forma natural (menopausia). Ocurre entre los 45 y 55 años, pero más frecuentemente, cerca de los 50 años.
                            <br>
                            Características de las menstruaciones:
                            <br>- Duración y cantidad de sangre. Normalmente las menstruaciones duran 2 a 6 días. La cantidad la evalúa la mujer según lo que ha sido su experiencia; cuando es muy abundante lo nota. También se puede precisar si son dolorosas. 
                            <br>- Frecuencia. Normalmente se presentan cada 25 a 28 días.
                            <br>- Fecha de la última menstruación (FUR = fecha de la última regla). Esta información puede ser importante: determinar posibilidades de embarazo, momento de la ovulación, toma de muestras para exámenes hormonales.
                            <br>
                            Algunos términos usados respecto a las menstruaciones son: 
                            <br>
                            <br>- Dismenorrea: menstruaciones dolorosas. 
                            <br>- Hipermenorrea o menorragia: menstruaciones abundantes.
                            <br>- Hipomenorrea: menstruaciones escasas. 
                            <br>- Polimenorrea: si ocurren con intervalos menores de 21 días. 
                            <br>- Oligomenorrea: si los intervalos son entre 36 y 90 días. 
                            <br>- Amenorrea: si no ocurren menstruaciones en 90 días.
                            <br>- Metrorragia: si la hemorragia genital no se ajustan al ciclo sexual ovárico y son irregulareso continuos.
                            <br>Información sobre los embarazos:
                            <br>Cuántos embarazos ocurrieron.
                            <br>Si fueron de término o prematuros.
                            <br>Si los partos fueron vaginales o por cesárea.
                            <br>Problemas asociados al embarazo (hipertensión arterial, hiperglicemia, muerte fetal, etc.).
                            <br>Antecedentes de abortos (espontáneos o provocados).
                            <br>Número de hijos vivos.
                            <br>
                            A veces se usan fórmulas obstétricas (FO), para expresar en forma abreviada esta información: 
                            Por ejemplo: FO = G3P2A1 corresponde a una mujer que ha tenido 3 embarazos (de gestaciones), 2 partos y 1 aborto.
                            Otra forma de hacerlo es precisando los partos de término, partos prematuros, abortos espontáneos, abortos provocados y número de hijos vivos. Por ejemplo, la FO = 2,0,1,0,2 corresponde a una mujer que ha tenido dos partos de término, ninguno prematuro, un aborto espontáneo, ningún aborto provocado y tiene dos hijos vivos. La información sobre abortos se deben mencionar con prudencia (no siempre es necesario investigarlos o mencionarlos).
                            Los embarazos duran 40 semanas (9 meses), con variaciones entre 37 y 42 semanas. Se define:
                            Parto de término: ocurre pasadas las 37 semanas de embarazo.
                            Parto de pretérmino o prematuro: ocurre entre las 22 y 36 semanas. El recién nacido pesa menos de 2.500 gramos.
                            Aborto: expulsión del feto antes de las 22 semanas (habitualmente presenta un peso menor de 500 gramos). Con los adelantos de la obstetricia, estos límites han ido cambiando.
                            Otras informaciones que pueden ser de interés:
                            <br>Métodos anticonceptivos: abstinencia en períodos fértiles, anticonceptivos orales, DIU (dispositivo intrauterino), condón o preservativo, etc.
                            Presencia de otros flujos vaginales. Si es una secreción blanquecina, se denomina leucorrea. Puede ser por infección bacteriana, hongos o tricomonas.
                            Fecha del último frotis cervical (Papanicolaou o PAP) o de la última mamografía.
                            Enfermedades o procedimientos ginecológicos (endometritis, anexitis, infecciones de transmisión sexual, histerectomía).
                        </p>
                        <p>Ejemplo:</p>
                        <p>"Menopausia a los 52 años. Tuvo 2 hijos de término, uno de los cuales pesó 4.200 gramos al nacer. No se ha efectuado controles ginecológicos ni mamografías en los últimos años."</p>
                        -->
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr class="active">
         
          <th>Gestas</th>
          <th>Partos</th>
          <th>Abortos</th>
          <th>Vivos</th>
          <th>Muertos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
         
          <td>2</td>
          <td>2</td>
          <td>0</td>
          <td>2</td>
          <td>0</td>
        </tr>
        <tr class="active">
          
          <th>Menarquia</th>
          <th>Menopausia</th>
          <th>FUR</th>
          <th>Métodos Anticonceptivos</th>
          <th></th>
        </tr>
        <tr>
          
          <td>Menor a 10 años</td>
          <td>Entre 45 - 55 años</td>
          <td>11/25/2014</td>
          <td>Métodos Anticonceptivos</td>
          <td></td>
        </tr>
        <tr class="active">
         
          <th colspan="5">Presencia de algun Sitnoma</th>
        </tr>
         <tr>
          
          <td colspan="5">Dismenorrea,Hipermenorrea,Polimenorrea</td>
        </tr>
        <tr class="active">
         
          <th colspan="5">Otras Observaciones</th>
        </tr>
        <tr>
         
          <td colspan="5">Menopausia a los 52 años. Tuvo 2 hijos de término, uno de los cuales pesó 4.200 gramos al nacer. No se ha efectuado controles ginecológicos ni mamografías en los últimos años.</td>
        </tr>
      </tbody>
    </table>
  </div><!-- /example -->

                        
                    </div>
                    <div class="tab-pane" id="habitos">
                        <!--
                        <br>
                        <p>
                        Entre los hábitos que se investigan destacan:
                        <br>
                        El hábito de fumar (tabaquismo). Se debe precisar cuántos cigarrillos o cajetillas fuma la persona cada día y cuántos años lleva fumando. Si ya dejó de fumar, se precisa desde cuándo y la cantidad que fumaba. Algunas veces se usa el término “paquetes-año” para expresar lo que una persona fumaba (por ejemplo, 20 paquetes-año significa que fumaba 1 cajetilla al día durante 20 años, o 2 cajetillas diarias por 10 años) 
                        <br>Ingesta de bebidas alcohólicas. Una forma de evaluar este tipo de ingesta es mediante una estimación de la cantidad de alcohol ingerida. Para esto se identifica el licor, la concentración de alcohol que contiene y las cantidades ingeridas. Por ejemplo, 340 mL de cerveza, 115 mL de vino y 43 mL de un licor de 40 grados, contienen aproximadamente 10 g de alcohol. Un litro de vino contiene aproximadamente 80 g de alcohol. Una ingesta de más de 60 g diarios de alcohol en el hombre y 40 g en las mujeres, puede dañar el hígado.
                        <br>Tipo de alimentación. En algunas personas es más importante de precisar; por ejemplo, en obesos, diabéticos, personas con dislipidemias o que han bajado mucho de peso.
                        <br>Uso de drogas no legales: consumo de marihuana, cocaína, etc.
                        </p>
                        <p>Ejemplo</p>
                        <p>-Tabaquismo: fumó un promedio de 12 cigarrillos diarios, durante 20 años. Dejó de fumar 10 años atrás. </p>
                        <p>-Alcohol: ocasionalmente toma una copa de vino con las comidas.</p>
                        -->
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Habito</th>
                                <th>Fecha</th>
                                <th>Observaciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Alcohol</td>
                                <td>11/05/1990</td>
                                <td>
                                Ocasionalmente toma una copa de vino con las comidas.   
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Tabaco</td>
                                <td>05/05/1992</td>
                                <td>Fumó un promedio de 12 cigarrillos diarios, durante 20 años. Dejó de fumar 10 años atrás.</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Drogas</td>
                                <td>08/07/1999</td>
                                <td>Ocasionalmente fuma marihuana.</td>
                              </tr>
                            </tbody>
                            </table>
                        </div>
                     </div>
                  <div class="tab-pane" id="medicamentos">
                      <!--
                      <br>
                      <p>
                      Es importante identificar qué medicamentos está tomando el paciente y en qué cantidad. En algunos casos, también se deben indicar los fármacos que el paciente recibió en los días o semanas anteriores.
                      <br>
                      Los alumnos, al principio, desconocen la composición y características de los medicamentos que consumen los pacientes. Para averiguar esto, conviene consultar libros que entregan esta información (por ejemplo: Vademécum de medicamentos).
                      <br>
                      Se debe precisar:
                      <br>el nombre genérico y su concentración (el nombre de la droga misma).
                      <br>el nombre con el que el fármaco se comercializa (nombre de fantasía).
                      <br>la forma de administración (oral, intramuscular, endovenosa).
                      <br>la frecuencia (por ejemplo, cada 6 – 8 ó 12 horas).
                      </p>
                      <p>Ejemplo:</p>
                      <br>-atenolol 50 mg (Betacar): 1 tableta cada mañana.
                      <br>-atorvastatina 10 mg (Lipitor): 1 tableta con la comida.
                      <br>-lisinopril 10 mg (Acerdil): 1 tableta cada mañana.
                      <br>-amoxicilina 850 mg (Amoval): tomó hasta hace una semana atrás. En este ejemplo, el paciente ya no está tomando el antibiótico, pero puede ser importante mencionarlo si está cursando con un cuadro febril o diarreico.
                      <br>-Glibenclamida 5 mg (1 tableta al desayuno y 1 tableta con la comida).
                      <br>-Lisinopril 5 mg (1 tableta en la mañana).-->
                      <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Cod.</th>
                                <th>Medicamento</th>
                                <th>Inicio</th>
                                <th>Fin</th>
                                <th>Duración</th>
                                <th>Indicaciones Médica</th>
                              </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>LS1234</td>
                                <td>Lisinopril 5 mg</td>
                                <td>15-12-2014</td>
                                <td>19-12-2014</td>
                                <td>4 Días</td>
                                <td>1 tableta en la mañana.</td>
                            </tr>    
                            <tr>
                                <td>2</td>
                                <td>GLC1234</td>
                                <td>Glibenclamida 5 mg</td>
                                <td>27-11-2014</td>
                                <td>30-11-2014</td>
                                <td>3 Días</td>
                                <td>1 tableta al desayuno y 1 tableta con la comida.</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>LS1234</td>
                                <td>Amoxicilina 850 mg (Amoval)</td>
                                <td>27-11-2014</td>
                                <td>30-11-2014</td>
                                <td>3 Días</td>
                                <td>1 tableta cada mañana.</td>
                            </tr>
                             <tr>
                                <td>4</td>
                                <td>LS1234</td>
                                <td>Lisinopril 10 mg (Acerdil).</td>
                                <td>27-11-2014</td>
                                <td>30-11-2014</td>
                                <td>3 Días</td>
                                <td>1 tableta cada mañana.</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>AT1234</td>
                                <td>atorvastatina 10 mg (Lipitor)</td>
                                <td>27-10-2014</td>
                                <td>30-10-2014</td>
                                <td>3 Días</td>
                                <td>1 tableta con la comida.</td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>AT123</td>
                                <td>Atenolol 50 mg (Betacar)</td>
                                <td>27-09-2014</td>
                                <td>30-09-2014</td>
                                <td>3 Días</td>
                                <td>1 tableta cada mañana.</td>
                              </tr>
                            </tbody>
                            </table>
                        </div>
                  </div>
                    <div class="tab-pane" id="alergias">
                        <!--
                        <br>
                        <p>
                        El tema de las alergias es muy importante ya que puede tener graves consecuencias para la persona. Entre los alergenos, que son las sustancias ante las cuales se desencadenan las respuestas alérgicas, hay varios que se deben investigar:
                        <br>
                        1) Medicamentos: alergia a penicilina o alguno de sus derivados, a cefalosporinas, fenitoína, carbamazepina, medios de contraste usados en radiología, etc. Algunas de las reacciones que se pueden presentar son exantemas cutáneos, edema, colapso circulatorio (shock), broncoobstrucción, espasmo laríngeo. Las personas con mucha frecuencia dicen ser alérgicas a algún medicamento, sin serlo, ya que lo que en alguna ocasión experimentaron se debió a otro problema (por ejemplo, un dolor al estómago). Ante la duda, conviene no correr riesgos. Si se sabe que una persona es alérgica a algún medicamento, no se debe usar. Además, es necesario destacar en un lugar visible esta condición; por ejemplo, con letras grandes en la carátula de la ficha clínica.
                        <br>
                        2) Alimentos. Algunas personas presentan alergias a mariscos, pescados, nueces, maní, huevo, leche, algunos condimentos y aditivos.
                        <br>
                        3) Sustancias que están en el ambiente. Es el caso de pólenes, pastos, ambientes húmedos cargados de antígenos de hongos, polvo de ácaros, contaminación del aire con productos químicos, etc. Las personas con rinitis alérgicas y asma tienden a reaccionar a estos estímulos.
                        <br>
                        4) Sustancias que entran en contacto con la piel. Puede ser el caso de detergentes, algunos jabones, productos químicos, metales, látex y otros.
                        <br>
                        5) Picaduras de insectos: abejas, avispas, etc.
                        </p>
                        <p>Ejemplo:</p>
                        <p>"Dice no tener alergias."</p>-->
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                              <tr>
                                <th width="2%">#</th>
                                <th width="15%">Tipo Alergia</th>
                                <th width="15%">Alergia</th>
                                <th width="10%">Fecha</th>
                                <th width="60%">Observaciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Medicamento</td>
                                <td>Penicilina</td>
                                <td>29-09-2014</td>
                                <td>
                                    dasdas
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Medicamento</td>
                                <td>Antibióticos</td>
                                <td>29-09-2014</td>
                                <td>asdasdsa</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Alimento</td>
                                <td>mariscos</td>
                                <td>29-09-2014</td>
                                <td>Las sustancias causantes de las alergias no son los alimentos en sí mismos, sino algunas de las proteínas que forman parte de su composición que se denominan alérgenos.</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Alimento</td>
                                <td>huevo</td>
                                <td>29-09-2014</td>
                                <td>Las sustancias causantes de las alergias no son los alimentos en sí mismos, sino algunas de las proteínas que forman parte de su composición que se denominan alérgenos.</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Sustancias</td>
                                <td>pólen</td>
                                <td>29-09-2014</td>
                                <td>La polinización se ve influenciada por las condiciones climáticas: las jornadas con viento y calurosas favorecen la difusión del polen; las jornadas lluviosas, por el contrario, provocan la disminución de la concentración de polen en el ambiente.</td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>Picaduras</td>
                                <td>Abeja</td>
                                <td>29-09-2014</td>
                                <td>Cuando nos pican, inyectan una serie de sustancias tóxicas, que provocan una reacción leve de enrojecimiento en todas las personas, pero que desencadenan la reacción alérgica en las personas alérgicas a las picaduras de ciertos insectos.</td>
                              </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="inmunizaciones">
                        <!--<br>
                        <p>
                        Según el cuadro clínico que presente el paciente puede ser importante señalar las inmunizaciones que el paciente ha recibido.
                        <br>
                        Los adultos podrían recibir vacunas contra influenza, hepatitis A y B, neumococos, Haemophylus influenzae, o recibir dosis de refuerzo de toxoide tetánico.
                        <br>
                        En niños habitualmente se sigue un programa de vacunación mediante el cual se protege contra sarampión, coqueluche, tétanos, difteria, tuberculosis, poliomielitis, parotiditis, rubéola, neumococos, y eventualmente hepatitis A y B.
                        </p>
                        <p>Ejemplo:</p>
                        http://www.crececontigo.gob.cl/wp-content/uploads/2014/06/calendario-de-vacunas-2014.png
                        <p>"Las de la infancia."</p>-->
                        
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                              <tr>
                                <th width="2%">#</th>
                                <th width="15%">Vacuna</th>
                                <th width="10%">Dosis</th>
                                <th width="10%">Fecha</th>
                                <th width="60%">Observaciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>BCG</td>
                                <td>1</td>
                                <td>29-09-2014</td>
                                <td>
                                    un pequeño nodulo de color rojo aparecerá en el sitio de inyección ,que gradualmente cmbiará hasta una pequeña visícula y posteriormente una úlcera en el curso de 2-4 semanas.
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Pentavalente</td>
                                <td>1</td>
                                <td>29-09-2014</td>
                                <td>
                                   Fiebre mayor 37.5°C, Decaimiento , Escalofrios.
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Neumococica conjugada</td>
                                <td>3</td>
                                <td>29-09-2014</td>
                                <td>
                                   Fiebre mayor 37.5°C, Inflamación , enrojecimiento y dolor o aumento de volumen en la zona de la inyeccion, Decaimiento , Puede durar hasta 3 días.
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Hepatitis A</td>
                                <td>2</td>
                                <td>29-09-2014</td>
                                <td>
                                   Fiebre mayor 37.5°C, Inflamación , enrojecimiento y dolor o aumento de volumen en la zona de la inyeccion, Decaimiento , Puede durar hasta 3 días.
                                </td>
                              </tr>
                            </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="tab-pane" id="revision_sistemas">
                        
                        <!--
                        <br>
                        <p>
                        A pesar de toda la información que se ha recogido en la anamnesis y los antecedentes, conviene tener algún método para evitar que se escape algo importante. Una breve revisión por los sistemas que todavía no se han explorado da más seguridad que la información está completa.
                        <br>
                        Esta revisión no debiera ser muy larga ya que se supone que los principales problemas ya fueron identificados en la anamnesis. Si al hacer este ejercicio aparecen síntomas que resultan ser importantes y que todavía no habían sido explorados, es posible que el conjunto de estas nuevas manifestaciones deban ser incorporadas a la anamnesis.
                        <br>
                        En esta revisión por sistemas no se debe repetir lo que ya se mencionó en la anamnesis, sino que se mencionan sólo algunos síntomas o manifestaciones que están presente pero que tienen un papel menos importante. La extensión de esta sección debe ser breve.
                        <br>
                        Una forma de ordenar esta revisión es por sistemas y en cada uno de ellos se investigan manifestaciones que podrían darse:
                        <br>
                        Síntomas generales: fiebre, cambios en el peso, malestar general, apetito, tránsito intestinal, sudoración nocturna, insomnio, angustia.
                        <br>Sistema respiratorio: disnea, tos, expectoración, hemoptisis, puntada de costado, obstrucción bronquial.
                        <br>Sistema cardiovascular: disnea de esfuerzo, ortopnea, disnea paroxística nocturna, edema de extremidades inferiores, dolor precordial.
                        <br>Sistema gastrointestinal o digestivo: apetito, náuseas, vómitos, disfagia, pirosis, diarrea, constipación, melena.
                        <br>Sistema genitourinario: disuria dolorosa o de esfuerzo, poliaquiuria, poliuria, nicturia, alteración del chorro urinario, hematuria, dolor en fosas lumbares. -Sistema endocrino: baja de peso, intolerancia al frío o al calor, temblor fino, polidefecación, ronquera, somnolencia, sequedad de la piel.
                        <br>Sistema neurológico: cefalea, mareos, problemas de coordinación, paresias, parestesias.
                        <br>Además de revisar estos sistemas, es conveniente investigar otras manifestaciones: hemorragias, dolores en otros sitios, compromiso de la visión o de la audición, lesiones en la piel, etcétera.
                        <br>
                        Al escribir la ficha, no conviene que esta Revisión por Sistemas resulte muy larga. Es posible que en un comienzo, se exija a los alumnos un relato más detallado para que desarrollen el hábito de hacer una historia completa, pero en la medida que ganen experiencia, y con el acuerdo de su tutor, podrán mencionar sólo lo más importante.
                        </p>
                        <p>Ejemplo:</p>
                        <p>"no ha tenido tos, disnea ni dolores precordiales. Habitualmente tiende a ser algo constipada."</p>
                        <p>(Nota: la revisión por sistemas está dirigida a buscar otros síntomas. Sólo se anotan los hallazgos importantes que no forman parte de la anamnesis ni los antecedentes. En esta parte de la historia clínica no se deben repetir síntomas que ya fueron mencionados en las otras secciones).</p>
                        -->
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
                        </div>
                    </div>
                </div>
                <hr>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#consultas" role="tab" data-toggle="tab">Consultas Medicas</a></li>
                    <li><a  href="#documentos" role="tab" data-toggle="tab">Documentos</a></li>
                    
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="consultas">
                        <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th width="10%">N° Consulta</th>
                                        <th width="10%">Fecha</th>
                                        <th width="10%">Hora</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>29-09-2014</td>
                                        <td>22:50:00</td>                                       
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>29-07-2014</td>
                                        <td>10:00:00</td>
                                      </tr>
                                    </tbody>
                                    </table>
                                </div>
                        <!--
                        <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#datos_generales" role="tab" data-toggle="tab">Datos Generales</a></li>
                        <li><a href="#diagnostico" role="tab" data-toggle="tab">Diagnóstico Clínico Preliminar</a></li>
                        <li><a href="#tratamiento" role="tab" data-toggle="tab">Tratamiento</a></li>
                        </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="datos_generales">
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th width="5%">N°</th>
                                        <th width="10%">Fecha</th>
                                        <th width="10%">Hora</th>
                                        <th width="20%">Motivo Consulta</th>
                                        <th width="40%">Anamnésis Próxima</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>29-09-2014</td>
                                        <td>22:50:00</td>
                                        <td>Mal control de su diabetes mellitus.</td>
                                        <td>Paciente portadora de una diabetes mellitus, controlada con régimen (que sigue en forma irregular), e hipoglicemiantes orales. Desde hace unos dos a tres meses presenta polidipsia, poliuria y ha bajado de peso. Las veces que se ha controlado la glicemia, ha estado sobre 200 mg/dL. Desde tres días atrás comenzó a notar disuria dolorosa y poliaquiuria. También ha sentido un dolor sordo ubicado en la región lumbar derecha y cree haber tenido fiebre, pero no se la ha registrado. La orina la ha notado más fuerte de olor.</td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>29-07-2014</td>
                                        <td>10:00:00</td>
                                        <td>QUÉ motiva la consulta del paciente.</td>
                                        <td>Quizá la parte más importante de la entrevista, en la que se intenta responder básicamente a 3 preguntas ¿QUÉ LE OCURRE?, ¿DESDE CUÁNDO? ¿A QUÉ LO ATRIBUYE?.</td>
                                      </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="diagnostico">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th width="10%">N° Consulta</th>
                                        <th width="10%">Fecha</th>
                                        <th width="10%">Hora</th>
                                        <th width="60%">Diagnóstico Clínico Preliminar</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>29-09-2014</td>
                                        <td>22:50:00</td>
                                        <td>Al presentar los síntomas, se mencionan en la secuencia temporal en que se presentan, pero se tienden a agrupan según el sistema comprometido o algún síndrome que los relaciona (por ejemplo, “polidipsia, poliuria, y baja de peso” como manifestación de una diabetes descompensada). Aunque se ordene un poco la información, los hechos mismos no deben ser alterados. 
                                        Con la información recogida, se puede plantear que se trata de una mujer mayor, portadora de una diabetes mellitus del adulto e hipertensión arterial, que se controla mal y que ingresa con una infección urinaria.</td>                                       
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>29-07-2014</td>
                                        <td>10:00:00</td>
                                        <td>Todo lo anterior debería traducirse en el esperado diagnóstico. Existen muchos tipos de diagnóstico según los datos en los que se fundamente, por lo que es preferible denominarlo Juicio Clínico.</td>                                       
                                      </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="tratamiento">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th width="10%">N° Consulta</th>
                                        <th width="10%">Fecha</th>
                                        <th width="10%">Hora</th>
                                        <th width="60%">Tratamiento</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>29-09-2014</td>
                                        <td>22:50:00</td>
                                        <td>El tratamiento de la diabetes mellitus se basa en tres pilares: dieta, ejercicio físico y medicación. Tiene como objetivo mantener los niveles de glucosa en sangre dentro de la normalidad para minimizar el riesgo de complicaciones asociadas a la enfermedad. En muchos pacientes con diabetes tipo II no sería necesaria la medicación si se controlase el exceso de peso y se llevase a cabo un programa de ejercicio físico regularmente. Sin embargo, es necesario con frecuencia una terapia sustitutiva con insulina o la toma de fármacos hipoglucemiantes por vía oral. </td>                                       
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td>29-07-2014</td>
                                        <td>10:00:00</td>
                                        <td>decidir el tratamiento más adecuado sólo es posible si todo lo anterior se ha respetado escrupulosamente. De otra forma es sencillo pasar por alto detalles importantes que condicionaran cuanto menos una pobre respuesta al tratamiento. Su médico debería explicar los pros y contras del tratamiento propuesto, y en caso necesario entregarle un documento de Consetimiento Informado donde se refleje la naturaleza del tratamiento, sus posibles complicaciones y alternativas. Es necesario saber que la firma del consentimiento no exime al médico de su responsabilidad.</td>                                       
                                      </tr>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <div class="tab-pane" id="documentos">
                        Documentos.
                    </div>
                    
                </div>
			</div>
		</div>
        </div>
        <!-- FIN ANTECENTES CLINICOS DEL PACIENTE -->
    
    </div>
    
<!-- tabla dinamica -->
<h2>EJEMPLO TABLA CON JSON</h2>
<table id="table-pagination" data-toggle="table" data-url="<?=base_url();?>data2.json" 
       data-height="400" data-pagination="true" data-search="true">
    <thead>
        <tr>
            <th data-field="state" data-checkbox="true"></th>
            <th data-field="id" data-align="right" data-sortable="true">Item ID</th>
            <th data-field="name" data-align="center" data-sortable="true">Item Name</th>
            <th data-field="price" data-sortable="true" data-sorter="priceSorter">Item Price</th>
        </tr>
    </thead>
</table>
<!-- fin tabla dinamica -->
    
    <!--<div class="row">
        <div class="col-xs-12">

            <div class="box">

			<div class="box-header">

				<div class="box-name">

					<i class="fa fa-table"></i>

					<span> <a href="#">Exportar Datos</a></span>

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

			<div class="box-content no-padding">
                <table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
					<tbody>
						<tr>
                            <td class="text-capitalize"><b>Exportar a PDF </b></td>
                            <td><input type="button" value="PDF" ></td>
    					</tr>					
						<tr>
							<td><b>Exportar como XML</b></td>
							<td><input type="button" value="XML" ></td>
						</tr>
						<tr>
							<td><b>Enviar por Correo electronico/b></td>
                            <td><input type="button" value="e-Mail" ></td>
                        </tr>
					</tbody>
				</table>    				
			</div>
		</div>
        </div>
    </div>-->
</div>