<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos_administrador extends CI_Model {
	function __construct(){
		parent:: __construct();
        $this->load->database();
	}
    
	function datosAdministrador($idusuario){
        
        //cargamos los datos del administrador
        
        $this->db->select([
            'a.id_administrador',
            'a.id_usuario',
            'a.rut',
            'a.primer_nombre',
            'a.segundo_nombre',
            'a.apellido_paterno',
            'a.apellido_materno',
            'a.telefono',
            'a.direccion',
            'a.correo',
            'a.sexo',
            'a.fecha_nacimiento',
            'a.imagen']);
        $this->db->from('administradores a');
        $this->db->join('usuarios u', 'u.id_usuario = a.id_usuario');
        $this->db->where('a.id_usuario',$idusuario);
        $datos_admin = $this->db->get();
        
        if ($datos_admin->num_rows() > 0)
        {
            return $datos_admin->row();

        }else{
            //esto sirve para mostrar el error en la vista,no es necesario volver al controlador
            $this->session->set_flashdata('usuario_incorrecto','Error al cargar datos del administrador.');
            redirect(base_url().'login','refresh');
        }
	}


}

?>
