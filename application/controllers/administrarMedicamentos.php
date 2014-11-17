<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdministrarMedicamentos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('administrarmedicamentos_model');
        $this->load->helper('url');
    }

    function index() {
        $data["titulo"] = 'Medicamentos';
        $data["url_base"] = $this->config->base_url();
        $data["medicamentos"] = $this->administrarmedicamentos_model->obtenerMedicamento();
        $this->load->view('componentes/header.php', $data);
        $this->load->view('componentes/navbar.php');
        $this->load->view('componentes/sidebar.php');
        $this->load->view('profesional/administrarMedicamentos.php');
        $this->load->view('componentes/modal.php');
        $this->load->view('componentes/footer.php');
    }

    function recibirDatos() {
        $this->form_validation->set_rules('txtBuscar', 'Buscar', 'required|min_length[3]');
        $this->form_validation->set_rules('Id', 'id', 'required|min_length[3]');
        $this->form_validation->set_rules('Nombre', 'nombre', 'required|min_length[5]');
        $this->form_validation->set_rules('Componente', 'componente', 'required|min_length[5]');
        $this->form_validation->set_rules('Laboratorio', 'laboratorio', 'required|min_length[5]');
        $this->form_validation->set_rules('Descripcion', 'descripcion', 'required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id' => $this->input->post('Id'),
                'nombre' => $this->input->post('Nombre'),
                'componente' => $this->input->post('Componente'),
                'laboratorio' => $this->input->post('Laboratorio'),
                'descripcion' => $this->input->post('Descripcion')
            );
            switch ($_POST['btomedicamento']) {
                case "Agregar":
                    $this->administrarmedicamentos_model->anadirMedicamento($data);
                    echo 'Agregado Existosamente';
                    break;
                case "Actualizar":
                    $this->administrarmedicamentos_model->actualizarMedicamento($data);
                    $this->index();
                    break;
                case "Eliminar":
                    $this->administrarmedicamentos_model->eliminarMedicamento($data);
                    $this->index();
                    break;
                case "Buscar":
                    $this->administrarmedicamentos_model->buscarMedicamento($data);
                    $this->index();
                    break;
                case "Cancelar":
                    $this->index();
            }
        }
    }

}
