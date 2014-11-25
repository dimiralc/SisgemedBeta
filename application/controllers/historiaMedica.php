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
        //cargamos funciones / helpers
        $this->load->helper('mihelpers');
        //cargamos modelo datos_profesionales
        $this->load->model('profesional_model');
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
            /*************************************************************************************/
            /** Cargamos EL ID DEL PACIENTE
             *************************************************************************************/
            $idpaciente =  $this->uri->segment(3);
            
            /*************************************************************************************/
            /** Cargamos los datos personales del paciente y los guardamos en un arreglo
             *************************************************************************************/
            $data["datos_paciente"] = $this->historia_medica_model->datosPaciente($idpaciente);
            /*************************************************************************************/
            /** FIN datos personales del paciente
             *************************************************************************************/
            
            
            $idusername                = $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->profesional_model->datosProfesional($idusername);
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
    /* Recepcion de Datos Via JSON #ANTECEDENTES FAMILIARES#                                        */
    /************************************************************************************************/ 
    public function jsonAntFamiliares(){
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos los antecedentes familiares del paciente
     echo $this->historia_medica_model->ant_familiares($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #ANTECEDENTES SOCIALES Y PERSONALES#                             */
    /************************************************************************************************/ 
    public function jsonAntSocialPersonal(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos los antecedentes sociales y personales del paciente
     echo $this->historia_medica_model->antSocialesPersonales($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #PERSONAS DE CONTACTO#                                           */
    /************************************************************************************************/ 
    public function jsonAntPersonasContacto(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos las personas de contacto del paciente
     echo $this->historia_medica_model->ant_personas_contacto($idpaciente);
    }
    
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #ANTECEDENTES MORBIDOS#                                          */
    /************************************************************************************************/ 
    public function jsonAntMorbidos(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos los antecedentes morbidos del paciente
     echo $this->historia_medica_model->ant_morbidos($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #ANTECEDENTES GINECOOBSTÉTRICOS#                                          */
    /************************************************************************************************/ 
    public function jsonAntGineco(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos los antecedentes gineco... del paciente
     echo $this->historia_medica_model->ant_gineco($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #ANTECEDENTES HABITOS#                                          */
    /************************************************************************************************/ 
    public function jsonAntHabitos(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos los habitos del paciente
     echo $this->historia_medica_model->ant_habitos($idpaciente);
    }
    
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #ANTECEDENTES MEDICAMENTO#                                        */
    /************************************************************************************************/ 
    public function jsonAntMedicamentos(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos los medicamentos del paciente
     echo $this->historia_medica_model->ant_medicamentos($idpaciente);
    }
    
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #ANTECEDENTES ALERGIAS#                                          */
    /************************************************************************************************/ 
    public function jsonAntAlergias(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos las alergias del paciente
     echo $this->historia_medica_model->ant_alergias($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #ANTECEDENTES INMUNOLOGICOS (VACUNAS)#                           */
    /************************************************************************************************/ 
    public function jsonAntInmuno(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos las vacunas del paciente
     echo $this->historia_medica_model->ant_inmuno($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #CONSULTAS MEDICAS#                                              */
    /************************************************************************************************/ 
    public function jsonAntConsultasMed(){ 
     //obtenemos el id del paciente
     $idpaciente =  $this->uri->segment(3);
     //retornamos las vacunas del paciente
     echo $this->historia_medica_model->ant_consultas_med($idpaciente);
    }
    
    /************************************************************************************************/
    /* Recepcion de Datos Via JSON #HISTORIAS MEDICAS RECIENTES#                                    */
    /************************************************************************************************/ 
    public function jsonHceRecientes(){ 
     //obtenemos el id del paciente
     $id_institucion =  $this->session->userdata('idinstitucion');
     //retornamos las vacunas del paciente
     echo $this->historia_medica_model->hce_recientes($id_institucion);
    }
    
  }
/************************************************************************************************/
/* Fin Controlador Historia Medicas */
/************************************************************************************************/
  
  