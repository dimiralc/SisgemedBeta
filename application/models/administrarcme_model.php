<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdministrarCME_model extends CI_Model {
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
        
        function ingresarConsultaBase($data){
            date_default_timezone_set("Chile/Continental");
            $fecha=strftime( "%Y-%m-%d-%H-%M-%S", time() );
            $this->db->insert(
                    'tbl_consulta_medica',
                    array(
                        'fecha_consulta' => $fecha, 
                        'nro_historia_clinica' => $data['nroHistoriaClinica'], 
                        'motivo_consulta' => $data['motivoConsulta'], 
                        'anamnesis_proxima'=> $data['anamnesisProxima'], 
                        'hipotesis_diagnostica' => $data['diagnosticoPreliminar']));
        }
        
        function ingresarAntecedentesMorbidos($data){
            $this->db->insert(
                    '',
                    array(
                        'nombre'=>$data[''],
                        'tipo'=>$data[''],
                        'fecha'=>$data[''],
                        'diagnostico'=>$data['']));
        }
        
        function ingresarAntecedentesGinecoobstetricos($data){
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
        
        function ingresarHabitos($data){
            $this->db->insert(
                    '',
                    array(
                        'id_tipo_habito'=>$data[''],
                        'id_consulta'=>$data[''],
                        'descripcion'=>$data[''],
                        'fecha_ingreso'=>$data['']));
        }
        
        function ingresarMedicamentos($data){
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
        
        function ingresarAlergias($data){
            $this->db->insert(
                    '',
                    array(
                        'id_alergia'=>$data[''],
                        'alergia'=>$data[''],
                        'id_consulta'=>$data[''],
                        'fecha_ingreso'=>$data[''],
                        'descripcion'=>$data['']));
        }
        
        function ingresarAntecedentesSP($data){
            $this->db->insert(
                    '',
                    array('id_ant_social'=>$data[''],
                        'id_consulta'=>$data[''],
                        'ant_social'=>$data['']));
        }
        
        function ingresarAntecedentesFamiliares($data){
            $this->db->insert(
                    '',
                    array(
                        'id_consulta'=>$data[''],
                        'ant_familiar'=>$data['']));
        }
        
        function ingresarInmunizaciones($data){
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
        
        function ingresarSintomasGenerales($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasRespiratorio($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasCardiovascular($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasGastrointestinal($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasGenitourinario($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasNeurologico($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarSintomasEndocrino($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenPosicion($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenDeambulacion($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenFacie($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenConciencia($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenConstitucion($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenPiel($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenLinfatico($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenRespiracion($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenTemperatura($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        function ingresarExamenPP($data){
            $this->db->insert(
                    '',
                    array());
        }
        
        
        
        


}

?>