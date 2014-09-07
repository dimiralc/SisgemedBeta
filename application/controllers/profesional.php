<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Profesional extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //cargamos modelo
        $this->load->model('datos_profesional');
        
        //cargamos libreria de sesion
        $this->load->library(array('session','form_validation'));
        //cargamos funciones para uso de funciones especificas
        $this->load->helper(array('url','form'));
    }
    
    
    public function index()
    {
    	if($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in')==TRUE){

            $idusername 		 =  $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            
			$data['perfil']      =  $this->session->userdata('perfil');
			$data['username']    =  $this->session->userdata('username');
            $data['institucion'] =  $this->session->userdata('institucion');
                   
			$data['titulo']      =  'Bienvenido '.ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data["profesional"] =   ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof'] =  $data['datos_profesional']->imagen;
            
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/index.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');

    	}else{

    		redirect(base_url().'login');
    	}	
    	
    }
    
    public function perfil(){
        
        if($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in')==TRUE){

            $idusername 		 =  $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            
			$data['perfil']      =  $this->session->userdata('perfil');
			$data['username']    =  $this->session->userdata('username');
            $data['institucion'] =  $this->session->userdata('institucion');
                   
			$data['titulo']      =  'Perfil '.ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data["profesional"] =   ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof'] =  $data['datos_profesional']->imagen;
            
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/perfil.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');

    	}else{

    		redirect(base_url().'login');
    	}	
    }
    
    public function registrarFCE(){
        
        if($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in')==TRUE){

            $idusername 		 =  $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            
			$data['perfil']      =  $this->session->userdata('perfil');
			$data['username']    =  $this->session->userdata('username');
            $data['institucion'] =  $this->session->userdata('institucion');
                   
			$data['titulo']      =  'Ficha Clinica Electronica';
            $data["profesional"] =  ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof'] =  $data['datos_profesional']->imagen;
            
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/agregarFCE.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');

    	}else{

    		redirect(base_url().'login/logout');
    	}
        
    } 
    
    public function recibirdatosFCE(){
       
        //Validar session usuario
        if($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in')==TRUE){
            
            //creamos arreglos
            $vacunas       = [];
            $alergias      = [];
            $medicamentos  = [];
            $enfermedades  = [];
            $accidentes    = [];
            
           //accion a realizar
            switch($_POST['accion']) {
                
                case "agregarFCE":
                    
                    //setiamos nuestros arreglos
                    $vacunas        = $this->input->post('vacunas');
                    $alergias       = $this->input->post('alergias');
                    $medicamentos   = $this->input->post('medicamentos');
                    $enfermedades   = $this->input->post('enfermedades');
                    $accidentes     = $this->input->post('accidentes');
                    //creamos nuestro arreglo de datos que seran enviado a nuestro modelo
                    $data = array(
                        'rut'           => $this->input->post('rut'), 
                        'desc_breve'    => $this->input->post('desc_breve'),
                        'vacunas'       => $vacunas,				
                        'alergias'      => $alergias,
                        'medicamentos'  => $medicamentos,
                        'enfermedades'  => $enfermedades,
                        'accidentes'    => $accidentes,
                        'observaciones' => $this->input->post('observaciones'),
                        'idusuario'     => $this->session->userdata('idusuario'),
                    );
                    //validar datos formulario.
                    $this->form_validation->set_rules("rut",'rut','required|trim|min_length[9]|max_length[30]|xss_clean');
                    
                    //validar errores.
                    if($this->form_validation->run() == FALSE){
                       //mostrar error en la vista.
                        echo "error_paciente";
                        
                    }else{//no hay errores de validaciones.
                        
                        //cargar modelo fichas clinicas.
                        $this->load->model('ficha_clinica');
                        //ingresar encabezado ficha clinica.
                        $res = $this->ficha_clinica->crearFichaClinica($data);
                        //validar ingreso ficha clinica
                        
                        if($res == "error"){
                            
                            //esto sirve para mostrar el error en la vista,no es necesario volver al controlador
                            $this->session->set_flashdata('error_transaccion_fce',
                            '>>> Por algun motivo no se pudo hacer el proceso. Por favor vuelva a intantar.');
                            echo "error";
                        
                                    
                        }else{
                            
                            //crear una sesión flashdata 
                            $this->session->set_flashdata('transaccion_correcta_fce',
                            '>>> Ficha clinica ingresada correctamente. ¡¡.');
                            //retornar exito FCE ingresada correctamente
                            echo $res;
                        }
                    }
                        
                break;
                //actualizar FCE
                case "Actualizar":
                    break;
                //Eliminar FCE
                case "Eliminar":
                    break;
                //buscar FCE
                case "Buscar":
                    break;
            }
            
    	}else{
            //
    		redirect(base_url().'login');
    	}    
    }
    
    public function ficha_clinica(){
        
        if($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in')==TRUE){

            $idusername 		 =  $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            
			$data['perfil']      =  $this->session->userdata('perfil');
			$data['username']    =  $this->session->userdata('username');
            $data['institucion'] =  $this->session->userdata('institucion');
                   
			$data['titulo']      =  'Ficha Clinica';
            $data["profesional"] =  ucwords($data['datos_profesional']->primer_nombre)." ".ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof'] =  $data['datos_profesional']->imagen;
            
            $this->load->view('componentes/header.php',$data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/ficha_clinica.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');

    	}else{

    		redirect(base_url().'login/logout');
    	}
    }
}