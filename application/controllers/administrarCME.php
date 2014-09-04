<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarCME extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->model('administrarcme_model');                        
                
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
		$this->load->view('profesional/agregarCME.php');		
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
                        'nombre' => $this->input->post('Nombre'), 
                        'snombre' => $this->input->post('Snombre'),
                        'paterno' => $this->input->post('Paterno'),
                        'materno' => $this->input->post('Materno'),
                        'peso' => $this->input->post('Peso'),
                        'estatura' => $this->input->post('Estatura'),
                        'patologia'=> $this->input->post('Patologia'),
                        'estadoSalud' => $this->input->post('EstadoSalud'),
                        'habitos' => $this->input->post('Habitos'),
                        'examenes' => $this->input->post('Examenes'),
                        'medicamentos' => $this->input->post('Medicamentos'),
                        'reposo' => $this->input->post('Reposo'),
                        'especialidadSugerida' => $this->input->post('EspecialidadSugerida'),
                        'cirugias' => $this->input->post('Cirugias'),
                        'fechaControl' => $this->input->post('FechaControl'),
                        'observaciones' => $this->input->post('Observaciones'),
                        'preliminar' => $this->input->post('Preliminar')
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
        
        
        


}
?>