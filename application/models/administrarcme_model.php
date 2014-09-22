<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarCME_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
        
        function anadirCME($data){
            $this->db->insert(
                    'consultamedica',
                    array(
                        'nombre'=>$data['nombre'], 
                        'snombre'=>$data['snombre'],
                        'paterno'=>$data['paterno'],
                        'materno'=>$data['materno'],
                        'peso'=>$data['peso'],
                        'estatura'=>$data['estatura'],
                        'patologia'=>$data['patologia'],
                        'esalud'=>$data['estadoSalud'],
                        'habitos'=>$data['habitos'],
                        'examenes'=>$data['examenes'],
                        'medicamentos'=>$data['medicamentos'],
                        'reposo'=>$data['reposo'],
                        'especialidad'=>$data['especialidadSugerida'],
                        'cirugias'=>$data['cirugias'],
                        'fecha'=>$data['fechaControl'],
                        'observaciones'=>$data['observaciones'],
                        'diagnostico'=>$data['preliminar']));
        }


}

?>