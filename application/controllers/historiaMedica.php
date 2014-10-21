<?php
/************************************************************************************************/
/**
 * @Controlador: historias medicas
 * @Fecha Creacion: 21-10-2014
 * @Autor: Cristian Vidal 
 */
/************************************************************************************************/

if (!defined('BASEPATH')) exit('No direct script access allowed');
class HistoriaMedica extends CI_Controller
{
    public function __construct()
      {
        parent::__construct();
        //cargamos modelo datos_profesionales
        $this->load->model('datos_profesional');
        //cargamos modelo historia medica
        $this->load->model('historia_medica_model');
        //cargamos libreria de sesion
        $this->load->library(array('session','form_validation'));
        //cargamos funciones para uso de funciones especificas
        $this->load->helper(array('url','form'));
      }
    /************************************************************************************************/
    /* Funcion Index Historia Medica */
    /************************************************************************************************/
    public function index()
    {
        echo "error al cargar los datos del paciente";
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos PACIENTE */
    /************************************************************************************************/
    public function paciente(){
        
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
        {
            // segment Permite recuperar un segmento específico del url
            // es decir obtenemos el id del paciente via GET
            $idpaciente =  $this->uri->segment(3);
            //cargamos los datos personales del paciente y los guardamos en un arreglo
            $data["datos_paciente"] = $this->historia_medica_model->datosPaciente($idpaciente);
            
            $idusername                = $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            $data['perfil']            = $this->session->userdata('perfil');
            $data['username']          = $this->session->userdata('username');
            $data['institucion']       = $this->session->userdata('institucion');
            $data['titulo']            = 'Historia Clinica';
            $data["profesional"]       = ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof']       = $data['datos_profesional']->imagen;
            
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/historiaMedica.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
        }
        else
        {
            redirect(base_url() . 'login/logout');
        }
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON ANTECEDENTES FAMILIARES */
    /************************************************************************************************/ 
    public function jsonAntFamiliares(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     echo $this->historia_medica_model->ant_familiares($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON ANTECEDENTES MORBIDOS */
    /************************************************************************************************/ 
    public function jsonAntMorbidos(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     echo $this->historia_medica_model->ant_morbidos($idpaciente);
    }
    
    
  }
/************************************************************************************************/
/* Fin Controlador Historia Medicas */
/************************************************************************************************/
  
  