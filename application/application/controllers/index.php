<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Index extends CI_Controller {
	function __construct(){
		parent::__construct();
        $this--->load->helper('url');
        $data['home'] = strtolower(__CLASS__).'/';
        $this->load->vars($data);
        $this->load->library('highcharts');
	}
	function index(){
        $serie['data'] = array(20, 45, 60, 22, 6, 36);
        $data['charts'] = $this->highcharts->set_serie($serie)->render();
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
