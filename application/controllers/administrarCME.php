<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AdministrarCME extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->model('administrarcme_model');  
                $this->load->helper('form');
                $this->load->library('form_validation');
                
                
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
        //SI EL FORMULARIO PASA LA VALIDACIÓN HACEMOS TODO LO QUE SIGUE
        if ($this->form_validation->run() == FALSE) 
        {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            
        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
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
        //SI EL FORMULARIO NO SE VÁLIDA LO MOSTRAMOS DE NUEVO CON LOS ERRORES
            $this->index();
        }
        }
        //FUNCIÓN PARA CREAR LA MINIATURA A LA MEDIDA QUE LE DIGAMOS
        function _create_thumbnail($filename){
            $config['image_library'] = 'gd2';
            //CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
            $config['source_image'] = 'upload/'.$filename;
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
            $config['new_image']='upload/thumbs/';
            $config['width'] = 150;
            $config['height'] = 150;
            $this->load->library('image_lib', $config); 
            $this->image_lib->resize();
        }

	function recibirDatos()
        {
            $data = array(
                        'snombre' => $this->input->post('txtMotivoConsulta'),
                        'paterno' => $this->input->post('txtAnamnesisProximarno'),
                        'materno' => $this->input->post('txtEnfermedades'),
                        'peso' => $this->input->post('txtTraumatismos'),
                        'estatura' => $this->input->post('txtOperaciones'),
                        'patologia'=> $this->input->post('txtFur'),
                        'estadoSalud' => $this->input->post('txtGinecoObs'),
                        'habitos' => $this->input->post('txtTabaquismo'),
                        'examenes' => $this->input->post('txtAlcoholismo'),
                        'medicamentos' => $this->input->post('txtDrogas'),
                        'reposo' => $this->input->post('txtDesordenes'),
                        'especialidadSugerida' => $this->input->post('txtNombreMed'),
                        'cirugias' => $this->input->post('txtAlimentos'),
                        'fechaControl' => $this->input->post('txtMedicamentos'),
                        'observaciones' => $this->input->post('txtAmbiente'),
                        'preliminar' => $this->input->post('txtAnimales'),
                        'preliminar' => $this->input->post('txtContactoPiel'),
                        'preliminar' => $this->input->post('txtSociales'),
                        'preliminar' => $this->input->post('txtFamiliares'),
                        'preliminar' => $this->input->post('txtInmunoObs'),
                        'preliminar' => $this->input->post('txtSisObs'),
                        'preliminar' => $this->input->post('txtResObs'),
                        'preliminar' => $this->input->post('txtCardioObs'),
                        'preliminar' => $this->input->post('txtGastroObs'),
                        'preliminar' => $this->input->post('txtGenitoObs'),
                        'preliminar' => $this->input->post('txtNeuroObs'),
                        'preliminar' => $this->input->post('txtEndoObs'),
                        'preliminar' => $this->input->post('txtPosicion'),
                        'preliminar' => $this->input->post('txtDecubito'),
                        'preliminar' => $this->input->post('txtDeambuObs'),
                        'preliminar' => $this->input->post('txtFacieObs'),
                        'preliminar' => $this->input->post('txtTiempo'),
                        'preliminar' => $this->input->post('txtEspacio'),
                        'preliminar' => $this->input->post('txtPersonas'),
                        'preliminar' => $this->input->post('txtConsObs'),
                        'preliminar' => $this->input->post('txtPeso'),
                        'preliminar' => $this->input->post('txtAltura'),
                        'preliminar' => $this->input->post('txtColor'),
                        'preliminar' => $this->input->post('txtHumedad'),
                        'preliminar' => $this->input->post('txtUntuosidad'),
                        'preliminar' => $this->input->post('txtTurgor'),
                        'preliminar' => $this->input->post('txtElasticidad'),
                        'preliminar' => $this->input->post('txtPielObs'),
                        'preliminar' => $this->input->post('txtAdenopatia'),
                        'preliminar' => $this->input->post('txtLinfaObsr'),
			'preliminar' => $this->input->post('txtRPM'),
			'preliminar' => $this->input->post('txtCelsius'),
			'preliminar' => $this->input->post('txtPresion'),
			'preliminar' => $this->input->post('txtPulso'),
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
            
            $this->form_validation->set_rules('txtBuscar', 'Buscar', 'required|max_length[10]');
            $this->form_validation->set_rules('txtMotivoConsulta', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtAnamnesisProxima', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtEnfermedades', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtTraumatismos', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtOperaciones', 'Motivo Consulta', 'required');
            $this->form_validation->set_rules('txtFur', 'FUR', 'regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]'); 
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
            $this->form_validation->set_rules('txtDiagnosticoPreliminar', 'Diagnostico Preliminar', 'required');
            
            if($this->form_validation->run() === true){                
               $this->recibirDatos();
            }

                echo 'Los datos ingresados son incorrectos';
        }
        
        
        


}
?>