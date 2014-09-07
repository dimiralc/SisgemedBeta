<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ficha_clinica extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
    //crear ficha clinica
    public function crearFichaClinica($data){
        
        //obtener fecha-hora segun zona horaria
        date_default_timezone_set('America/Santiago');
        //iniciar transaccion
        $this->db->trans_begin();
        //ingresar encabezado ficha clinica
        $this->db->insert('fichas_clinicas',array(
            'id_paciente'    => $data["rut"], 
			'desc_breve'     => $data["desc_breve"], 
			'observaciones'  => $data["observaciones"],
            'creado_por'     => $data["idusuario"],
			'fecha_creacion' => date('Y-m-d H:i:s'))
         );
        //obtenemos el id de la ficha clinica recien ingresada
        $id_ficha_clinica = $this->db->insert_id();
        //ingresar vacunas 
        $this->ingresarVacunas($data["vacunas"],$id_ficha_clinica);
        //ingresar alergias
        $this->ingresarAlergias($data["alergias"],$id_ficha_clinica);
        //ingresar medicamentos
        $this->ingresarMedicamentos($data["medicamentos"],$id_ficha_clinica);
        //ingresar enfermedades
        $this->ingresarEnfermedades($data["enfermedades"],$id_ficha_clinica);
        //ingresar accidentes
        $this->ingresarAccidentes($data["accidentes"],$id_ficha_clinica);
        //verificar errores en la transaccion
        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            return "error";
        }
        else
        {
            //realizar el ingreso de la ficha clinica
            $this->db->trans_commit();
            return $id_ficha_clinica;
        }

    }
    
    function ingresarVacunas($arr_vacunas,$id_fce){
        
        foreach ($arr_vacunas as $vacuna) {
            //validar vacuna
            if($vacuna !="" && $vacuna !=0){
            //realizar insert de las vacunas ingresadas
            $this->db->insert('fce_vacunas', 
            array('id_ficha_clinica'=>$id_fce,'id_vacuna'=>$vacuna));
            }
        }
    }
    function ingresarAlergias($arr_alergias,$id_fce){
        
       foreach ($arr_alergias as $alergia) {
            //validar alergia
            if($alergia !="" && $alergia !=0){
            //realizar insert de las alergias ingresadas
            $this->db->insert('fce_alergias', 
            array('id_ficha_clinica'=>$id_fce,
                'id_alergia'=>$alergia));
            }
        }
    }
    function ingresarMedicamentos($arr_medicamentos,$id_fce){
        
        foreach ($arr_medicamentos as $medicamento) {
            //realizar insert de los medicamentos ingresados
            if($medicamento !="" && $medicamento!= 0 ){
                //realizar insert de los medicamentos ingresados
                $this->db->insert(
                'fce_medicamentos', 
                array('id_ficha_clinica'=>$id_fce, 
                    'id_medicamento'=>$medicamento
                ));
            }
        }
    }
    function ingresarEnfermedades($arr_enfermedades,$id_fce){
        
        foreach ($arr_enfermedades as $enfermedad) {
            //realizar insert de las enfermedades ingresadas
            if($enfermedad !="" && $enfermedad != 0){
                //realizar insert de las emfermedades ingresadas
                $this->db->insert(
                'fce_enfermedades', 
                array('id_ficha_clinica'=>$id_fce,
                    'id_enfermedad'=>$enfermedad 
                ));
            }
       }
    }
    function ingresarAccidentes($arr_accidentes,$id_fce){
        
        foreach ($arr_accidentes as $accidente) {
            //realizar insert de los accidentes ingresados
            if($accidente !=""){
                //realizar insert de los accidentes ingresados
                $this->db->insert(
                'fce_accidentes', 
                array('id_ficha_clinica'=>$id_fce, 
                    'accidente'=>$accidente 
                ));
            }
        }
    }

}

?>