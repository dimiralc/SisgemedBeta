<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarPacientes extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('form');
                $this->load->model('administrarpacientes_model');
                $this->load->model('upload_model');
                $this->load->helper('url');
		
	}
	function index(){
		$this->registrarPaciente();
	}

	function registrarPaciente(){
		$data["titulo"] = 'Agregar Paciente';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');		
		$this->load->view('componentes/sidebar.php');
                $this->load->view('profesional/agregarPaciente.php');
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');

	}

	function administrarPaciente(){
                $data["titulo"] = 'Administrar Pacientes';
		$data["url_base"]  = $this->config->base_url(); 
                $this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('profesional/administrarPaciente.php');                
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
                
	}

	function actualizarPaciente(){
		$data["titulo"] = 'Actualizar Paciente';
		$data["url_base"]  = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('profesional/actualizarDatos.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}

	function recibirDatos(){
		$data = array(
				'rut' => $this->input->post('Rut'), 
				'nombre' => $this->input->post('Nombre'),
				'paterno' => $this->input->post('Paterno'),
				'materno' => $this->input->post('Materno'),
				'telefono' => $this->input->post('Telefono'),
				'direccion' => $this->input->post('Direccion'),
				'ecivil' => $this->input->post('ecivil'),
				'genero' => $this->input->post('genero'),
				'estudios' =>$this->input->post('estudios'),
				'enfermedades' =>$this->input->post('enfermedades')
			);

		switch( $_POST['btoPaciente'] ) {
                    case "Agregar":                       
                        $this->do_upload();
                        $this->administrarpacientes_model->anadirPaciente($data);                        
                    break;                    
                    case "Cancelar":
                        $this->index();
                    }
	}   
        
        function buscarPaciente(){
            
            $data["titulo"] = 'Administrar Pacientes';
            $data["url_base"]  = $this->config->base_url();                
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $data = array ('runInfo' => $this->input->post('Run'));
            $data['pacientes'] = $this->administrarpacientes_model->buscarPaciente($data);
            $this->load->view('profesional/administrarPaciente.php', $data);
            $this->load->view('componentes/sidebar.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
            $data = array ('runInfo' =>  $this->input->post('Run'));
            switch( $_POST['btoPaciente'] ) {
                    case "Eliminar Paciente":  
                        $this->administrarpacientes_model->eliminarPaciente($data);
                        $this->administrarPaciente();
                    break;
                    case "Actualizar Paciente":                       
                        $this->administrarpacientes_model->actualizarPaciente($data);
                        $this->administrarPaciente();
                    break;
            }
        }

            //FUNCIÓN PARA SUBIR LA IMAGEN Y VALIDAR EL TÍTULO
       function do_upload() {
           $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]|max_length[10]|trim|xss_clean');
           $this->form_validation->set_message('required', 'El campo no puede ir vacío!');
           $this->form_validation->set_message('min_length', 'El campo debe tener al menos %s carácteres');
           $this->form_validation->set_message('max_length', 'El campo no puede tener más de %s carácteres');
           //SI EL FORMULARIO PASA LA VALIDACIÓN HACEMOS TODO LO QUE SIGUE
           if ($this->form_validation->run() == TRUE) 
           {
           $config['upload_path'] = './uploads/';
           $config['allowed_types'] = 'gif|jpg|png';
           $config['max_size'] = '2000';
           $config['max_width'] = '2024';
           $config['max_height'] = '2008';

           $this->load->library('upload', $config);
           //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
           if (!$this->upload->do_upload()) {
               $error = array('error' => $this->upload->display_errors());
               $this->load->view('registrarPaciente', $error);
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
               $this->load->view('profesional/agregarPaciente', $data);
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
           $config['source_image'] = 'uploads/'.$filename;
           $config['create_thumb'] = TRUE;
           $config['maintain_ratio'] = TRUE;
           //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
           $config['new_image']='uploads/thumbs/';
           $config['width'] = 150;
           $config['height'] = 150;
           $this->load->library('image_lib', $config); 
           $this->image_lib->resize();
       }
}
?>