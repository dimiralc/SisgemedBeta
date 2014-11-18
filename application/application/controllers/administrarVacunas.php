<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarVacunas extends CI_Controller {
	function __construct(){
		parent::__construct();
                $this->load->helper('form');
                $this->load->model('administrarvacunas_model');
	}
	function index(){
		$data["titulo"] = 'Vacunas';
		$data["url_base"] = $this->config->base_url();
		$this->load->view('componentes/header.php', $data);
		$this->load->view('componentes/navbar.php');
                $this->load->view('componentes/sidebar.php');
		$this->load->view('profesional/administrarVacunas.php');		
		$this->load->view('componentes/modal.php');
		$this->load->view('componentes/footer.php');
	}
        
         function recibirDatos(){
		$data = array(
				'id' => $this->input->post('Id'), 
				'nombre' => $this->input->post('Nombre'),
				'zona' => $this->input->post('Zona'),				
				'efectos' => $this->input->post('Efectos')
			);

		switch( $_POST['btovacunas'] ) {
                    case "Agregar":                       
                        $this->administrarvacunas_model->anadirVacuna($data);
                        $this->index();
                    break;
                    case "Actualizar":                       
                        $this->administrarvacunas_model->actualizarVacuna($data);
                        $this->index();
                    break;
                    case "Eliminar":
                        $this->administrarvacunas_model->eliminarVacuna($data);
                        $this->index();                        
                    break;
                    case "Buscar":
                        $this->administrarvacunas_model->buscarVacuna($data);
                        $this->index();                        
                    break;
                    case "Cancelar":
                        $this->index();
                    }
	}
}
?>