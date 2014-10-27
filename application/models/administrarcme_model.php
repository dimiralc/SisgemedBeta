<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarCME_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
        
        function ingresarConsultaBase($data){
            $this->db->insert(
                    'tbl_consulta_medica',
                    array(
                        'fecha_consulta' => date("l"), 
                        'nro_historia_clinica' => "1", 
                        'motivo_consulta' => $data['motivoConsulta'], 
                        'anamnesis_proxima'=> $data['anamnesisProxima'], 
                        'hipotesis_diagnostica' => $data['diagnosticoProeliminar']));
        }
        
        function ingresarAntecedentesMorbidos(){
            $this->db->insert(
                    '',
                    array(
                        'nombre'=>$data[''],
                        'tipo'=>$data[''],
                        'fecha'=>$data[''],
                        'diagnostico'=>$data['']));
        }
        
        function ingresarAntecedentesGinecoobstetricos(){
            $this->db->insert(
                    '',
                    array(
                        'id_consulta'=>$data[''],
                        'id_consulta'=>$data[''],
                        'gestas'=>$data[''],
                        'partos'=>$data[''],
                        'abortos'=>$data[''], 
                        'vivos'=>$data[''],
                        'muertos'=>$data[''],
                        'menarquia'=>$data[''],
                        'menopausia'=>$data[''],
                        'fur'=>$data[''], 
                        'metodo_anticonceptivo'=>$data[''], 
                        'sintomas'=>$data[''], 
                        'observaciones'=>$data['']));
        }
        
        function ingresarHabitos(){
            $this->db->insert(
                    '',
                    array(
                        'id_tipo_habito'=>$data[''],
                        'id_consulta'=>$data[''],
                        'descripcion'=>$data[''],
                        'fecha_ingreso'=>$data['']));
        }
        
        function ingresarMedicamentos(){
            $this->db->insert(
                    '',
                    array(
                        'id_consulta'=>$data[''],
                        'id_med'=>$data[''],
                        'fecha_inicio'=>$data[''], 
                        'fecha_fin'=>$data[''],
                        'duracion'=>$data[''],
                        'indicaciones'=>$data['']));
        }
        
        function ingresarAlergias(){
            $this->db->insert(
                    '',
                    array(
                        'id_alergia'=>$data[''],
                        'alergia'=>$data[''],
                        'id_consulta'=>$data[''],
                        'fecha_ingreso'=>$data[''],
                        'descripcion'=>$data['']));
        }
        
        function ingresarAntecedentesSP(){
            $this->db->insert(
                    '',
                    array('id_ant_social'=>$data[''],
                        'id_consulta'=>$data[''],
                        'ant_social'=>$data['']));
        }
        
        function ingresarAntecedentesFamiliares(){
            $this->db->insert(
                    '',
                    array(
                        'id_consulta'=>$data[''],
                        'ant_familiar'=>$data['']));
        }
        
        function ingresarInmunizaciones(){
            $this->db->insert(
                    '',
                    array(
                        'id_consulta'=>$data[''] ,
                        'id_inmunizacion'=>$data[''],
                        'fecha_ingreso'=>$data[''], 
                        'otras_inmunizaciones'=>$data[''],
                        'observaciones'=>$data['']));
        }
        
        // Desde aqui faltan tablas
        
        function ingresarSintomasGenerales(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasRespiratorio(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasCardiovascular(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasGastrointestinal(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasGenitourinario(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasNeurologico(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasEndocrino(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenPosicion(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenDeambulacion(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenFacie(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenConciencia(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenConstitucion(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenPiel(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenLinfatico(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenRespiracion(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenTemperatura(){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenPP(){
            $this->db->insert(
                    '',
                    array());
        }
        
        
        
        


}

?>