<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarAlergias_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	function anadirAlergia($data){
		$this->db->insert(
			'alergias', 
			array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'alergeno'=>$data['alergeno'],
				'sintomatologia'=>$data['sintomatologia']));
	}
        
        function actualizarAlergia($data){
            $this->db->where('id', $data['id']);
            $this->db->update(
                    'alergias',
                    array('id'=>$data['id'], 
				'nombre'=>$data['nombre'], 
				'alergeno'=>$data['alergeno'],
				'sintomatologia'=>$data['sintomatologia']));
        }
        
        function eliminarAlergia($data){
            $this->db->delete(
                    'alergias',
                    array('id'=>$data['id']));
        }
        
        function obtenerAlergia(){
            $query = $this->db->get('alergias');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }
        
        function buscarAlergia($data){
            $this->db->where('id', $data['id']);
            $query = $this->db->get('alergias');            
            if($query->num_rows() > 0){
                return $query;
            }
            else {
                return false;
            }
        }

}

?>
