<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdministrarCME extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->model('administrarcme_model');  
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->model('administrarpacientes_model');  
                
                
	}
	function index(){                
		$this->agregarCME();
                
	}

	function agregarCME(){
		$data["titulo"] = 'Agregar Consulta Medica';
		$data["url_base"] = $this->config->base_url();
        $data['arrInmunizacionesInfancia'] = $this->administrarcme_model->getInmunizacionesInfancia();
        $data['arrInmunizacionesAdultez'] = $this->administrarcme_model->getInmunizacionesAdultez();
        $this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
        $this->load->view('componentes/sidebar.php');
		$this->load->view('profesional/agregarConsulta.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
                
	}

	function do_upload() {
        $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]|max_length[10]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El campo no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El campo debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', 'El campo no puede tener más de %s carácteres');
        
        if ($this->form_validation->run() == FALSE) 
        {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';

        $this->load->library('upload', $config);
       
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            
        } else {
        
            $file_info = $this->upload->data();
            
            $this->_create_thumbnail($file_info['file_name']);
            $data = array('upload_data' => $this->upload->data());
            $titulo = $this->input->post('titulo');
            $imagen = $file_info['file_name'];
            $subir = $this->upload_model->subir($titulo,$imagen);      
            $data['titulo'] = $titulo;
            $data['imagen'] = $imagen;
            $this->load->view('imagen_subida_view', $data);
        }
        }else{
        
            $this->index();
        }
        }
        
        function _create_thumbnail($filename){
            $config['image_library'] = 'gd2';
            
            $config['source_image'] = 'upload/'.$filename;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            
            $config['new_image']='upload/thumbs/';
            $config['width'] = 150;
            $config['height'] = 150;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();
        }
        
        function buscarPaciente(){             
            $data = $this->input->post('txtBuscar');
            $registro = $this->administrarpacientes_model->buscarPaciente($data);
            print_r($registro);
        }
        
        function ingresarConsultaBase(){            
            $this->form_validation->set_rules('txtMotivoConsulta', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtAnamnesisProxima', 'Anamnesis Proxima', 'required');
            $this->form_validation->set_rules('txtDiagnosticoPreliminar', 'Diagnostico Preliminar', 'required');
            if($this->form_validation->run()===true){
                $data = array(
                    'nroHistoriaClinica' => $this->input->post('txtNhce'),
                    'motivoConsulta' => $this->input->post('txtMotivoConsulta'),
                    'anamnesisProxima' => $this->input->post('txtAnamnesisProxima'),
                    'diagnosticoPreliminar' => $this->input->post('txtDiagnosticoPreliminar')
                );
                $consultaBase = $this->administrarcme_model->ingresarConsultaBase($data);
                print_r($consultaBase);
            }else{
                echo 'Faltan datos';
            }
        }
        
        function ingresarAntecedentesMorbidos(){            
            $this->form_validation->set_rules('txtEnfermedades', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtTraumatismos', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtOperaciones', 'Motivo Consulta', 'required');
            if($this->fomr_validation->run()===true){
                $data = array(
                    'enfermedades' => $this->input->post('txtEnfermedades'),
                    'traumatismos' => $this->input->post('txtTraumatismos'),
                    'operaciones' => $this->input->post('txtOperaciones')                    
                );
                $antecedentesMorbidos = $this->administrarcme_model->ingresarAntecedentesMorbidos($data); 
                prin_r($antecedentesMorbidos);
            }else{
                echo 'Faltan Datos';
            }
                
        }
        
        function ingresarAntecedentesGinecoobstetricos(){
            $this->form_validation->set_rules('txtFur', 'Fecha ultima regla', 'required');
            $this->form_validation->set_rules('txtGinecoObs', 'Observaciones Ginecoobstetricas', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'fur' => $this->input->post('txtFur'),
                    'ginecoObs' => $this->input->post('txtGinecoObs')
                );
                $antecedentesGinecoobstetricos = $this->administrarcme_model->ingresarAntecedentesGinecoobstetricos($data);
                print_r($antecedentesGinecoobstetricos);
            }else{
                echo 'Faltan Datos';
            }               
            
        }
        
        function ingresarHabitos(){
            $this->form_validation->set_rules('txtTabaquismo', 'Tabaquismo', 'required');
            $this->form_validation->set_rules('txtAlcoholismo', 'Alcoholismo', 'required');
            $this->form_validation->set_rules('txtDrogas', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtDesordenes', 'Desrodenes Alimenticios', 'required');
            
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'tabaquismo' => $this->input->post('txtTabaquismo'),
                    'alcoholismo' => $this->input->post('txtAlcoholismo'),
                    'drogas' => $this->input->post('txtDrogas'),
                    'desordenesAlimenticios' => $this->input->post('txtDesordenes')
                        
                );
                $habitos = $this->administrarcme_model->ingresarHabitos($data);
                print_r($habitos);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarMedicamentos(){
            $this->form_validation->set_rules('txtNombreMed', 'Nombre Medicamento', 'required');
            $this->fomr_validation->set_rules('txtDosisDiaria', 'Dosis Diaria', 'required');
             
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'nombreMedicamento' => $this->input->post('txtNombreMed'),
                    'dosisDiaria' => $this->input->post('txtDosisDiaria')
                );
                $medicamentos = $this->administrarcme_model->ingresarMedicamentos($data);
                print_r($medicamentos);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarAlergias(){
            $this->form_validation->set_rules('txtAlimentos', 'Alergias Alimentos', 'required');
            $this->form_validation->set_rules('txtMedicamentos', 'Alergias Mediacamentos', 'required');
            $this->form_validation->set_rules('txtAmbiente', 'Alergias Ambiente', 'required');
            $this->form_validation->set_rules('txtAnimales', 'Alergias Animales', 'required');
            $this->form_validation->set_rules('txtContactoPiel', 'Alergias Contacto Piel', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'alimentos' => $this->input->post('txtAlimentos'),
                    'medicamentos' => $this->input->post('txtMedicamentos'),
                    'ambiente' => $this->input->post('txtAmbiente'),
                    'animales' => $this->input->post('txtAnimales'),
                    'contctoPiel' => $this->input->post('txtContactoPiel')
                );
                $alergias = $this->administrarcme_model->ingresarAlergias($data);
                print_r($alergias);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarAntecedentesSP(){
            $this->form_validation->set_rules('txtSociales', 'Antecedentes Sociales', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'antecedentesSP' => $this->input->post('txtSociales')
                );
                $antecedentesSP = $this->administrarcme_model->ingresarAntecedentesSP($data);
                print_r($antecedentesSP);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarAntecedentesFamiliares(){
            $this->form_validation->set_rules('txtFamiliares', 'Antecedentes familiares', 'required');
             if($this->form_validation->run()=== TRUE){
                $data = array(
                    'antecedentesFamiliares' => $this->input->post('txtFamiliares')
                );
                $antecedentesFamiliares = $this->administrarcme_model->ingresarAntecedentesFamiliares($data);
                print_r($antecedentesFamiliares);
            }else{
                echo 'Faltan Datos';
            }
            
        }
        
        function ingresarInmunizaciones(){
            $this->form_validation->set_rules('txtInmunoObs', 'Observaciones Inmunizacion', 'required');
             if($this->form_validation->run()=== TRUE){
                $data = array(
                    'inmunoObs' => $this->input->post('txtInmunoObs')
                );
                $inmunizaciones = $this->administrarcme_model->ingresarInmunizaciones($data);
                print_r($inmunizaciones);
            }else{
                echo 'Faltan Datos';
            }
            
        }
        
        function ingresarSintomasGenerales(){
            $this->form_validation->set_rules('txtSisObs', 'Observaciones Sintomas Generales', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'sisObs' => $this->input->post('txtSisObs')
                );
                $sintomasGenerales = $this->administrarcme_model->ingresarSintomasGenerales($data);
                print_r($sintomasGenerales);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarSintomasRespiratorio(){
             $this->form_validation->set_rules('txtResObs', 'Observaciones S. Respiratorio', 'required');
             if($this->form_validation->run()=== TRUE){
                $data = array(
                    'respObs' => $this->input->post('txtResObs')
                );
                $sintomasRespiratorio = $this->administrarcme_model->ingresarSintomasRespiratorio($data);
                print_r($sintomasRespiratorio);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarSintomasCardiovascular(){
              $this->form_validation->set_rules('txtCardioObs', 'Observaciones S. Cardiovascular', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'cardioObs' => $this->input->post('txtCardioObs')
                );
                $sintomasCardiovasculares = $this->administrarcme_model->ingresarSintomasCardiovascular($data);
                print_r($sintomasCardiovasculares);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarSintomasGastrointestinal(){
               $this->form_validation->set_rules('txtGastroObs', 'Observaciones S. Gastrointestinal', 'required');
               if($this->form_validation->run()=== TRUE){
                $data = array(
                    'gastroObs' => $this->input->post('txtGastroObs')
                );
                $sintomasGastrointestinales = $this->administrarcme_model->ingresarSintomasGastrointestinal($data);
                print_r($sintomasGastrointestinales);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarSintomasGenitourinario(){
            $this->form_validation->set_rules('txtGenitoObs', 'Observaciones S. Genitourinario', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'genitoObs' => $this->input->post('txtGenitoObs')
                );
                $sintomasGenitourinario = $this->administrarcme_model->ingresarSintomasGenitourinario($data);
                print_r($sintomasGenitourinario);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarSintomasNeurologico(){
            $this->form_validation->set_rules('txtNeuroObs', 'Observacones S. Neurlogico', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'neuroObs' => $this->input->post('txtNeuroObs')
                );
                $sintomasNeurologicos = $this->administrarcme_model->ingresarSintomasNeurologico($data);
                print_r($sintomasNeurologicos);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarSintomasEndocrino(){
            $this->form_validation->set_rules('txtEndoObs', 'Observaciones S. Endocrino', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'endoObs' => $this->input->post('txtEndoObs')
                );
                $sintomasEndocrinos = $this->administrarcme_model->ingresarSintomasEndocrino($data);
                print_r($sintomasEndocrinos);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarExamenPosicion(){
            $this->form_validation->set_rules('txtPosicion', 'Poisicion', 'required');
            $this->form_validation->set_rules('txtDecubito', 'Decubito', 'required');
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'posicion' => $this->input->post('txtPosicion'),
                    'decubito' => $this->input->post('txtDecubito')
                );
                $examenPosicion = $this->administrarcme_model->ingresarExamenPosicion($data);
                print_r($examenPosicion);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarExamenDeambulacion(){
            $this->form_validation->set_rules('txtDeambuObs', 'Deambulacion', 'required'); 
            if($this->form_validation->run()=== TRUE){
                $data = array(
                    'deambuObs' => $this->input->post('txtDeambuObs')                    
                );
                $examenDeambulacion = $this->administrarcme_model->ingresarExamenDeambulacion($data);
                print_r($examenDeambulacion);
            }else{
                echo 'Faltan Datos';
            }
            
        }

        function ingresarExamenFacie(){
            $this->form_validation->set_rules('txtFacieObs', 'Facie', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'facieObs' => $this->input->post('txtFacieObs')                    
                );
                $examenFacie = $this->administrarcme_model->ingresarExamenFacie($data);
                print_r($examenFacie);
            }else{
                echo 'Faltan Datos';
            }
            
        }
        
        function ingresarExamenConciencia(){
            $this->form_validation->set_rules('txtTiempo', 'Orientacion Tiempo', 'required');
            $this->form_validation->set_rules('txtEspacio', 'Orientacion Espacio', 'required');
            $this->form_validation->set_rules('txtPersonas', 'Reconocimiento Personas', 'required');
            $this->form_validation->set_rules('txtConsObs', 'Observaciones Conciencia', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'tiempo' => $this->input->post('txtTiempo'),                    
                    'espacio' => $this->input->post('txtEspacio'),
                    'personas' => $this->input->post('txtPersonas'),
                    'conciencia' => $this->input->post('txtConsObs')
                        
                );
                $examenConciencia = $this->administrarcme_model->ingresarExamenConciencia($data);
                print_r($examenConciencia);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarExamenConstitucion(){             
            $this->form_validation->set_rules('txtPeso', 'Peso', 'required');
            $this->form_validation->set_rules('txtAltura', 'Altura', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'peso' => $this->input->post('txtPeso'),
                    'altura' => $this->input->post('txtAltura')
                );
                $examenConstitucion = $this->administrarcme_model->ingresarExamenConstitucion($data);
                print_r($examenConstitucion);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarExamenPiel(){
            $this->form_validation->set_rules('txtColor', 'Color', 'required');
            $this->form_validation->set_rules('txtHumedad', 'Humedad', 'required');
            $this->form_validation->set_rules('txtUntuosidad', 'Untuosidad', 'required');
            $this->form_validation->set_rules('txtTurgor', 'Turgor', 'required');
            $this->form_validation->set_rules('txtElasticidad', 'Elasticidad', 'required');
            $this->form_validation->set_rules('txtPielObs', 'Observaciones Piel', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'color' => $this->input->post('txtColor'),
                    'humendad' => $this->input->post('txtHumedad'),
                    'untuosidad' => $this->input->post('txtUntuosidad'),
                    'turgor' => $this->input->post('txtTurgor'),
                    'elasticidad' => $this->input->post('txtElasticidad'),
                    'pielObs' => $this->input->post('txtPielObs')
                );
                $examenPiel = $this->administrarcme_model->ingresarExamenPiel($data);
                print_r($examenPiel);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarExamenLinfatico(){
            $this->form_validation->set_rules('txtAdenopatia', 'Adenopatia', 'required');
            $this->form_validation->set_rules('txtLinfaObsr', 'Observaciones S. Linfatico', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'adenopatia' => $this->input->post('txtAdenopatia'),
                    'linfaObs' => $this->input->post('txtLinfaObsr') 
                );
                $examenLinfatico = $this->administrarcme_model->ingresarExamenLinfatico($data);
                print_r($examenLinfatico);
            }else{
                echo 'Faltan Datos';
            }
        }
        
        function ingresarExamenRespiracion(){
            $this->form_validation->set_rules('txtRPM', 'Respiraciones Minuto', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'rpm' => $this->input->post('txtRPM')                    
                );
                $examenRespiracion = $this->administrarcme_model->ingresarExamenRespiracion($data);
                print_r($examenRespiracion);
            }else{
                echo 'Faltan Datos';
            }
            
        }
        
        function ingresarExamenTemperatura(){
            $this->form_validation->set_rules('txtCelsius', 'Temperatura', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'temperatura' => $this->input->post('txtCelsius')                    
                );
                $examenTemperatura = $this->administrarcme_model->ingresarExamenTemperatura($data);
                print_r($examenTemperatura);
            }else{
                echo 'Faltan Datos';
            }
            
        }
        
        function  ingresarExamenPP(){
            $this->form_validation->set_rules('txtPresion', 'Presion', 'required');
            $this->form_validation->set_rules('txtPulso', 'Pulso', 'required');
              if($this->form_validation->run()=== TRUE){
                $data = array(
                    'presion' => $this->input->post('txtPresion'),
                    'pulso' => $this->input->post('txtPulso') 
                );
                $examenPP = $this->administrarcme_model->ingresarExamenPP($data);
                print_r($examenPP);
            }else{
                echo 'Faltan Datos';
            }
            
        }
                
       


}
?>