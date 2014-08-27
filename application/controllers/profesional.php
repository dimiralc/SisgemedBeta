<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Profesional extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //cargamos modelo
        $this->load->model('datos_profesional');
        //cargamos libreria de sesion
        $this->load->library(array('session'));
        //cargamos funciones para uso de funciones especificas
        $this->load->helper(array('url'));
    }
    
    
    public function index()
    {
    	if($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in')==TRUE){

            $idusername 		 =  $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            
			$data['perfil']      =  $this->session->userdata('perfil');
			$data['username']    =  $this->session->userdata('username');
            $data['institucion'] =  $this->session->userdata('institucion');
                   
			$data['titulo']      =  'Bienvenido '.ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data["profesional"] =   ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof'] =  $data['datos_profesional']->imagen;
            
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/index.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');

    	}else{

    		redirect(base_url().'login');
    	}	
    	
    }
}