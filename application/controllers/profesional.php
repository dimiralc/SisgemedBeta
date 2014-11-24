<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Profesional extends CI_Controller
  {
    /******************************************************************************************/
    /** @Controlador Profesional
     **  
    /******************************************************************************************/
    
    public function __construct()
      {
        parent::__construct();
        //cargamos modelo
        $this->load->model('profesional_model');
        //cargamos libreria de sesion
        $this->load->library(array('session','form_validation'));
        //cargamos funciones para uso de funciones especificas
        $this->load->helper(array('url','form'));
    }
    
    /******************************************************************************************/
    /** @Funcion index por defecto, carga pantalla con las historias clinicas recientes
     **  INDEX = PAGINA POR DEFECTO
    /******************************************************************************************/
    public function index()
      {
        
        /******************************************************************************************/
        /** Validar variables de sesion
        /******************************************************************************************/
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
          {
            
            /******************************************************************************************/
            /** Cargamos las variables de sesion
            /******************************************************************************************/
            $idusername                = $this->session->userdata('idusuario');
            $data['perfil']            = $this->session->userdata('perfil');
            $data['username']          = $this->session->userdata('username');
            $data['institucion']       = $this->session->userdata('institucion');
            
            /******************************************************************************************/
            /** Cargamos los datos personales del profesional
            /******************************************************************************************/
            $data['datos_profesional'] = $this->profesional_model->datosProfesional($idusername);
            $data["profesional"]       = ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof']       = $data['datos_profesional']->imagen;
            $data['titulo']            = 'Bienvenido ' . ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            
            /******************************************************************************************/
            /** Cargamos las interfaz grafica
            /******************************************************************************************/
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/index.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
            
        }
        else
        {
            /******************************************************************************************/
            /** Redireccionar en caso de error
            /******************************************************************************************/
            redirect(base_url() . 'login');
        }
        
    }
      
    /******************************************************************************************/
    /** @Funcion que permite retornar los datos personales del profesional
     *  PERFIL PROFESIONAL
    /******************************************************************************************/
    public function perfil()
    {
        
        /******************************************************************************************/
        /** Validar variables de sesion
        /******************************************************************************************/
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
          {
            
            /******************************************************************************************/
            /** Cargamos las variables de sesion
            /******************************************************************************************/
            $idusername                = $this->session->userdata('idusuario');
            $data['perfil']            = $this->session->userdata('perfil');
            $data['username']          = $this->session->userdata('username');
            $data['institucion']       = $this->session->userdata('institucion');
            
            /******************************************************************************************/
            /** Cargamos todos los paises
            /******************************************************************************************/
            $data['paises'] = $this->profesional_model->cargarPaises();
            
            /******************************************************************************************/
            /** Cargamos datos personales del profesional
            /******************************************************************************************/
            $data['datos_profesional'] = $this->profesional_model->datosProfesional($idusername);
            $data["profesional"]       = ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            $data['titulo']            = 'Perfil ' . ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            //cambiar formato fecha a: dia-mes-año
            $fecha = $data['datos_profesional']->fecha_nacimiento;
            $arrayFecha = explode("-", $fecha,3);
            $anio   =  $arrayFecha[0];//obtenemos el año
            $mes    =  $arrayFecha[1];//obtenemos el mes
            $dia    =  $arrayFecha[2];//obtenemos el dia
            $fecha_nac = $dia."/".$mes."/".$anio;//creamos fecha formato america
            
            $data['id_profesional']    = $data['datos_profesional']->id_profesional;
            $data['rut']               = $data['datos_profesional']->rut;
            $data['primer_nombre']     = $data['datos_profesional']->primer_nombre;
            $data['segundo_nombre']    = $data['datos_profesional']->segundo_nombre;
            $data['apellido_paterno']  = $data['datos_profesional']->apellido_paterno;
            $data['apellido_materno']  = $data['datos_profesional']->apellido_materno;
            $data['telefono']          = $data['datos_profesional']->telefono;
            $data['direccion']         = $data['datos_profesional']->direccion;
            $data['correo']            = $data['datos_profesional']->correo;
            $data['sexo']              = $data['datos_profesional']->sexo;
            $data['fecha_nacimiento']  = $fecha_nac;
            $data['imagen']            = $data['datos_profesional']->imagen;
            //$data['idpais']            = $data['datos_profesional']->id;
            $data['username']          = $data['datos_profesional']->username;
            
            /******************************************************************************************/
            /** Cargamos las interfaz grafica
            /******************************************************************************************/
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/perfil.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
            
          }
        else
          {
            
            /******************************************************************************************/
            /** Redireccionar en caso de error.
            /******************************************************************************************/
            redirect(base_url() . 'login');
          }
      }
    
      
    /******************************************************************************************
    * @Funcion que permite modificar el perfil de un profesional, #AJAX#
    *******************************************************************************************/
    public function editarPerfil(){
        
        /**************************************************************************************
        * @Validar rut, no puede estar vacio
        ***************************************************************************************/
        $this->form_validation->set_rules('Run','Rut Profesional','required');
        
        if($this->form_validation->run()===true){
            
            /***********************************************************************************
            * @Creamos un arreglo con los datos del profesional. (datos del formulario)
            ************************************************************************************/
            
            //cambiar formato fecha a mysql
            $fecha = $this->input->post('Fecnac');
            $arrayFecha = explode("/", $fecha, 3);
            $dia    =  $arrayFecha[0];//obtenemos el dia
            $mes    =  $arrayFecha[1];//obtenemos el mes
            $anio   =  $arrayFecha[2];//obtenemos el año
            $fecha_NacMysql = $anio."-".$mes."-".$dia;//creamos fecha formato mysql
                        
            $data = array(
                'rut'               => trim($this->input->post('Run')),
                'primer_nombre'     => trim(mb_strtolower($this->input->post('Pnombre'))),
                'segundo_nombre'    => trim(mb_strtolower($this->input->post('Snombre'))),
                'apellido_paterno'  => trim(mb_strtolower($this->input->post('Paterno'))),
                'apellido_materno'  => trim(mb_strtolower($this->input->post('Materno'))),
                'telefono'          => trim($this->input->post('Telefono')),
                'fecha_nacimiento'  => $fecha_NacMysql,
                'direccion'         => trim(mb_strtolower($this->input->post('Direccion'))),
                'pais'              => (int)$this->input->post('paises'),
                'genero'            => trim(strtoupper($this->input->post('genero'))),
                'idprofesional'     => (int)$this->input->post('idprofesional')
            );
            
            /*******************************************************************************
            * @Modificamos los datos del profesional (llamada al modelo)
            ********************************************************************************/
            $modificarPerfil = $this->profesional_model->modificarDatosPerfil($data);
            
            /********************************************************************************
            * @Verificar respuesta
            ********************************************************************************/
            if($modificarPerfil == 1)
            {
                /****************************************************************************
                * @Datos modificados correctamente
                ****************************************************************************/
                echo "Los datos fueron Modificados con exito ¡¡";
                
            }else{
                
                /***************************************************************************
                * @Error al modificar los datos
                ****************************************************************************/
                echo "error_m";
            }   
            
        }else
        {
            /******************************************************************************
            * @Error rut vacio
            *******************************************************************************/    
            echo "error_r";
        }
    } 
      
    /******************************************************************************************
    * @Funcion que permite modificar el username del profesional, #AJAX#
    *******************************************************************************************/
    public function editarUsernameAcceso(){
        
        echo "modificar username";exit();
        
        /**************************************************************************************
        * @Validar usuario, no puede estar vacio
        ***************************************************************************************/
        $this->form_validation->set_rules('Username','Usuario Profesional','required');
        
        if($this->form_validation->run()===true){
            
            /***********************************************************************************
            * @Creamos un arreglo con los datos del profesional. (datos del formulario)
            ************************************************************************************/
            $data = array(
                'id_usuario'    =>$this->session->userdata('idusuario'),
                'usuario'       => trim($this->input->post('Username')),
                'idprofesional' => (int)$this->input->post('idprofesional')
            );
            
            /************************************************************************************
            * @Modificamos el usuario para acceso al sistema del profesional (llamada al modelo)
            *************************************************************************************/
            $modificarUsuario = $this->profesional_model->modificarUsuarioPerfil($data);
            
            /************************************************************************************
            * @Verificar respuesta
            *************************************************************************************/
            if($modificarUsuario == 1)
            {
                /****************************************************************************
                * @Datos modificados correctamente
                ****************************************************************************/
                echo "Username Modificado con exito ¡¡";
                
            }else{
                
                /***************************************************************************
                * @Error al modificar los datos
                ****************************************************************************/
                echo "error_m";
            }   
            
        }else
        {
            /******************************************************************************
            * @Error username vacio
            *******************************************************************************/    
            echo "error_u";
        }
        
    }
      
      
      
      
      
      
      
    /************************************************************************************************/
    /* @Funcion Registrar Ficha Clinica Profesional (no se esta usando al parecer)                  */
    /************************************************************************************************/
    public function registrarFCE()
      {
        
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
          {
            
            $idusername                = $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            $data['perfil']            = $this->session->userdata('perfil');
            $data['username']          = $this->session->userdata('username');
            $data['institucion']       = $this->session->userdata('institucion');
            $data['titulo']            = 'Ficha Clinica Electronica';
            $data["profesional"]       = ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof']       = $data['datos_profesional']->imagen;
            
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/agregarFCE.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
            
          }
        else
          {
            
            redirect(base_url() . 'login/logout');
          }
        
      }
    
    /************************************************************************************************/
    /* Funcion Recibir Datos de Ficha Clinica Electronica Profesional (no se esta usando)           */
    /************************************************************************************************/
    public function recibirdatosFCE()
      {
        
        //Validar session usuario
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
          {
            
            //accion a realizar
            switch ($_POST['accion'])
            {
                
                case "agregarFCE":
                    
                    //creamos nuestro arreglo de datos que seran enviado a nuestro modelo
                    $data = array(
                        'rut' => $this->input->post('rut'),
                        'desc_breve' => $this->input->post('desc_breve'),
                        'vacunas' => $this->input->post('vacunas'),
                        'alergias' => $this->input->post('alergias'),
                        'medicamentos' => $this->input->post('medicamentos'),
                        'enfermedades' => $this->input->post('enfermedades'),
                        'accidentes' => $this->input->post('accidentes'),
                        'observaciones' => $this->input->post('observaciones'),
                        'idusuario' => $this->session->userdata('idusuario')
                    );
                    
                    //validar datos formulario.
                    $this->form_validation->set_rules("rut", 'rut', 'required|trim|min_length[9]|max_length[30]|xss_clean');
                    
                    //validar errores.
                    if ($this->form_validation->run() == FALSE)
                      {
                        //mostrar error en la vista.
                        echo "error_paciente";
                        
                      }
                    else //no hay errores de validaciones.
                      {
                        
                        //cargar modelo fichas clinicas.
                        $this->load->model('ficha_clinica');
                        //ingresar encabezado ficha clinica.
                        $res = $this->ficha_clinica->crearFichaClinica($data);
                        //validar ingreso ficha clinica
                        
                        if ($res == "error")
                          {
                            
                            //esto sirve para mostrar el error en la vista,no es necesario volver al controlador
                            $this->session->set_flashdata('error_transaccion_fce', '>>> Por algun motivo no se pudo hacer el proceso. Por favor vuelva a intantar.');
                            echo "error";
                            
                            
                          }
                        else
                          {
                            
                            //crear una sesión flashdata 
                            $this->session->set_flashdata('transaccion_correcta_fce', '>>> Ficha clinica ingresada correctamente. ¡¡.');
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
            
          }
        else
          {
            //
            redirect(base_url() . 'login');
          }
      }
    
    /************************************************************************************************/
    /* Funcion Ficha Clinica Profesionl  (no se esta utilizando)*/
    /************************************************************************************************/
    public function ficha_clinica()
      {
        
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
          {
            
            $idusername                = $this->session->userdata('idusuario');
            $data['datos_profesional'] = $this->datos_profesional->datosProfesional($idusername);
            $data['perfil']            = $this->session->userdata('perfil');
            $data['username']          = $this->session->userdata('username');
            $data['institucion']       = $this->session->userdata('institucion');
            $data['titulo']            = 'Ficha Clinica';
            $data["profesional"]       = ucwords($data['datos_profesional']->primer_nombre) . " " . ucwords($data['datos_profesional']->apellido_paterno);
            $data['imagen_prof']       = $data['datos_profesional']->imagen;
            
            
            $this->load->view('componentes/header.php', $data);
            $this->load->view('componentes/navbar.php');
            $this->load->view('componentes/sidebar.php');
            $this->load->view('profesional/ficha_clinica.php');
            $this->load->view('componentes/modal.php');
            $this->load->view('componentes/footer.php');
            
          }
        else
          {
            
            redirect(base_url() . 'login/logout');
          }
      }
    
    /************************************************************************************************/
    /* Historias Clinicas (no se esta utilizando)*/
    /************************************************************************************************/
    function historiasClinicas()
      {
        if ($this->session->userdata('idperfil') == 2 && $this->session->userdata('is_logued_in') == TRUE)
          {
            
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
    /* Recepcion de Datos Via JSON(no se esta utilizando)*/
    /************************************************************************************************/
    public function jsonMedicamentos()
      {
        
        echo $this->ficha_clinica->listadoMedicamentos();
        
      }
    
    public function jsonVacunas()
      {
        
        echo $this->ficha_clinica->listadoVacunas();
      }
    
    public function jsonAlergias()
      {
        
        echo $this->ficha_clinica->listadoAlergias();
      }
    
    public function jsonEnfermedades()
      {
        
        echo $this->ficha_clinica->listadoEnfermedades();
      }
    
    public function jsonAccidente()
      {
        
        echo $this->ficha_clinica->listadoAccidentes();
      }
    
  }
/************************************************************************************************/
/* Fin Controlador Profesional */
/************************************************************************************************/
  
  