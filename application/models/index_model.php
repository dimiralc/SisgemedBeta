<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
        
    function getCantidadPacientes(){
        $query= $this->db->count_all_results('tbl_pacientes');
        return $query;
    }    
}