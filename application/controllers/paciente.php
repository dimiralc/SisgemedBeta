<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Paciente extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
    }
    
    public function index()
    {
    	if($this->session->userdata('idperfil') == 3 && $this->session->userdata('is_logued_in')==TRUE){

			$idusername 		 =  $this->session->userdata('idusuario');
			$data['perfil']      =  $this->session->userdata('perfil');
			$data['username']    =  $this->session->userdata('username');
            $data['institucion'] =  $this->session->userdata('institucion');
			$data['titulo']      = 'BIENVENIDO '.$idusername;
            echo 'cargar Interfaz paciente <br>'
            . ' <a href="'.base_url().'login/logout">Cerrar Sesión</a>';
    	}else{

    		redirect(base_url().'login');
    	}	
    	
    }
}