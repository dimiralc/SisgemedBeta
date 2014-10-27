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
                    array('id_ant_morbido' =>,
                        'id_paciente' =>,
                        'nombre'=>,
                        'tipo'=>,
                        'fecha'=>,
                        'diagnostico'=>));
        }
        
        function ingresarAntecedentesGinecoobstetricos(){
            $this->db->insert(
                    '',
                    array('id_ant_gineco'=>,
                        'id_consulta'=>,
                        'gestas'=>,
                        'partos'=>,
                        'abortos'=>, 
                        'vivos'=>,
                        'muertos'=>,
                        'menarquia'=>,
                        'menopausia'=>,
                        'fur'=>, 
                        'metodo_anticonceptivo'=>, 
                        'sintomas'=>, 
                        'observaciones'=>));
        }
        
        function ingresarHabitos(){
            $this->db->insert(
                    '',
                    array('id_ant_habitos'=>,
                        'id_tipo_habito'=>,
                        'id_consulta'=>,
                        'descripcion'=>,
                        'fecha_ingreso'=>));
        }
        
        function ingresarMedicamentos(){
            $this->db->insert(
                    '',
                    array('id_ant_med'=>,
                        'id_consulta'=>,
                        'id_med'=>,
                        'fecha_inicio'=>, 
                        'fecha_fin'=>,
                        'duracion'=>,
                        'indicaciones'=>));
        }
        
        function ingresarAlergias(){
            $this->db->insert(
                    '',
                    array('id_ant_alergia'=>,
                        'id_alergia'=>,
                        'alergia'=>,
                        'id_consulta'=>,
                        'fecha_ingreso'=>,
                        'descripcion'=>));
        }
        
        function ingresarAntecedentesSP(){
            $this->db->insert(
                    '',
                    array('id_ant_social'=>,
                        'id_consulta'=>,
                        'ant_social'=>));
        }
        
        function ingresarAntecedentesFamiliares(){
            $this->db->insert(
                    '',
                    array('id_ant_familiares'=>, 
                        'id_consulta'=>,
                        'ant_familiar'=>));
        }
        
        function ingresarInmunizaciones(){
            $this->db->insert(
                    '',
                    array('id_ant_inmuno'=>, 
                        'id_consulta'=>, 
                        'id_inmunizacion'=>,
                        'fecha_ingreso'=>, 
                        'otras_inmunizaciones'=>,
                        'observaciones'=>));
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