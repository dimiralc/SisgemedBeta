<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('index_model');
              
    }

    public function index() {
        $data["titulo"] = 'Index';
        $data["url_base"] = $this->config->base_url();
        $data["numPacientes"] = $this->index_model->getCantidadPacientes();
        $this->load->view('componentes/header.php', $data);
        $this->load->view('componentes/navbar.php');
        $this->load->view('componentes/sidebar.php');
        $this->load->view('profesional/index.php');
        $this->load->view('componentes/modal.php');
        $this->load->view('componentes/footer.php');
    }
    
   
}
