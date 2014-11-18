<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**  informacion sobre sessiones: http://escodeigniter.com/guia_usuario/libraries/sessions.html
  Como vemos, en la función index hacemos un switch para saber si existe la sesión perfil,
  y en ese caso saber que contiene para poder redirigir a cada usuario a la página correspondiente.
  A continuación con el método token creamos una nueva clave aleatoria que será la que contendrá nuestro
  formulario como veremos, de esta forma evitaremos el Cross-Site Request Forgery.
  Seguido tenemos la función encargada de primero validar los datos introducidos en el formulario y a
  continuación procesarlos contra la base de datos en busca de un registro, de eso se encargará el modelo
  como veremos más adelante, si ha encontrado un registro y sólo uno creara las sesiones y nos enviará a
  la función index, la cuál lo que hará será comprobar cuál es nuestra sesión perfil,
  y dependiendo de cuál sea nos redirigirá a la página correspondiente.

  Usuario c.vidal    	-> password  admin 		-> admin
  Usuario d.miranda   -> password  admin 		-> admin
  Usuario s.sanchez	-> password  editor     -> paciente
  Usuario c.perez 	-> password suscriptor  -> profesional
 * * */
class Login extends CI_Controller {

    public function __construct() {

        parent::__construct();
        //cargamos nuestro modelo
        $this->load->model('login_model');
        //es necesario configurar encryption_key
        $this->load->library(array('session', 'form_validation'));
        //cargamo helper relacionados con funciones para creacion de formularios y uso de url y direccionamientos
        $this->load->helper(array('url', 'form'));
        //cargamos nuestra base de datos
        $this->load->database('default');
    }

    public function index() {
        //variable la cual contiene la sesion de perfil
        $idperfil = $this->session->userdata('idperfil');

        switch ($idperfil) {

            //cargar pagina default
            case '': $this->_cargarPaginaLogin();
                break;

            //perfil administrador
            case 1: redirect(base_url() . 'administrador');
                break;

            //perfil paciente
            case 3: redirect(base_url() . 'paciente');
                break;

            //perfil profesional
            case 2: redirect(base_url() . 'profesional');
                break;

            default: $this->_cargarPaginaLogin();
        }
    }

    public function token() {

        $token = md5(uniqid(rand(), true)); // crear clave aleatoria de sesion
        $this->session->set_userdata('token', $token); //clave de sesion
        return $token; // retorna clave de sesion
    }

    public function _cargarPaginaLogin() {

        $data["titulo"] = "Acceso al Sistema"; //titulo de la pagin web
        $data["url_base"] = $this->config->base_url(); //url base de la pagina
        $data['token'] = $this->token(); //se crea clave de sesion
        $data["instituciones"] = $this->login_model->listar_instituciones();
        $this->load->view('login/inciar_sesion_view.php', $data);
    }

    public function inicio_sesion() {

        //recibimos los datos del formulario y sacamos los espacios en blanco y convertimos el texto a minuscula
        $v_token = $this->input->post('token');
        $v_user = $this->input->post('username');
        $v_pass = $this->input->post('password');
        $v_inst = $this->input->post('institucion');

        //comprabamos que exista el dato, en caso contrario sera ""
        $token_session = $this->session->userdata('token');
        $token = (isset($v_token)) ? trim($v_token) : "";
        $username = (isset($v_user)) ? trim(strtolower($v_user)) : "";
        $password = (isset($v_pass)) ? sha1(trim($v_pass)) : "";
        $institucion = (isset($v_inst)) ? (int) $v_inst : "";


        if ($token == $token_session) {
            //Validar los datos del formularios
            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[6]|max_length[30]|xss_clean');
            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[4]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('institucion', 'institucion', 'required|trim|min_length[1]|max_length[80]|xss_clean');
            //$this->form_validation->set_rules('perfil', 'perfil','required|trim|min_length[2]|max_length[80]|xss_clean');
            //Lanzamos mensajes de error si es que los hay
            if ($this->form_validation->run() == FALSE) {
                //Mostrar los errores en la vista
                $this->index();
            } else {
                //check usuario
                $check_user = $this->login_model->login_user($username, $password, $institucion);
                // si existe el usuario se crean su datos de sesion
                if ($check_user == TRUE) {
                    //creamos un arreglo con las variables de sesion.
                    $data = array(
                        'is_logued_in' => TRUE,
                        'idusuario' => $check_user->id_usuario,
                        'username' => $check_user->username,
                        'idperfil' => $check_user->id_perfil,
                        'perfil' => $check_user->perfil,
                        'fecha_creacion' => $check_user->fecha_creacion,
                        'idinstitucion' => $check_user->id_institucion,
                        'institucion' => $check_user->nom_institucion
                    );

                    //set_userdata() es usado para agregar información en la sesión, en este caso agregamos
                    // nuestro arreglo recien creado con lo datos del usuario.
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
        } else {

            redirect(base_url() . 'login', 'refresh');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . 'login', 'refresh');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */