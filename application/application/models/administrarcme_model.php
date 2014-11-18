<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdministrarCME_model extends CI_Model {

    function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    function ingresarConsultaBase($data) {
        date_default_timezone_set("Chile/Continental");
        $fecha = strftime("%Y-%m-%d-%H-%M-%S", time());
        $this->db->insert(
                'tbl_consulta_medica', array(
            'fecha_consulta' => $fecha,
            'nro_historia_clinica' => $data['nroHistoriaClinica'],
            'motivo_consulta' => $data['motivoConsulta'],
            'anamnesis_proxima' => $data['anamnesisProxima'],
            'hipotesis_diagnostica' => $data['diagnosticoPreliminar']));
    }

    function ingresarAntecedentesMorbidos($data) {
        $this->db->insert(
                '', array(
            'nombre' => $data[''],
            'tipo' => $data[''],
            'fecha' => $data[''],
            'diagnostico' => $data['']));
    }

    function ingresarAntecedentesGinecoobstetricos($data) {
        $this->db->insert(
                '', array(
            'id_consulta' => $data[''],
            'id_consulta' => $data[''],
            'gestas' => $data[''],
            'partos' => $data[''],
            'abortos' => $data[''],
            'vivos' => $data[''],
            'muertos' => $data[''],
            'menarquia' => $data[''],
            'menopausia' => $data[''],
            'fur' => $data[''],
            'metodo_anticonceptivo' => $data[''],
            'sintomas' => $data[''],
            'observaciones' => $data['']));
    }

    function ingresarHabitos($data) {
        $this->db->insert(
                '', array(
            'id_tipo_habito' => $data[''],
            'id_consulta' => $data[''],
            'descripcion' => $data[''],
            'fecha_ingreso' => $data['']));
    }

    function ingresarMedicamentos($data) {
        $this->db->insert(
                '', array(
            'id_consulta' => $data[''],
            'id_med' => $data[''],
            'fecha_inicio' => $data[''],
            'fecha_fin' => $data[''],
            'duracion' => $data[''],
            'indicaciones' => $data['']));
    }

    function ingresarAlergias($data) {
        $this->db->insert(
                '', array(
            'id_alergia' => $data[''],
            'alergia' => $data[''],
            'id_consulta' => $data[''],
            'fecha_ingreso' => $data[''],
            'descripcion' => $data['']));
    }

    function ingresarAntecedentesSP($data) {
        $this->db->insert(
                '', array('id_ant_social' => $data[''],
            'id_consulta' => $data[''],
            'ant_social' => $data['']));
    }

    function ingresarAntecedentesFamiliares($data) {
        $this->db->insert(
                '', array(
            'id_consulta' => $data[''],
            'ant_familiar' => $data['']));
    }

    function ingresarInmunizaciones($data) {
        $this->db->insert(
                '', array(
            'id_consulta' => $data[''],
            'id_inmunizacion' => $data[''],
            'fecha_ingreso' => $data[''],
            'otras_inmunizaciones' => $data[''],
            'observaciones' => $data['']));
    }

    // Desde aqui faltan tablas

    function ingresarSintomasGenerales($data) {
        $this->db->insert(
                'tbl_rev_general', array('id_rev_general' => $data[''],
            'sintomas_detectados' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data[''],
            'id_consulta' => $data['']
        ));
    }

    function ingresarSintomasRespiratorio($data) {
        $this->db->insert(
                'tbl_rev_respiratorio', array('id_rev_respiratorio' => $data[''],
            'sintomas_detectados' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data[''],
            'id_consulta' => $data['']
        ));
    }

    function ingresarSintomasCardiovascular($data) {
        $this->db->insert(
                'tbl_rev_cardiovascular', array('id_rev_cardiovascular' => $data[''],
            'sintomas_detectados' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data[''],
            'id_consulta' => $data['']
        ));
    }

    function ingresarSintomasGastrointestinal($data) {
        $this->db->insert(
                'tbl_rev_gastrointestinal', array('id_rev_gastrointestinal' => $data[''],
            'id_consulta' => $data[''],
            'sintomas_detectados' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarSintomasGenitourinario($data) {
        $this->db->insert(
                'tbl_rev_genitourinario', array('id_rev_genitourinario' => $data[''],
            'id_consulta' => $data[''],
            'sintomas_detectados' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarSintomasNeurologico($data) {
        $this->db->insert(
                'tbl_rev_neurologico', array('id_rev_neurologico' => $data[''],
            'id_consulta' => $data[''],
            'sintomas_detectados' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarSintomasEndocrino($data) {
        $this->db->insert(
                'tbl_rev_endocrino', array('id_rev_endocrino' => $data[''],
            'id_consulta' => $data[''],
            'sintomas_detectados' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenPosicion($data) {
        $this->db->insert(
                'tbl_efg_decubito', array('id_efg_decubito' => $data[''],
            'id_consulta' => $data[''],
            'descripcion_posicion' => $data[''],
            'descripcion_decubito' => $data[''],
            'archivo' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenDeambulacion($data) {
        $this->db->insert(
                'tbl_efg_deambulacion', array('id_efg_deambulacion' => $data[''],
            'id_consulta' => $data[''],
            'trastornos_detectados' => $data[''],
            'comentario' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenFacie($data) {
        $this->db->insert(
                'tbl_efg_facie', array('id_efg_facie' => $data[''],
            'id_consulta' => $data[''],
            'trastorno_detectado' => $data[''],
            'comentario' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenConciencia($data) {
        $this->db->insert(
                'tbl_efg_conciencia', array('id_efg_conciencia' => $data[''],
            'id_consulta' => $data[''],
            'orientacion_tiempo' => $data[''],
            'orientacion_espacio' => $data[''],
            'reconocimiento_personas' => $data[''],
            'nivel_conciencia' => $data[''],
            'comentarios' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenConstitucion($data) {
        $this->db->insert(
                'tbl_efg_constitucion', array('id_efg_constitucion' => $data[''],
            'id_consulta' => $data[''],
            'tipo_constitucion' => $data[''],
            'peso' => $data[''],
            'altura' => $data[''],
            'imc' => $data[''],
            'archivo' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenPiel($data) {
        $this->db->insert(
                'tbl_efg_piel', array('id_efg_piel' => $data[''],
            'id_consulta' => $data[''],
            'color' => $data[''],
            'humedad' => $data[''],
            'untuosidad' => $data[''],
            'turgor' => $data[''],
            'elasticidad' => $data[''],
            'temperatura' => $data[''],
            'trastorno_detectado' => $data[''],
            'comentario' => $data[''],
            'archivo' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modifacion' => $data['']
        ));
    }

    function ingresarExamenLinfatico($data) {
        $this->db->insert(
                'tbl_efg_linfatico', array('id_efg_linfatico' => $data[''],
            'id_consulta' => $data[''],
            'adenopatia' => $data[''],
            'cometarios' => $data[''],
            'archivo' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenRespiracion($data) {
        $this->db->insert(
                'tbl_efg_respiratorio', array('id_efg_respiratorio' => $data[''],
            'rpm' => $data[''],
            'archivo' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data[''],
            'id_consulta' => $data['']
        ));
    }

    function ingresarExamenTemperatura($data) {
        $this->db->insert(
                'tbl_efg_temperatura', array('id_efg_temperatura' => $data[''],
            'id_consulta' => $data[''],
            'grados_celcius' => $data[''],
            'archivo' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function ingresarExamenPP($data) {
        $this->db->insert(
                'tbl_efg_presion_pulso', array('id_efg_presion_pulso' => $data[''],
            'id_consulta' => $data[''],
            'presion' => $data[''],
            'pulso' => $data[''],
            'archivo' => $data[''],
            'izq_carotideo' => $data[''],
            'izq_braquial' => $data[''],
            'izq_radial' => $data[''],
            'izq_femoral' => $data[''],
            'izq_poplitea' => $data[''],
            'izq_tibial' => $data[''],
            'izq_pedia' => $data[''],
            'der_carotideo' => $data[''],
            'der_braquial' => $data[''],
            'der_radial' => $data[''],
            'der_femoral' => $data[''],
            'der_poplitea' => $data[''],
            'der_tibial' => $data[''],
            'der_pedio' => $data[''],
            'modificado_por' => $data[''],
            'fecha_modificacion' => $data['']
        ));
    }

    function getInmunizacionesInfancia() {
        $this->db->select(['i.inmunizacion']);
        $this->db->from('tbl_inmunizaciones i');
        $this->db->where('id_tipo_inmunizacion', '1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getInmunizacionesAdultez() {
        $this->db->select(['i.inmunizacion']);
        $this->db->from('tbl_inmunizaciones i');
        $this->db->where('id_tipo_inmunizacion', '2');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasGinecoobstetricos() {
        $this->db->select(['g.descripcion']);
        $this->db->from('tbl_sintomas_ginecoobstetricos g');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasGenerales() {
        $this->db->select(['g.descripcion_sintoma_general']);
        $this->db->from('tbl_sintomas_generales g');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasRespiratorio() {
        $this->db->select(['r.descripcion_sintoma']);
        $this->db->from('tbl_sintomas_respiratorio r');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasCardiovascular() {
        $this->db->select(['c.descripcion_sintoma']);
        $this->db->from('tbl_sintomas_cardiovasculares c');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasGastrointestinal() {
        $this->db->select(['g.descripcion']);
        $this->db->from('tbl_sintomas_gastrointestinales g');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasGenitourinarios() {
        $this->db->select(['g.descripcion']);
        $this->db->from('tbl_sintomas_genitales g');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasNeurologicos() {
        $this->db->select(['n.descripcion']);
        $this->db->from('tbl_sintomas_neurologicos n');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getSintomasEndocrinos() {
        $this->db->select(['e.descripcion']);
        $this->db->from('tbl_sintomas_endocrinos e');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    function getSintomasDeambulacion() {
        $this->db->select(['d.descripcion']);
        $this->db->from('tbl_sintomas_deambulacion d');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    function getSintomasFacie() {
        $this->db->select(['f.descripcion']);
        $this->db->from('tbl_sintomas_facie f');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    function getSintomasPiel() {
        $this->db->select(['p.descripcion']);
        $this->db->from('tbl_sintomas_piel p');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

}
