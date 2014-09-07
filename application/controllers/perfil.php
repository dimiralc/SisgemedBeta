<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->helper('form');
                $this->load->model('administrarperfil_model');
	}
	function index(){
		$data["titulo"] = 'Perfil';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('profesional/perfil.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}
        
        function recibirDatos(){
		$data = array(
				'run' => $this->input->post('Run'), 
				'pnombre' => $this->input->post('Pnombre'),
                                'snombre' => $this->input->post('Snombre'),
				'paterno' => $this->input->post('Paterno'),
				'materno' => $this->input->post('Materno'),
				'telefono' => $this->input->post('Telefono'),
                                'fecnac' => $this->input->post('Fecnac'),
                                'passactual' => $this->input->post('Pactual'),
                                'passnueva' => $this->input->post('Pnueva'),
				'direccion' => $this->input->post('Direccion'),				
				'genero' => $this->input->post('genero'),
				'pais' =>$this->input->post('pais')
			);

		switch( $_POST['btoPerfil'] ) {
                    case "Guardar":                       
                        $this->administrarperfil_model->actualizarPerfil($data);
                        $this->index();
                    break;                    
                    case "Cancelar":
                        $data["titulo"] = 'Index';
                        $data["url_base"] = $this->config->base_url();
                        $this->load->view('componentes/header.php', $data);
                        $this->load->view('componentes/navbar.php');
                        $this->load->view('componentes/sidebar.php');
                        $this->load->view('profesional/index.php');		
                        $this->load->view('componentes/modal.php');
                        $this->load->view('componentes/footer.php');
                    }
	}   
}
?>