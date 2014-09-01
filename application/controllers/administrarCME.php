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
                        $this->administrarcme_model->anadirCME($data);
                        $this->index();
                    break;                    
                    case "Cancelar":
                        $this->index();
                    }
        }
        
        
        


}
?>