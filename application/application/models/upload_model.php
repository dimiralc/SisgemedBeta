<?phpif (!defined('BASEPATH'))    exit('No direct script access allowed');class Upload_model extends CI_Model {    public function construct() {        parent::__construct();    }        //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA    function subir($titulo)    {        $data = array(            'imagen' => $titulo,                    );       return $this->db->insert('tbl_pacientes', $data);    }}