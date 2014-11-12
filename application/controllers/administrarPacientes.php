<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarPacientes extends CI_Controller {
  function __construct(){
    parent::__construct();    
    $this->load->helper('form');
    $this->load->model('administrarpacientes_model');
    $this->load->model('upload_model');
    $this->load->helper('url');
    $this->load->library('form_validation');

    
  }
  function index(){
    $this->registrarPaciente();    
  }

  function validarDatos_paciente(){
    $this->form_validation->set_rules('txtRut', 'Rut', 'required|max_length[15]');
    $this->form_validation->set_rules('txtNombres', 'Nombres', 'required');
    $this->form_validation->set_rules('txtSegundoNombre', 'Nombres', 'required');
    $this->form_validation->set_rules('txtPaterno', 'Paterno', 'required');
    $this->form_validation->set_rules('txtMaterno', 'Materno', 'required');
    $this->form_validation->set_rules('txtTelefono', 'Telefono', 'required|numeric');
    $this->form_validation->set_rules('txtEdad', 'Edad', 'required');
    $this->form_validation->set_rules('txtFecnac', 'Fecha de Naciemiento', 'required');
    $this->form_validation->set_rules('txtMail', 'Correo Electronico', 'required');
    $this->form_validation->set_rules('txtFecing', 'Fecha de Ingreso', 'required');            
    $this->form_validation->set_rules('txtDireccion', 'Direccion', 'required');
    $this->form_validation->set_rules('rbtGenero', 'Genero / Sexo', 'required');
    $this->form_validation->set_rules('rbtEcivil', 'Estado Civil', 'required');
    $this->form_validation->set_message('required', 'Este Campo es obligatorio');            
    if($this->form_validation->run() === true){
      $this->recibirDatos_paciente();
    }
    else
    {                
      $this->index();                 
    }
  }

  function recibirDatos_paciente(){
    $data = array(
      'rut' => $this->input-> post('txtRut'), 
      'nombres' => $this->input->post('txtNombres'),
      'snombre' => $this->input->post('txtSegundoNombre'),
      'paterno' => $this->input->post('txtPaterno'),
      'materno' => $this->input->post('txtMaterno'),
      'telefono' => $this->input->post('txtTelefono'),
      'edad' => $this->input->post('txtEdad'),
      'genero' => $this->input->post('rbtGenero'),
      'nacionalidad'=>  $this->input->post('ddlPais'),
      'fecnac' => $this->input->post('txtFecnac'),
      'ecivil' => $this->input->post('rbtEcivil'),                        
      'direccion' =>$this->input->post('txtDireccion'),
      'fecing' =>$this->input->post('txtFecing'),
      'mail' =>$this->input->post('txtMail'),
      'prevmedica'=>  $this->input->post('ddlPrevision'),
      'ocupacion'=>  $this->input->post('ddlOcupacion'),
      'nivelestudios'=>  $this->input->post('ddlNivelestudios')
      );
    switch( $_POST['btoPacientes'] ) {
      case "Agregar":  
      $this->do_upload();
      $this->administrarpacientes_model->anadirUsuario($data);
      $this->administrarpacientes_model->anadirPaciente($data);
      $this->administrarpacientes_model->anadirHistoriaClinica($data);
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

  function registrarPaciente(){
    $data["titulo"] = 'Agregar Paciente';
    $data["url_base"] = $this->config->base_url();
    $data["arrProfesiones"]= $this->administrarpacientes_model->getProfesiones();
    $data["arrPaises"]= $this->administrarpacientes_model->getPaises();
    $data["arrEstudios"]= $this->administrarpacientes_model->getEstudios();
    $this->load->view('componentes/header.php', $data);
    $this->load->view('componentes/navbar.php');    
    $this->load->view('componentes/sidebar.php');
    $this->load->view('profesional/agregarPaciente.php', $data);
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

  function do_upload() {
   $this->form_validation->set_rules('titulo', 'titulo', 'required|min_length[5]|max_length[10]|trim|xss_clean');
   $this->form_validation->set_message('required', 'El campo no puede ir vacío!');
   $this->form_validation->set_message('min_length', 'El campo debe tener al menos %s carácteres');
   $this->form_validation->set_message('max_length', 'El campo no puede tener más de %s carácteres');
   if ($this->form_validation->run() == TRUE) 
   {
     $config['upload_path'] = './uploads/';
     $config['allowed_types'] = 'gif|jpg|png';
     $config['max_size'] = '2000';
     $config['max_width'] = '2024';
     $config['max_height'] = '2008';
     $this->load->library('upload', $config);
     if (!$this->upload->do_upload()) {
       $error = array('error' => $this->upload->display_errors());
       $this->load->view('registrarPaciente', $error);
     } else {
       $file_info = $this->upload->data();
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
     $this->index();
   }
 }

 function _create_thumbnail($filename){
   $config['image_library'] = 'gd2';
   $config['source_image'] = 'uploads/'.$filename;
   $config['create_thumb'] = TRUE;
   $config['maintain_ratio'] = TRUE;
   $config['new_image']='uploads/thumbs/';
   $config['width'] = 150;
   $config['height'] = 150;
   $this->load->library('image_lib', $config); 
   $this->image_lib->resize();
 }
}
