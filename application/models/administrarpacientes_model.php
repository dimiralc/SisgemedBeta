<?phpif (!defined('BASEPATH'))    exit('No direct script access allowed');class Administrarpacientes_model extends CI_Model {    function __construct() {        parent:: __construct();        $this->load->database();        $this->load->library('encrypt');        $this->load->library('parser');    }    public function anadirUsuario($data) {        $username = strtolower($data['nombres'] . '.' . $data['paterno']);        $caracteres = array(".", "-");        $password = str_replace($caracteres, "", $data['rut']);        $hash = $this->encrypt->sha1($password);        $query = $this->db                ->select()                ->from('tbl_pacientes')                ->where('rut', $data['rut'])                ->get();        if ($query->num_rows() > 0) {            echo 'Este paciente ya ha sido ingresado al sistema';            exit;        } else {            $this->db->insert(                    'tbl_usuarios', array(                'username' => $username,                'password' => $hash,                'id_perfil' => '3',                'id_institucion' => '1'            ));            $id_usuario = $this->db->insert_id();            if ($this->db->trans_status() === FALSE) {                $this->db->trans_rollback();                return "error";            } else {                //realizar el ingreso de la ficha clinica                $this->db->trans_commit();                return $id_usuario;            }        }    }    public function anadirHistoriaClinica($data) {        $query = $this->db                ->select('id_paciente')                ->from('tbl_pacientes')                ->where('rut', $data['rut'])                ->get();        if ($query->num_rows() > 0) {            foreach ($query->result() as $row) {  //Iterate through results                $idPaciente = $row->id_paciente;            }        }        $this->db->insert(                'tbl_historia_medica', array('id_paciente' => $idPaciente));    }    public function anadirPaciente($data) {        $query = $this->db                ->select('id_usuario')                ->from('tbl_usuarios')                ->where('username', strtolower($data['nombres'] . '.' . $data['paterno']))                ->get();        if ($query->num_rows() > 0) {            foreach ($query->result() as $row) {  //Iterate through results                $idUsuario = $row->id_usuario;            }        }        date_default_timezone_set('America/Santiago');        $fecha = strftime("%Y-%m-%d-%H-%M-%S", time());        $this->db->insert(                'tbl_pacientes', array('rut' => $data['rut'],            'primer_nombre' => $data['nombres'],            'id_usuario' => $idUsuario,            'segundo_nombre' => $data['snombre'],            'apellido_paterno' => $data['paterno'],            'apellido_materno' => $data['materno'],            'telefono' => $data['telefono'],            'direccion' => $data['direccion'],            'correo' => $data['mail'],            'sexo' => $data['genero'],            'id_estadocivil' => $data['ecivil'],            'id_prevision_medica' => $data['prevmedica'],            'id_nivel_estudio' => $data['nivelestudios'],            'fecha_nacimiento' => $data['fecnac'],            'lugar_nac' => '13',            'fecha_ingreso' => $fecha));    }    function actualizarPaciente($data) {        $this->db->where('rut', $data[run]);        $this->db->update(                'tbl_pacientes', array('rut' => $data['run'],            'nombre' => $data['nombre'],            'paterno' => $data['paterno'],            'materno' => $data['materno'],            'telefono' => $data['telefono'],            'direccion' => $data['direccion'],            'ecivil' => $data['ecivil'],            'genero' => $data['genero'],            'estudios' => $data['estudios'],            'enfermedades' => $data['enfermedades']));    }    function eliminarPaciente($data) {        $this->db->delete(                'tbl_pacientes', array('rut' => $data['runInfo']));    }    function obtenerPacientes() {        $query = $this->db->get('tbl_pacientes');        if ($query->num_rows() > 0) {            return $query;        } else {            return false;        }    }    function buscarPaciente($data) {        $consulta = "select p.* , "                . "hm.id_historia_medica from tbl_pacientes p, "                . "tbl_historia_medica hm where p.id_paciente = hm.id_paciente and p.rut= '$data'";        $query = $this->db->query($consulta);        $resp = $query->result();        if ($resp > 0) {            return json_encode($resp[0]);        } else {            return "Error";        }    }    function getProfesiones() {        $this->db->select(['*']);        $this->db->from('tbl_ocupaciones o');        $this->db->order_by("o.descripcion", "asc");        $query = $this->db->get();        if ($query->num_rows() > 0) {            return $query->result();        }    }        function getPaises(){        $this->db->select(['*']);        $this->db->from('tbl_nacionalidad n');        $this->db->order_by("n.nombre", "asc");        $query = $this->db->get();        if ($query->num_rows() > 0) {            return $query->result();        }    }        function getEstudios(){        $this->db->select(['*']);        $this->db->from('tbl_niveles_estudios e');        $this->db->order_by("e.nivel_estudio", "asc");        $query = $this->db->get();        if ($query->num_rows() > 0) {            return $query->result();                    }    }        function cantidadPacientes(){        return $this->db->count_all('tbl_historia_medica');            }}?>