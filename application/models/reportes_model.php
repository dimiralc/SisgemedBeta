<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/************************************************************************************************/
/**
 * @Model: Reportes PDF
 * @Fecha Creacion: 21-10-2014
 * @Autor: Cristian Vidal 
 */
/************************************************************************************************/
class Reportes_model extends CI_Model {
	function __construct(){
		parent:: __construct();
        //cargamos la base de datos
		$this->load->database();
	}
    
    /************************************************************************************************/
    /* @Funcion que retorna la informacion de la empresa segun su ID                                                               */
    /************************************************************************************************/
    function datosInstitucion($id){
        
        //Cargamos los datos de la institucion       
        $this->db->select([
            'i.id_institucion',
            'i.rut',
            'i.razon_social',
            'i.nom_institucion',
            'i.direccion',
            'i.telefono1',
            'i.correo'
        ]);
        
        $this->db->from('tbl_instituciones i');
        $this->db->where('i.id_institucion',$id);
        $institucion = $this->db->get();
        
        if ($institucion->num_rows() > 0)
        {
            return $institucion->row();

        }else{
            
           echo "Error: Error al cargar los datos de la institucion :/";exit();
           // redirect(base_url().'login','refresh');
        }
    }
    
    /************************************************************************************************/
    /* @Funcion que retorna la cantidad de pacientes segun institucion                              */
    /************************************************************************************************/
    function cantidadPacientes($id){
        
        //Cargamos listado de pacientes     
        $this->db->select([
            'p.id_paciente',
            'p.id_usuario',
            'p.rut',
            'p.primer_nombre',
            'p.segundo_nombre',
            'p.apellido_paterno',
            'p.apellido_materno',
            'p.telefono',
            'p.correo',
            'p.fecha_nacimiento'
        ]);
        $this->db->from('tbl_pacientes p');
        $this->db->join('tbl_usuarios u','p.id_usuario = u.id_usuario');
        $this->db->join('tbl_instituciones i','u.id_institucion = i.id_institucion');
        $this->db->where('u.id_institucion',$id);
        $cant_pacientes = $this->db->get();
        return $cant_pacientes->num_rows();
    }
    
    /************************************************************************************************/
    /* @Funcion que retorna la cantidad de hce segun institucion                                    */
    /************************************************************************************************/
    function cantidadHce($id){
        
        //Cargamos listado de pacientes     
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
        INNER JOIN tbl_usuarios u 		ON u.id_usuario = p.id_usuario
        INNER JOIN tbl_instituciones i 	ON i.id_institucion = u.id_institucion
        WHERE i.id_institucion = '.$id.'
        GROUP BY h.id_historia_medica
        ORDER BY ultimoControl DESC'
        );
        //$query = $query->db->get();
        return $query->num_rows();
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la cantidad de consultas medicas
     ********************************************************************************/
    function cantidadConsultasMedicas($id){
        
        //Cargamos listado de consultas medicas    
        $this->db->select([
            'c.id_consulta',
            'c.fecha_consulta',
            'c.nro_historia_clinica',
            'h.id_paciente',
            'p.rut',
            'c.motivo_consulta',
            'c.anamnesis_proxima',
            'c.hipotesis_diagnostica',
        ]);
        
        $this->db->from('tbl_consulta_medica c');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_pacientes p','h.id_paciente = p.id_paciente');
        $this->db->join('tbl_usuarios u','u.id_usuario = p.id_usuario');
        $this->db->join('tbl_instituciones i','i.id_institucion = u.id_institucion');
        $this->db->where('i.id_institucion',$id);
        $this->db->order_by("c.fecha_consulta","desc");
        $list_consultas = $this->db->get();
        return $list_consultas->num_rows();
    }
    
    
     /************************************************************************************************/
    /* @Funcion que retorna listado de pacientes segun institutcion                                                               */
    /************************************************************************************************/
    function listadoPacientesInstitucion($id){
        
        //Cargamos listado de pacientes     
        $this->db->select([
            'p.id_paciente',
            'p.id_usuario',
            'p.rut',
            'p.primer_nombre',
            'p.segundo_nombre',
            'p.apellido_paterno',
            'p.apellido_materno',
            'p.telefono',
            'p.correo',
            'p.fecha_nacimiento'
        ]);
        
        $this->db->from('tbl_pacientes p');
        $this->db->join('tbl_usuarios u','p.id_usuario = u.id_usuario');
        $this->db->join('tbl_instituciones i','u.id_institucion = i.id_institucion');
        $this->db->where('u.id_institucion',$id);
        
        $pacientes = $this->db->get();
        if ($pacientes->num_rows() > 0)
        {
            return $pacientes;

        }else{
            
           return false;
           // redirect(base_url().'login','refresh');
        }
    }
    
    
    /************************************************************************************************/
    /* @Funcion que retorna listado de hce segun institutcion                                                               */
    /************************************************************************************************/
    function listadoHce($id){
        
        //Cargamos listado de hce     
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
        INNER JOIN tbl_usuarios u 		ON u.id_usuario = p.id_usuario
        INNER JOIN tbl_instituciones i 	ON i.id_institucion = u.id_institucion
        WHERE i.id_institucion = '.$id.'
        GROUP BY h.id_historia_medica
        ORDER BY ultimoControl DESC');
        
        if ($query->num_rows() > 0)
        {
            return $query;

        }else{
            
           return false;
           // redirect(base_url().'login','refresh');
        }
    }
    
    
    
    /************************************************************************************************/
    /* @Funcion que retorna listado de consultas medicas                                            */
    /************************************************************************************************/
    function listadoConsultasMedicas($id){
        
        //Cargamos listado de consultas medicas    
         $this->db->select([
            'c.id_consulta',
            'c.fecha_consulta',
            'c.nro_historia_clinica',
            'h.id_paciente',
            'p.rut',
            'c.motivo_consulta',
            'c.anamnesis_proxima',
            'c.hipotesis_diagnostica',
        ]);
        
        $this->db->from('tbl_consulta_medica c');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_pacientes p','h.id_paciente = p.id_paciente');
        $this->db->join('tbl_usuarios u','u.id_usuario = p.id_usuario');
        $this->db->join('tbl_instituciones i','i.id_institucion = u.id_institucion');
        $this->db->where('i.id_institucion',$id);
        $this->db->order_by("c.fecha_consulta","desc");
        $list_consultas = $this->db->get();
        
        if ($list_consultas->num_rows() > 0)
        {
            return $list_consultas;

        }else{
            
           return false;
        }
    }
    
    /**************************************************************************************/
    /** @Funcion que permite retornar la informacion personal del paciente segun su RUT
    **************************************************************************************/
    function datosFiliatoriosPaciente($rut){
        
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
        $this->db->where('p.rut',$rut);
        $datos_paciente = $this->db->get();
        
        if ($datos_paciente->num_rows() > 0)
        {
            return $datos_paciente->row();

        }else{
            
           echo "Error: El Rut ingresado no pertenece a ningun paciente registrado en el sistema, por favor <br>"
            . "ingrese al nuevo paciente al sistema.";exit();
           // redirect(base_url().'login','refresh');
        }
    }
    
    
    /*******************************************************************************************/
    /** @Funcion que permite retornar la informacion de #antecedentes sociales y personalaes#
    ********************************************************************************************/
    function antSocialesPersonales($rut){     
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
        $this->db->join('tbl_pacientes p','p.id_paciente = h.id_paciente');
        $this->db->where('p.rut',$rut);
        
        $datos_ant_soc_per = $this->db->get();
        
        if ($datos_ant_soc_per->num_rows() > 0)
        {
            return $datos_ant_soc_per->row();

        }else{
            
            return "false";
           //echo "Error: Problemas al cargar los antecedentes Sociales del paciente.";exit();
           // redirect(base_url().'login','refresh');
        }
        
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de #antecedente familiares#
     ********************************************************************************/
    function ant_familiares($rut){
       
        $this->db->select([
            'a.id_ant_familiares',
            'h.id_paciente',
            'a.ant_familiar'
        ]);
        
        $this->db->from('tbl_ant_familiares a');
        $this->db->join('tbl_consulta_medica c','a.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_pacientes p','p.id_paciente = h.id_paciente');
        $this->db->where('p.rut',$rut);
        
        $ant_familiares = $this->db->get();
        
        if ($ant_familiares->num_rows() > 0)
        {
            return $ant_familiares->row();

        }else{
            return "false";
           //echo "Error: Problemas al cargar los antecedentes Familiares del paciente.";exit();
           // redirect(base_url().'login','refresh');
        }
    }
    
    /********************************************************************************
     * @Funcion que permite retornar la informacion de #personas de contacto#
     ********************************************************************************/
    function ant_personas_contacto($rut){
       
        $this->db->select([
            'p.id_persona_contacto',
            'p.id_paciente',
            'pac.rut',
            'p.nombres',
            'p.apellidos',
            'p.parentesco',
            'p.telefono',
            'p.correo',
        ]);
        
        $this->db->from('tbl_personas_contacto p');
        $this->db->join('tbl_pacientes pac','p.id_paciente = pac.id_paciente');
        $this->db->where('pac.rut',$rut);
        $this->db->order_by("p.id_persona_contacto","desc"); 
        
        $ant_contactos = $this->db->get();
        if ($ant_contactos->num_rows() > 0)
        {
            return $ant_contactos;

        }else{
            
           return false;
        }        
    }
    
    /********************************************************************************
    * @Funcion que permite retornar la informacion de #antecedentes morbidos#
    ********************************************************************************/
    function ant_morbidos($rut){
        
        $this->db->select([
            'm.id_ant_morbido',
            'h.id_paciente',
            'p.rut',
            'p.primer_nombre',
            'p.segundo_nombre',
            'p.apellido_paterno',
            'p.apellido_materno',
            'm.nombre',
            'm.tipo',
            'm.fecha',
            'm.diagnostico'
            ]);
        $this->db->from('tbl_ant_morbidos m');
        $this->db->join('tbl_consulta_medica c','m.id_consulta = c.id_consulta');
        $this->db->join('tbl_historia_medica h','c.nro_historia_clinica = h.id_historia_medica');
        $this->db->join('tbl_pacientes p','p.id_paciente = h.id_paciente');
        $this->db->where('p.rut',$rut);
        $this->db->order_by("m.fecha","desc");
        $ant_morb = $this->db->get();
        
        if ($ant_morb->num_rows() > 0)
        {
            return $ant_morb;

        }else{
            
           return false;
        }        
    }
   
    
    /********************************************************************************
    * @Funcion que permite retornar la informacion de #antecedentes habitos#
    ********************************************************************************/
    function ant_habitos($rut){
        
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
        $this->db->join('tbl_pacientes p','p.id_paciente = hm.id_paciente');
        $this->db->where('p.rut',$rut);
        $this->db->order_by("h.fecha_ingreso","desc");
        $ant_habitos = $this->db->get();
        
        if ($ant_habitos->num_rows() > 0)
        {
            return $ant_habitos;

        }else{
            
           return false;
        }        
    }
    
    
    /********************************************************************************
    * @Funcion que permite retornar la informacion de #antecedentes medicamento#
    ********************************************************************************/
    function ant_medicamentos($rut){
        
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
        $this->db->join('tbl_pacientes p','p.id_paciente = h.id_paciente');
        $this->db->where('p.rut',$rut);
        $this->db->order_by("m.fecha_inicio","desc"); 
        $this->db->order_by("m.fecha_fin","desc"); 
        $ant_med = $this->db->get();
        
        if ($ant_med->num_rows() > 0)
        {
            return $ant_med;

        }else{
            
           return false;
        }        
    }
    
    
    /********************************************************************************
    * @Funcion que permite retornar la informacion de #antecedentes alergias#
    ********************************************************************************/
    function ant_alergias($rut){
        
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
        $this->db->join('tbl_pacientes p','p.id_paciente = h.id_paciente');
        $this->db->where('p.rut',$rut);
        $this->db->order_by("a.fecha_ingreso","desc");
        $ant_alergias = $this->db->get();
        
        if ($ant_alergias->num_rows() > 0)
        {
            return $ant_alergias;

        }else{
            
           return false;
        }        
    }
    
    
    /********************************************************************************
    * @Funcion que permite retornar la informacion de #antecedentes inmunizaciones#
    ********************************************************************************/
    function ant_inmunizaciones($rut){
        
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
        $this->db->join('tbl_pacientes p','p.id_paciente = h.id_paciente');
        $this->db->where('p.rut',$rut);
        $this->db->order_by("i.fecha_ingreso","desc");
        $ant_inmuno = $this->db->get();
        
        if ($ant_inmuno->num_rows() > 0)
        {
            return $ant_inmuno;

        }else{
            
           return false;
        }        
    }
}

?>