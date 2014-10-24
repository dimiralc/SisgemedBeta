<?php
    
    /*Datos generales del paciente*/
    
    $buscarPaciente = array(
            'name'=> 'txtBuscar',
            'id' => 'buscarRut',
            'placeholder'=>'DNI, Rut o Codigo de Paciente',
            'class' => 'form-control'                                                                                  
            );
    $rut = array(
            'name'=> 'txtRut',
            'id' => 'rut',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $dni = array(
            'name'=> 'txtDni',
            'id' => 'dni',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $nombres = array(
            'name'=> 'txtNombres',
            'id' => 'nombre_paciente',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $paterno = array(
            'name'=> 'txtPaterno',
            'id' => 'paterno',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $materno = array(
            'name'=> 'txtMaterno',
            'id' => 'materno',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $sexo = array(
            'name'=> 'txtSexo',
            'id' => 'sexo',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $edad = array(
            'name'=> 'txtEdad',
            'id' => 'edad',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $nacionalidad = array(
            'name'=> 'txtNacionalidad',
            'id' => 'nacionalidad',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $ecivil = array(
            'name'=> 'txtEcivil',
            'id' => 'ecivil',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $date = array(
            'name'=> 'txtDate',
            'id' => 'date',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    $nhce = array(
            'name'=> 'txtNhce',
            'id' => 'nhce',
            'class'=>'form-control',
            'disabled' => 'true'
        );
    
    /*Datos de consulta / anamnesis proxima */
    $motivoConsulta = array(
            'name'=> 'txtMotivoConsulta',
            'id' => 'motivoConsulta',
            'class'=>'form-control',
            'rows'=> '2'
        );
    $anamnesisProxima = array(
            'name'=> 'txtAnamnesisProxima',
            'id' => 'anamnesisProxima',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Antecedentew Clinicos*/
    /*Antecedentes Morbidos*/
    $enfermedades = array(
            'name'=> 'txtEnfermedades',
            'id' => 'enfermedades',
            'class'=>'form-control'
        );
    $traumatismos = array(
            'name'=> 'txtTraumatismos',
            'id' => 'traumatismos',
            'class'=>'form-control'
        );
    $operaciones = array(
            'name'=> 'txtOperaciones',
            'id' => 'operaciones',
            'class'=>'form-control'
        );
    
    /*Antecedentes gineccoobstetricos*/
    $fur = array(
            'name'=> 'txtFur',
            'id' => 'fur',
            'class'=>'form-control'
        );
    $ginecoObs = array(
            'name'=> 'txtGinecoObs',
            'id' => 'ginecoObs',
            'class'=>'form-control',
            'rows'=> '2'
        );
    
    /*Habitos*/
    $tabaquismo = array(
            'name'=> 'txtTabaquismo',
            'id' => 'tabaquismo',
            'class'=>'form-control'
        );
    $alcoholismo = array(
            'name'=> 'txtAlcoholismo',
            'id' => 'alcoholismo',
            'class'=>'form-control'
        );
    $drogas = array(
            'name'=> 'txtDrogas',
            'id' => 'drogas',
            'class'=>'form-control'
        );
    $desordenes = array(
            'name'=> 'txtDesordenes',
            'id' => 'desordenes',
            'class'=>'form-control'
        );
    
    /*Consumo de medicamentos*/
    $nombreMed = array(
            'name'=> 'txtNombreMed',
            'id' => 'nombreMed',
            'class'=>'form-control'
        );
    
    /*Alergias*/
    $alimentos = array(
            'name'=> 'txtAlimentos',
            'id' => 'alimentos',
            'class'=>'form-control',
            'rows'=> '2'
        );
    $medicamentos = array(
            'name'=> 'txtMedicamentos',
            'id' => 'medicamentos',
            'class'=>'form-control',
            'rows'=> '2'
        );
    $ambiente = array(
            'name'=> 'txtAmbiente',
            'id' => 'ambiente',
            'class'=>'form-control',
            'rows'=> '2'
        );
    $animales = array(
            'name'=> 'txtAnimales',
            'id' => 'animales',
            'class'=>'form-control',
            'rows'=> '2'
        );
    $contactoPiel = array(
            'name'=> 'txtContactoPiel',
            'id' => 'contactoPiel',
            'class'=>'form-control',
            'rows'=> '2'
        );
    
    /*Antecedentes Sociales / Familiares Relevantes*/
    $antecedentesSociales = array(
            'name'=> 'txtSociales',
            'id' => 'antecedentesSociales',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $antecedentesFamiliares = array(
            'name'=> 'txtFamiliares',
            'id' => 'antecedentesFamiliares',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Imunizaciones*/
    $inmunoObs = array(
            'name'=> 'txtInmunoObs',
            'id' => 'inmunoObs',
            'class'=>'form-control'
        );
    
    /*Revision por Sistemas*/
    $sisObs = array(
            'name'=> 'txtSisObs',
            'id' => 'sisObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $resObs = array(
            'name'=> 'txtResObs',
            'id' => 'resObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $cardioObs = array(
            'name'=> 'txtCardioObs',
            'id' => 'cardioObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $gastroObs = array(
            'name'=> 'txtGastroObs',
            'id' => 'gastroObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $genitoObs = array(
            'name'=> 'txtGenitoObs',
            'id' => 'genitoObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $neuroObs = array(
            'name'=> 'txtNeuroObs',
            'id' => 'neuroObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $endoObs = array(
            'name'=> 'txtEndoObs',
            'id' => 'endoObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Examen Fisico General*/
    /*Posicion y Decubito*/
    $posicion = array(
            'name'=> 'txtPosicion',
            'id' => 'posicion',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $decubito = array(
            'name'=> 'txtDecubito',
            'id' => 'decubito',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Deambulacion*/
    $deambuObs = array(
            'name'=> 'txtDeambuObs',
            'id' => 'deambuObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Facie*/
    $facieObs = array(
            'name'=> 'txtFacieObs',
            'id' => 'facieObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Conciencia*/
    $tiempo = array(
            'name'=> 'txtTiempo',
            'id' => 'tiempo',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $espacio = array(
            'name'=> 'txtEspacio',
            'id' => 'espacio',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $personas = array(
            'name'=> 'txtPersonas',
            'id' => 'personas',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $consObs = array(
            'name'=> 'txtConsObs',
            'id' => 'consObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Constitucion*/
    $peso = array(
            'name'=> 'txtPeso',
            'id' => 'peso',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $altura = array(
            'name'=> 'txtAltura',
            'id' => 'altura',
            'class'=>'form-control',
            'rows'=> '3'
        );
    $imc = array(
            'name'=> 'txtIMC',
            'id' => 'imc',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Piel*/
    $color = array(
            'name'=> 'txtColor',
            'id' => 'color',
            'class'=>'form-control'
        );
    $humedad = array(
            'name'=> 'txtHumedad',
            'id' => 'humedad',
            'class'=>'form-control'
        );
    $untuosidad = array(
            'name'=> 'txtUntuosidad',
            'id' => 'untuosidad',
            'class'=>'form-control'
        );
    $turgor = array(
            'name'=> 'txtTurgor',
            'id' => 'turgor',
            'class'=>'form-control'
        );
    $elasticidad = array(
            'name'=> 'txtElasticidad',
            'id' => 'elasticidad',
            'class'=>'form-control'
        );
    $pielObs = array(
            'name'=> 'txtPielObs',
            'id' => 'pielObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Sistema Linfatico*/
    $adenopatia = array(
            'name'=> 'txtAdenopatia',
            'id' => 'adenopatia',
            'class'=>'form-control'
        );
    $linfaObs = array(
            'name'=> 'txtLinfaObsr',
            'id' => 'linfaObs',
            'class'=>'form-control',
            'rows'=> '3'
        );
    
    /*Respiracion*/
    $rpm = array(
            'name'=> 'txtRPM',
            'id' => 'rpm',
            'class'=>'form-control'
        );
    
    /*Temperatura*/
    $celsius = array(
            'name'=> 'txtCelsius',
            'id' => 'celsius',
            'class'=>'form-control'
        );
    
    /*Presion y Pulso*/
    $presion = array(
            'name'=> 'txtPresion',
            'id' => 'presion',
            'class'=>'form-control'
        );
    $pulso = array(
            'name'=> 'txtPulso',
            'id' => 'pulso',
            'class'=>'form-control'
        );
    
    
    
    /*Diagnostico Preliminar*/
    $diagnosticoPreliminar = array(
            'name'=> 'txtDiagnosticoPreliminar',
            'id' => 'diagnosticoPreliminar',
            'class'=>'form-control',
            'rows'=> '3'
        ); 
    
?>

