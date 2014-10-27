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
    
    /******************************************************************************************/
    /** @Funcion que permite retornar la informacion sobre las
     *  HISTORIAS CLINICAS RECIENTES
    /******************************************************************************************/
    function hce_recientes(){     
       
        /* Cargamos todas las historias medicas recientes, junto con los datos del paciente
         * y la fecha de la ultima consulta medica realizada.*/
        
        $query = $this->db->query('SELECT 
        h.id_historia_medica,
        h.id_paciente,
        c.id_consulta,
        p.rut,
        CONCAT(p.primer_nombre," ",p.segundo_nombre) AS nombres,
        CONCAT(p.apellido_paterno," ",p.apellido_materno) AS apellidos,
        (SELECT MAX(fecha_consulta) FROM tbl_consulta_medica WHERE nro_historia_clinica = h.id_historia_medica) 
        as ultimoControl,
        h.datos
        FROM tbl_historia_medica h
        LEFT JOIN tbl_consulta_medica c ON c.nro_historia_clinica = h.id_historia_medica
        INNER JOIN tbl_pacientes p      ON p.id_paciente = h.id_paciente
        GROUP BY h.id_historia_medica');
        
        $results=[];
        foreach($query->result() as $row){
            
            //Seteamos las variables que sean NULL
            $id_consulta = (int)$row->id_consulta == NULL  ? "" : (int)$row->id_consulta;
            $ultimo_control = $row->ultimoControl == NULL  ? "No existen Consultas Med." : $row->ultimoControl;
            
            $results[] = array(
                'id_historia_medica'  =>(int)$row->id_historia_medica,
                'id_paciente'         =>(int)$row->id_paciente,
                'id_consulta'         =>$id_consulta,
                'rut'                 =>$row->rut,
                'nombres'             =>$row->nombres,
                'apellidos'           =>$row->apellidos,
                'ultimoControl'       =>$ultimo_control,
                'url'                =>'<a href="'.base_url().'historiaMedica/paciente/'.$row->id_paciente.'">Ver Historia Clínica</a>',
            );
        }
        
        return json_encode($results); exit();
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
            
           echo "Error: El paciente no tiene HCE registrada en el sistema.";exit();
           // redirect(base_url().'login','refresh');
        }
    }
    
    /*******************************************************************************************/
    /** @Funcion que permite retornar la informacion de #antecedentes sociales y personalaes# 
     * en del paciente segun su ID en formato JSON 
    ********************************************************************************************/
    function antSocialesPersonales($idpaciente){     
        //Cargamos los antecedentes sociales y personales del paciente     
        $this->db->select([
            'a.id_ant_social',
            'h.id_paciente',
            //'CONCAT(p.primer_nombre," ",p.segundo_nombre," ",p.apellido_paterno," ",p.apellido_materno) AS nombre',
            'a.ant_social'
        ]);
        $this->db->from('tbl_ant_sociales a');
        $this->db->join('tbl_consulta_medica c','a.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->where('h.id_paciente',$idpaciente);
        $datos_ant_soc_per = $this->db->get();
        
        $results=[];
        foreach($datos_ant_soc_per->result() as $row){
            
           
            $results[] = array(
                'id_ant_social'     =>(int)$row->id_ant_social,
                'id_paciente'       =>(int)$row->id_paciente,
                //'nombre'            => $row->nombre,
                'ant_social'        => $row->ant_social,
            );
        }
        
        return json_encode($results);
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de #antecedente familiares# en
     * formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_familiares($idpaciente){
       
        $this->db->select([
            'a.id_ant_familiares',
            'h.id_paciente',
            'a.ant_familiar'
            ]);
        $this->db->from('tbl_ant_familiares a');
        $this->db->join('tbl_consulta_medica c','a.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->where('h.id_paciente',$idpaciente);
        $ant_familiares = $this->db->get();
        
        $results=[];
        foreach($ant_familiares->result() as $row){
            
            $results[] = array(
                'id_ant_familiares' =>(int)$row->id_ant_familiares,
                'id_paciente'       =>(int)$row->id_paciente,
                'ant_familiar'      =>$row->ant_familiar,
            );
        }
        return json_encode($results);
    }
    
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de #personas de contacto# en
     * formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_personas_contacto($idpaciente){
       
        $this->db->select([
            'p.id_persona_contacto',
            'p.id_paciente',
            'p.nombres',
            'p.apellidos',
            'p.parentesco',
            'p.telefono',
            'p.correo',
            ]);
        $this->db->from('tbl_personas_contacto p');
        $this->db->join('tbl_pacientes pac','p.id_paciente = pac.id_paciente');
        $this->db->where('p.id_paciente',$idpaciente);
        $this->db->order_by("p.id_persona_contacto","desc"); 
        $ant_contactos = $this->db->get();
        
        $results=[];
        foreach($ant_contactos->result() as $row){
            
            $results[] = array(
                'id_persona_contacto'=>(int)$row->id_persona_contacto,
                'id_paciente'        =>(int)$row->id_paciente,
                'nombres'            =>$row->nombres,
                'apellidos'          =>$row->apellidos,
                'parentesco'         =>$row->parentesco,
                'telefono'           =>$row->telefono,
                'correo'             =>$row->correo,
            );
        }
        return json_encode($results);
    }
    
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de #antecedente morbidos# en
     * formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_morbidos($idpaciente){
       
        $this->db->select([
            'm.id_ant_morbido',
            'h.id_paciente',
            'm.nombre',
            'm.tipo',
            'm.fecha',
            'm.diagnostico'
            ]);
        $this->db->from('tbl_ant_morbidos m');
        $this->db->join('tbl_consulta_medica c','m.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->where('h.id_paciente',$idpaciente);
        $this->db->order_by("m.fecha","desc");
        $ant_morbidos = $this->db->get();
        $results=[];
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
                'id_ant_morbido'    =>(int)$row->id_ant_morbido,
                'id_paciente'       =>(int)$row->id_paciente,
                'nombre'            =>$row->nombre,
                'tipo'               =>$tipo_ant_morbido,
                'fecha'             =>$row->fecha,
                'diagnostico'       =>$row->diagnostico,
            );
        }
        return json_encode($results);
    }
    
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de #antecedentes ginecoobstétricos# 
     * en formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_gineco($idpaciente){
       
        $this->db->select([
            'g.id_ant_gineco',
            'h.id_paciente',
            'g.gestas',
            'g.partos',
            'g.abortos',
            'g.vivos',
            'g.muertos',
            'g.menarquia',
            'g.menopausia',
            'g.fur',
            'g.metodo_anticonceptivo',
            'g.sintomas',
            'g.observaciones'
            ]);
        $this->db->from('tbl_ant_ginecoobstetricos g');
        $this->db->join('tbl_consulta_medica c','g.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->where('h.id_paciente',$idpaciente); 
        $ant_gineco = $this->db->get();
        
        $results=[];
        foreach($ant_gineco->result() as $row){
            
            $results[] = array(
                'id_ant_gineco'        =>(int)$row->id_ant_gineco,
                'id_paciente'          =>(int)$row->id_paciente,
                'gestas'               =>(int)$row->gestas,
                'partos'               =>(int)$row->partos,
                'abortos'              =>(int)$row->abortos,
                'vivos'                =>(int)$row->vivos,
                'muertos'              =>(int)$row->muertos,
                'menarquia'            =>$row->menarquia,
                'menopausia'           =>$row->menopausia,
                'fur'                  =>$row->fur,
                'metodo_anticonceptivo'=>$row->metodo_anticonceptivo,
                'sintomas'             =>$row->sintomas,
                'observaciones'        =>$row->observaciones,
            );
        }
        return json_encode($results);
    }
    
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de # habitos # 
     * en formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_habitos($idpaciente){
       
        $this->db->select([
            'h.id_ant_habitos',
            'h.id_tipo_habito',
            'th.habito',
            'hm.id_paciente',
            'h.descripcion',
            'h.fecha_ingreso'
        ]);
        
        $this->db->from('tbl_ant_habitos h');
        $this->db->join('tbl_consulta_medica c','h.id_consulta = c.id_consulta');
        $this->db->join('tbl_tipos_habitos th','th.id_tipo_habito = h.id_tipo_habito');
        $this->db->join('tbl_historia_medica hm','c.nro_historia_clinica = hm.id_historia_medica');
        $this->db->where('hm.id_paciente',$idpaciente);
        $this->db->order_by("h.fecha_ingreso","desc"); 
        $ant_habitos = $this->db->get();
        
        $results=[];
        foreach($ant_habitos->result() as $row){
            
            $results[] = array(
                'id_ant_habitos'  =>(int)$row->id_ant_habitos,
                'id_tipo_habito'  =>(int)$row->id_tipo_habito,
                'habito'          =>$row->habito,
                'id_paciente'     =>(int)$row->id_paciente,
                'descripcion'     =>$row->descripcion,
                'fecha_ingreso'   =>$row->fecha_ingreso,
            );
        }
        return json_encode($results);
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de # medicamentos # 
     * en formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_medicamentos($idpaciente){
       
        $this->db->select([
            'm.id_ant_med',
            'h.id_paciente',
            'm.id_med',
            'med.nombre_medicamento',
            'm.fecha_inicio',
            'm.fecha_fin',
            'm.duracion',
            'm.indicaciones',
        ]);
        
        $this->db->from('tbl_ant_medicamentos m');
        $this->db->join('tbl_consulta_medica c','m.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_medicamentos med','m.id_med = med.cod_medicamento');
        $this->db->where('h.id_paciente',$idpaciente);
        $this->db->order_by("m.fecha_inicio","desc"); 
        $this->db->order_by("m.fecha_fin","desc"); 
        $ant_med = $this->db->get();
        
        $results=[];
        foreach($ant_med->result() as $row){
            
            $results[] = array(
                'id_ant_med'        =>(int)$row->id_ant_med,
                'id_paciente'       =>(int)$row->id_paciente,
                'id_med'            =>(int)$row->id_med,
                'nombre_medicamento'=>$row->nombre_medicamento,
                'fecha_incio'       =>$row->fecha_inicio,
                'fecha_fin'         =>$row->fecha_fin,
                'duracion'          =>$row->duracion." Días",
                'indicaciones'      =>$row->indicaciones,
            );
        }
        return json_encode($results);
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de # antecedentes alergias # 
     * en formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_alergias($idpaciente){
       
        $this->db->select([
            'a.id_ant_alergia',
            'a.id_alergia',
            'al.nombre_alergia',
            'a.alergia',
            'h.id_paciente',
            'a.fecha_ingreso',
            'a.descripcion',
        ]);
        
        $this->db->from('tbl_ant_alergias a');
        $this->db->join('tbl_consulta_medica c','a.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_alergias al','a.id_alergia = al.cod_alergia');
        $this->db->where('h.id_paciente',$idpaciente);
        $this->db->order_by("a.fecha_ingreso","desc");
        $ant_alergias = $this->db->get();
        
        $results=[];
        foreach($ant_alergias->result() as $row){
            
            $results[] = array(
                'id_ant_alergia'    =>(int)$row->id_ant_alergia,
                'id_alergia'        =>(int)$row->id_alergia,
                'id_paciente'       =>(int)$row->id_paciente,
                'tipo_alergia'      =>$row->nombre_alergia,
                'alergia'           =>$row->alergia,
                'fecha_ingreso'     =>$row->fecha_ingreso,
                'descripcion'       =>$row->descripcion,
            );
        }
        return json_encode($results);
    }
    
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de # inmunizaciones  # 
     * en formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_inmuno($idpaciente){
       
        $this->db->select([
            'i.id_ant_inmuno',
            'h.id_paciente',
            'i.id_inmunizacion',
            'i.id_inmunizacion',
            'ii.inmunizacion',
            'ii.id_tipo_inmunizacion',
            't.tipo_inmunizacion',
            'i.fecha_ingreso',
            'i.otras_inmunizaciones',
            'i.observaciones'
        ]);
        
        $this->db->from('tbl_ant_inmunizaciones i');
        $this->db->join('tbl_consulta_medica c','i.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_inmunizaciones ii','i.id_inmunizacion = ii.id_inmunizacion');
        $this->db->join('tbl_tipo_inmunizaciones t','ii.id_tipo_inmunizacion = t.id_tipo_inmunizacion');
        $this->db->where('h.id_paciente',$idpaciente);
        $this->db->order_by("i.fecha_ingreso","desc");
        $ant_inmuno = $this->db->get();
        
        $results=[];
        foreach($ant_inmuno->result() as $row){
            
            $results[] = array(
                'i.id_ant_inmuno'      =>(int)$row->id_ant_inmuno,
                'id_paciente'          =>(int)$row->id_paciente,
                'id_inmunizacion'      =>(int)$row->id_inmunizacion,
                'inmunizacion'         =>$row->inmunizacion,
                'id_tipo_inmunizacion' =>(int)$row->id_tipo_inmunizacion,
                'tipo_inmunizacion'    =>$row->tipo_inmunizacion,
                'fecha_ingreso'        =>$row->fecha_ingreso,
                'otras_inmunizaciones' =>$row->otras_inmunizaciones,
                'observaciones'        =>$row->observaciones,
            );
        }
        return json_encode($results);
    }
    
    
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de # consulta medica # 
     * en formato JSON segun ID paciente.
     ********************************************************************************/
    function ant_consultas_med($idpaciente){
       
        $this->db->select([
            'c.id_consulta',
            'c.fecha_consulta',
            'c.nro_historia_clinica',
            'h.id_paciente',
            'c.motivo_consulta',
            'c.anamnesis_proxima',
            'c.hipotesis_diagnostica',
        ]);
        
        $this->db->from('tbl_consulta_medica c');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_pacientes p','h.id_paciente = p.id_paciente');
        $this->db->where('h.id_paciente',$idpaciente);
        $this->db->order_by("c.fecha_consulta","desc");
        $ant_consultas = $this->db->get();
        
        $results=[];
        foreach($ant_consultas->result() as $row){
            
            $results[] = array(
                'id_consulta'      =>(int)$row->id_consulta,
                'id_historia_med'  =>(int)$row->nro_historia_clinica,
                'id_paciente'      =>(int)$row->id_paciente,
                'fecha_consulta'   =>$row->fecha_consulta,
                'motivo'           =>$row->motivo_consulta,
                'anamnesis'        =>$row->anamnesis_proxima,
                'hipotesis'        =>$row->hipotesis_diagnostica,
            );
        }
        return json_encode($results);
    }
}

?>