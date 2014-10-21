<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/************************************************************************************************/
/**
 * @Model: historias medicas
 * @Fecha Creacion: 21-10-2014
 * @Autor: Cristian Vidal 
 */
/************************************************************************************************/
class Historia_medica_model extends CI_Model {
	function __construct(){
		parent:: __construct();
        //cargamos la base de datos
		$this->load->database();
	}
    
    /**************************************************************************************/
     /** @Funcion que permite retornar la informacion personal del paciente segun su ID
     **************************************************************************************/
    function datosPaciente($idpaciente){
        
        //Cargamos los datos personales del paciente        
        $this->db->select([
            'hm.id_historia_medica',
            'p.id_paciente',
            'p.id_usuario',
            'p.rut',
            'p.primer_nombre',
            'p.segundo_nombre',
            'p.apellido_paterno',
            'p.apellido_materno',
            'p.telefono',
            'p.direccion',
            'p.correo',
            'p.sexo',
            'e.estado_civil',
            'pm.prevision_medica',
            'n.nivel_estudio',
            'p.ocupacion',
            'p.imagen',
            'p.fecha_nacimiento',
            'lc.nom_region',
            'p.fecha_ingreso'
            ]);
        $this->db->from('tbl_pacientes p');
        $this->db->join('tbl_historia_medica hm','p.id_paciente = hm.id_paciente');
        $this->db->join('tbl_estado_civil e','e.id_estado_civil = p.id_estadocivil');
        $this->db->join('tbl_previsiones_medicas pm','pm.id_prevision_medica = p.id_prevision_medica');
        $this->db->join('tbl_niveles_estudios n','n.id_nivel_estudio = p.id_nivel_estudio');
        $this->db->join('tbl_regiones lc','lc.cod_region = p.lugar_nac');
        $this->db->where('p.id_paciente',$idpaciente);
        $datos_paciente = $this->db->get();
        
        if ($datos_paciente->num_rows() > 0)
        {
            return $datos_paciente->row();

        }else{
            
            //echo "error con los datos del paciente";exit;
            redirect(base_url().'login','refresh');
        }
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de antecedente familiares en
     * formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_familiares($idpaciente){
       
        $this->db->select([
            'af.id_ant_familiares',
            'af.id_paciente',
            'af.nombres',
            'af.apellidos',
            'af.rut',
            'af.parentesco',
            'af.enfermedades',
            'af.edad',
            'af.estado',
            'af.observaciones'
            ]);
        $this->db->from('tbl_ant_familiares af');
        $this->db->where('af.id_paciente',$idpaciente);
        $ant_familiares = $this->db->get();
        
        foreach($ant_familiares->result() as $row){
            
            //setear estado (vivo o muerto)
            $estado =  ($row->estado == 0)  ? "fallecido"  : "vivo";
            // concatenar nombre del familiar
            $nombre = $row->nombres." ".$row->apellidos;
            
            $results[] = array(
                'id_ant_familiares' => (int)$row->id_ant_familiares,
                'id_paciente'       =>$row->id_paciente,
                'nombre'            =>$nombre,
                'rut'               =>$row->rut,
                'parentesco'        =>$row->parentesco,
                'enfermedades'      =>$row->enfermedades,
                'edad'              =>$row->edad,
                'estado'            =>$estado,
                'observaciones'     =>$row->observaciones,
            );
        }
        return json_encode($results);
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de antecedente morbidos en
     * formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_morbidos($idpaciente){
       
        $this->db->select([
            'm.id_ant_morbido',
            'm.id_paciente',
            'm.nombre',
            'm.tipo',
            'm.fecha',
            'm.diagnostico'
            ]);
        $this->db->from('tbl_ant_morbidos m');
        $this->db->where('m.id_paciente',$idpaciente);
        $this->db->order_by("m.fecha","desc"); 
        $ant_morbidos = $this->db->get();
        
        foreach($ant_morbidos->result() as $row){
            
            //setear tipo antecedente morbido
            switch ($row->tipo) {
                case "E":
                    $tipo_ant_morbido="enfermedad";
                    break;
                case "O":
                    $tipo_ant_morbido="operacion";
                    break;
                case "T":
                    $tipo_ant_morbido="traumatismo";
                    break;
            }
            
            $results[] = array(
                'id_ant_morbido'    => (int)$row->id_ant_morbido,
                'id_paciente'       =>$row->id_paciente,
                'nombre'            =>$row->nombre,
                'tipo'               =>$tipo_ant_morbido,
                'fecha'             =>$row->fecha,
                'diagnostico'       =>$row->diagnostico,
            );
        }
        return json_encode($results);
    }
}

?>