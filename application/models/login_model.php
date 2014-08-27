<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** Como vemos comprobamos si existe algún usuario en la tabla usuarios con esos datos, 
 en caso afirmativo devolvemos la fila con los datos de ese usuario, 
 en otro caso creamos una sesión flashdata y redirigimos al login mostrando el mensaje de dicha sesión, 
 que como sabemos este tipo de sesiones desaparecen la próxima vez que actualicemos la página.
 */
class Login_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listar_instituciones(){
        
        //creamos array para las instituciones
        $data = array();
        //valor por defecto del select instituciones
        $data['']='Seleccione una institución';
        //cargamos todas las instituciones del sistema
        $this->db->select(['i.id_institucion','i.nom_institucion']);
        $this->db->from('instituciones i');
        $this->db->order_by("i.nom_institucion", "asc");
        $instituciones = $this->db->get();
        
        foreach($instituciones->result() as $row){
            // agregamos datos a nuestro array
            $data[$row->id_institucion] = ucwords($row->nom_institucion);  
        }
        return $data;
    }
    
    public function login_user($username,$password,$institucion)
    {
    /* SELECT u.id_usuario,u.username, u.password, u.id_perfil, u.id_institucion ,p.perfil 
     * FROM usuarios u INNER JOIN perfiles p ON p.id_perfil = u.id_perfil 
       WHERE u.username ="c.vidal" AND u.password ="d033e22ae348aeb5660fc2140aec35850c4da997" AND u.id_institucion=2;*/

        $this->db->select([
            'u.id_usuario',
            'u.username',
            'u.password',
            'u.id_perfil',
            'u.id_institucion',
            'u.fecha_creacion',
            'i.nom_institucion',
            'p.perfil']);
        $this->db->from('usuarios u');
        $this->db->join('perfiles p', 'p.id_perfil = u.id_perfil');
        $this->db->join('instituciones i', 'i.id_institucion = u.id_institucion');
        $this->db->where('u.username', $username);
        $this->db->where('u.password', $password);
        $this->db->where('u.id_institucion', (int)$institucion); 
        $query = $this->db->get();
        
        if ($query->num_rows() > 0)
        {
            return $query->row();

        }else{
            //esto sirve para mostrar el error en la vista,no es necesario volver al controlador
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
            redirect(base_url().'login','refresh');
        }
        
        /*$sql='SELECT
        u.idusuario,
        u.username,
        u.password,
        p.idperfil,
        u.id_institucion
        p.perfil
        FROM usuarios u
        INNER JOIN perfiles p ON p.idperfil = u.idperfil
        WHERE u.username ="'.$username.'" AND u.password ="'.$password.'" AND u.id_institucion='.$institucion.'';        
        echo $sql;exit();*/
    }
}