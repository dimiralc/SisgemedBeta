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
            'id_paciente'   => $data["rut"], 
            'desc_breve'    => $data["desc_breve"], 
            'vacunas'       => $data["vacunas"],
            'alergias'      => $data["alergias"],
            'medicamentos'  => $data["medicamentos"],
            'enfermedades'  => $data["enfermedades"],
            'accidentes'    => $data["accidentes"],
            'observaciones' => $data["observaciones"],
            'creado_por'    => $data["idusuario"],
            'fecha_creacion'=> date('Y-m-d H:i:s'))
         );
        //obtenemos el id de la ficha clinica recien ingresada
        $id_ficha_clinica = $this->db->insert_id();
        //verificar error en la transaccion. 
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
    
    //retorna un json con el listado de los medicamentos
    function listadoMedicamentos(){
       
        $this->db->select(['id','nombre']);
        $this->db->from('medicamentos');
        $medicamentos = $this->db->get();
        
        foreach($medicamentos->result() as $row){
            
            $results[] = array('value' => (int)$row->id,'text'=>$row->nombre);
        }
        
        return json_encode($results);
        
    }
    
    //retorna un json con el listado de las vacunas.
    function listadoVacunas(){
       
        $this->db->select(['id','nombre']);
        $this->db->from('vacunas');
        $vacunas = $this->db->get();
        
        foreach($vacunas->result() as $row){
            
            $results[] = array('value' => (int)$row->id,'text'=>$row->nombre);
        }
        
        return json_encode($results);
        
    }
    //retorna un json con el listado de las alergias.
    function listadoAlergias(){
        
        $this->db->select(['id','nombre']);
        $this->db->from('alergias');
        $alergias = $this->db->get();
        
        foreach($alergias->result() as $row){
            
            $results[] = array('value' => (int)$row->id,'text'=>$row->nombre);
        }
        
        return json_encode($results);
    }
    //retorna un json con el listado de las enfermedades/patologias.
    function listadoEnfermedades(){
        
        $this->db->select(['id','nombre']);
        $this->db->from('patologias');
        $enfermedades = $this->db->get();
        
        foreach($enfermedades->result() as $row){
            
            $results[] = array('value' => (int)$row->id,'text'=>$row->nombre);
        }
        
        return json_encode($results);
    }
    //retorna un json con el listado de los accidentes.
    function listadoAccidentes(){
        
        $this->db->select(['id','nombre']);
        $this->db->from('accidentes');
        $accidentes = $this->db->get();
        
        foreach($accidentes->result() as $row){
            
            $results[] = array('value' => (int)$row->id,'text'=>$row->nombre);
        }
        
        return json_encode($results);
    }

}

?>