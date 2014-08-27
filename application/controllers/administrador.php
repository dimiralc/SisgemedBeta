<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Administrador extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //cargamos modelo
        $this->load->model('datos_administrador');
        $this->load->library(array('session'));
    }
    
    public function index()
    {
        //varificar que el id perfil sea administrador
    	if($this->session->userdata('idperfil') == 1 && $this->session->userdata('is_logued_in')==TRUE){
            
            //cargar id de sesion del usuario
			$idusername 		   = $this->session->userdata('idusuario');
            //obtener los datos del administrador
			$data['datos_administrador'] = $this->datos_administrador->datosAdministrador($idusername);
            
            //nombre del perfil  
            $data['perfil']        = $this->session->userdata('perfil');
			$data['username']      = $this->session->userdata('username');
            //nombre de la institucion medica
            $data['institucion']   = $this->session->userdata('institucion');
            
			$data['titulo']        = 'Bienvenido '.ucwords($data['datos_administrador']->primer_nombre)." ".ucwords($data['datos_administrador']->apellido_paterno);
			//nombre + apellido del administrador
            $data["administrador"] = ucwords($data['datos_administrador']->primer_nombre)." ".ucwords($data['datos_administrador']->apellido_paterno);
            //imagen del admin.
            $data["imagen_admin"]  = $data['datos_administrador']->imagen;
            
            $this->load->view('administrador/header.php', $data);
            $this->load->view('administrador/navbar.php');
            $this->load->view('administrador/sidebar.php');
            $this->load->view('administrador/perfilAdministrador.php');
            $this->load->view('administrador/modal.php');
            $this->load->view('administrador/footer.php');
            
    	}else{
    		
    		redirect(base_url().'login');
    	}	
    	
    }
}