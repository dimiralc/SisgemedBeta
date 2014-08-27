<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrarperfil_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
       
        function actualizarPerfil($data){
            $this->db->where('run', $data['run']);
            $this->db->update(
                    'profesionales',
                    array(
                                'run'=>$data['run'], 
                                'pnombre' =>$data['pnombre'],
                                'snombre' => $data['snombre'],
				'paterno' => $data['paterno'],
				'materno' => $data['materno'],
				'telefono' => $data['telefono'],
                                'fecnac' => $data['fecnac'],
                                'passactual' => $data['passactual'],
                                'passnueva' => $data['passnueva'],
				'direccion' => $data['direccion'],				
				'genero' => $data['genero'],
				'pais' =>$data['pais']                   
				)
                    );
        }
        
        function obtenerProfesional(){
            $query = $this->db->get('profesionales');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarProfesional($data){
            $this->db->where('rut', $data['run']);
            $query = $this->db->get('profesionales');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
}

?>