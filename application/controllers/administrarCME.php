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
                $this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('profesional/agregarConsulta.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
                
	}

	function administrarConsulta(){
		$data["titulo"] = 'Administrar Consulta Medica';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('profesional/administrarCME.php');		
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
        
        function ingresarAntecedentesGenerales(){            
            $this->form_validation->set_rules('txtMotivoConsulta', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtAnamnesisProxima', 'Anamnesis Proxima', 'required');
            $this->form_validation->set_rules('txtDiagnosticoPreliminar', 'Diagnostico Preliminar', 'required');
            if($this->form_validation->run()===true){
                
            }else{
                echo 'Faltan datos';
            }
        }
        
        function ingresarAntecedentesMorbidos(){            
            $this->form_validation->set_rules('txtEnfermedades', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtTraumatismos', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtOperaciones', 'Motivo Consulta', 'required');
            if($this->fomr_validation->run()===true){
                
            }else{
                echo 'Faltan Datos';
            }
                
        }
        
        function ingresarAntecedentesGinecoobstetricos(){
            
        }
        
        function ingresarHabitos(){
            
        }
        
        function ingresarMedicamentos(){
            
        }
        
        function ingresarAlergias(){
            
        }
        
        function ingresarAntecedentesSP(){
                
        }
        
        function ingresarAntecedentesFamiliares(){
            
        }
        
        function ingresarInmunizaciones(){
            
        }
        
        function ingresarSintomasGenerales(){
            
        }
        
        function ingresarSintomasRespiratorio(){
            
        }
        
        function ingresarSintomasCardiovascular(){
            
        }
        
        function ingresarSintomasGastrointestinal(){
            
        }
        
        function ingresarSintomasGenitourinario(){
            
        }
        
        function ingresarSintomasNeurologico(){
            
        }
        
        function ingresarSintomasEndocrino(){
            
        }

	function recibirDatos()
        {
            $data = array(
                        'motivoConsulta' => $this->input->post('txtMotivoConsulta'),
                        'anamnesisProxima' => $this->input->post('txtAnamnesisProxima'),
                        'enfermedades' => $this->input->post('txtEnfermedades'),
                        'traumatismos' => $this->input->post('txtTraumatismos'),
                        'operaciones' => $this->input->post('txtOperaciones'),
                        'fur'=> $this->input->post('txtFur'),
                        'ginecoObs' => $this->input->post('txtGinecoObs'),
                        'tabaquismos' => $this->input->post('txtTabaquismo'),
                        'alcoholismo' => $this->input->post('txtAlcoholismo'),
                        'drogas' => $this->input->post('txtDrogas'),
                        'desordenes' => $this->input->post('txtDesordenes'),
                        'nombreMed' => $this->input->post('txtNombreMed'),
                        'alimentos' => $this->input->post('txtAlimentos'),
                        'medicamentos' => $this->input->post('txtMedicamentos'),
                        'ambiente' => $this->input->post('txtAmbiente'),
                        'animales' => $this->input->post('txtAnimales'),
                        'contactoPiel' => $this->input->post('txtContactoPiel'),
                        'sociales' => $this->input->post('txtSociales'),
                        'familiares' => $this->input->post('txtFamiliares'),
                        'inmunoObs' => $this->input->post('txtInmunoObs'),
                        'sisObs' => $this->input->post('txtSisObs'),
                        'resObs' => $this->input->post('txtResObs'),
                        'cardioObs' => $this->input->post('txtCardioObs'),
                        'gastroObs' => $this->input->post('txtGastroObs'),
                        'genitoObs' => $this->input->post('txtGenitoObs'),
                        'neuroObs' => $this->input->post('txtNeuroObs'),
                        'endoObs' => $this->input->post('txtEndoObs'),
                        'posicion' => $this->input->post('txtPosicion'),
                        'decubito' => $this->input->post('txtDecubito'),
                        'deambuObs' => $this->input->post('txtDeambuObs'),
                        'facieObs' => $this->input->post('txtFacieObs'),
                        'tiempo' => $this->input->post('txtTiempo'),
                        'esapcio' => $this->input->post('txtEspacio'),
                        'personas' => $this->input->post('txtPersonas'),
                        'consObs' => $this->input->post('txtConsObs'),
                        'peso' => $this->input->post('txtPeso'),
                        'altura' => $this->input->post('txtAltura'),
                        'color' => $this->input->post('txtColor'),
                        'humedad' => $this->input->post('txtHumedad'),
                        'untuosidad' => $this->input->post('txtUntuosidad'),
                        'turgor' => $this->input->post('txtTurgor'),
                        'elastisidad' => $this->input->post('txtElasticidad'),
                        'pielObs' => $this->input->post('txtPielObs'),
                        'adenopatia' => $this->input->post('txtAdenopatia'),
                        'lifaObs' => $this->input->post('txtLinfaObsr'),
			'rpm' => $this->input->post('txtRPM'),
			'celcius' => $this->input->post('txtCelsius'),
			'presion' => $this->input->post('txtPresion'),
			'pulso' => $this->input->post('txtPulso'),
			'preliminar' => $this->input->post('txtDiagnosticoPreliminar'),
			
			);                        
            switch( $_POST['btoConsulta'] ) {
                    case "Agregar":                       
                        $this->do_upload();
                        $this->administrarcme_model->anadirCME($data);
                        $this->index();
                    break;
                    case "Cancelar":
                        $this->index();
                    }
        }
        
        function validar_datos_consulta(){            
           
       
            $this->form_validation->set_rules('txtFur', 'FUR', 'requeired'); 
            $this->form_validation->set_rules('txtGinecoObs', 'Observaciones', 'required');
            $this->form_validation->set_rules('txtTabaquismo', 'Tabaquismo', 'required');
            $this->form_validation->set_rules('txtAlcoholismo', 'Alcoholismo', 'required');
            $this->form_validation->set_rules('txtDrogas', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtDesordenes', 'Desrodenes Alimenticios', 'required');
            $this->form_validation->set_rules('txtNombreMed', 'Nombre Medicamento', 'required');
            $this->form_validation->set_rules('txtAlimentos', 'Alergias Alimentos', 'required');
            $this->form_validation->set_rules('txtMedicamentos', 'Alergias Mediacamentos', 'required');
            $this->form_validation->set_rules('txtAmbiente', 'Alergias Ambiente', 'required');
            $this->form_validation->set_rules('txtAnimales', 'Alergias Animales', 'required');
            $this->form_validation->set_rules('txtContactoPiel', 'Alergias Contacto Piel', 'required');
            $this->form_validation->set_rules('txtSociales', 'Antecedentes Sociales', 'required');
            $this->form_validation->set_rules('txtFamiliares', 'Antecedentes familiares', 'required');
            $this->form_validation->set_rules('txtInmunoObs', 'Observaciones Inmunizacion', 'required');
            $this->form_validation->set_rules('txtSisObs', 'Observaciones Sintomas', 'required');
            $this->form_validation->set_rules('txtResObs', 'Observaciones S. Respiratorio', 'required');
            $this->form_validation->set_rules('txtCardioObs', 'Observaciones S. Cardiovascular', 'required');
            $this->form_validation->set_rules('txtGastroObs', 'Observaciones S. Gastrointestinal', 'required');
            $this->form_validation->set_rules('txtGenitoObs', 'Observaciones S. Genitourinario', 'required');
            $this->form_validation->set_rules('txtNeuroObs', 'Observacones S. Neurlogico', 'required');
            $this->form_validation->set_rules('txtEndoObs', 'Observaciones S. Endocrino', 'required');
            $this->form_validation->set_rules('txtPosicion', 'Poisicion', 'required');
            $this->form_validation->set_rules('txtDecubito', 'Decubito', 'required');
            $this->form_validation->set_rules('txtDeambuObs', 'Deambulacion', 'required');
            $this->form_validation->set_rules('txtFacieObs', 'Facie', 'required');
            $this->form_validation->set_rules('txtTiempo', 'Orientacion Tiempo', 'required');
            $this->form_validation->set_rules('txtEspacio', 'Orientacion Espacio', 'required');
            $this->form_validation->set_rules('txtPersonas', 'Reconocimiento Personas', 'required');
            $this->form_validation->set_rules('txtConsObs', 'Observaciones Conciencia', 'required');
            $this->form_validation->set_rules('txtPeso', 'Peso', 'required');
            $this->form_validation->set_rules('txtAltura', 'Altura', 'required');
            $this->form_validation->set_rules('txtColor', 'Color', 'required');
            $this->form_validation->set_rules('txtHumedad', 'Humedad', 'required');
            $this->form_validation->set_rules('txtUntuosidad', 'Untuosidad', 'required');
            $this->form_validation->set_rules('txtTurgor', 'Turgor', 'required');
            $this->form_validation->set_rules('txtElasticidad', 'Elasticidad', 'required');
            $this->form_validation->set_rules('txtPielObs', 'Observaciones Piel', 'required');
            $this->form_validation->set_rules('txtAdenopatia', 'Adenopatia', 'required');
            $this->form_validation->set_rules('txtLinfaObsr', 'Observaciones S. Linfatico', 'required');
            $this->form_validation->set_rules('txtRPM', 'Respiraciones Minuto', 'required');
            $this->form_validation->set_rules('txtCelsius', 'Temperatura', 'required');
            $this->form_validation->set_rules('txtPresion', 'Presion', 'required');
            $this->form_validation->set_rules('txtPulso', 'Pulso', 'required');
            
            $this->form_validation->set_message('required', 'Este campo es requerido');
            
            if($this->form_validation->run() === true){                
               $this->recibirDatos();
            }

                echo 'alert(Los datos ingresados son incorrectos)';
        }
        
        
        


}
?>