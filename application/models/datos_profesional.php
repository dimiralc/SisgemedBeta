<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos_profesional extends CI_Model {
	function __construct(){
		parent:: __construct();
        $this->load->database();
	}
    
	function datosProfesional($idprofesional){
        
        //cargamos los datos del profesional
        $this->db->select([
            'p.id_profesional',
            'p.id_usuario',
            'p.id_perfil_profesional',
            'p.rut',
            'p.primer_nombre',
            'p.segundo_nombre',
            'p.apellido_paterno',
            'p.apellido_materno',
            'p.imagen']);
        $this->db->from('profesionales p');
        $this->db->join('usuarios u', 'u.id_usuario = p.id_usuario');
        $this->db->where('p.id_usuario',$idprofesional);
        $datos_profesional = $this->db->get();
        
        if ($datos_profesional->num_rows() > 0)
        {
            return $datos_profesional->row();

        }else{
            //esto sirve para mostrar el error en la vista,no es necesario volver al controlador
            $this->session->set_flashdata('usuario_incorrecto','Error al cargar datos del profesional.');
            redirect(base_url().'login','refresh');
        }
	}


}

?>