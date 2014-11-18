<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdministrarEnfermedad extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('administrarpatologias_model');
    }

    function index() {
        $data["titulo"] = 'Patologias';
        $data["url_base"] = $this->config->base_url();
        $this->load->view('componentes/header.php', $data);
        $this->load->view('componentes/navbar.php');
        $this->load->view('componentes/sidebar.php');
        $this->load->view('profesional/administrarEnfermedad.php');
        $this->load->view('componentes/modal.php');
        $this->load->view('componentes/footer.php');
    }

    function recibirDatos() {
        $data = array(
            'id' => $this->input->post('Id'),
            'nombre' => $this->input->post('Nombre'),
            'sistema' => $this->input->post('Sistema'),
            'sintomatologia' => $this->input->post('Sintomatologia'),
        );
        switch ($_POST['btopatologia']) {
            case "Agregar":
                $this->administrarpatologias_model->anadirPatologia($data);
                $this->index();
                break;
            case "Actualizar":
                $this->administrarpatologias_model->ActualizarPatologia($data);
                $this->index();
                break;
            case "Eliminar":
                $this->administrarpatologias_model->eliminarPatologia($data);
                $this->index();
                break;
            case "Buscar":
                $this->administrarpatologias_model->buscarPatologia($data);
                $this->index();
                break;
            case "Cancelar":
                $this->index();
        }
    }

}

?>