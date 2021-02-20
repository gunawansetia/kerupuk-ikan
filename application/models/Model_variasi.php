<?php

class model_variasi extends CI_Model{
    public function data_manis(){
        return $this->db->get_where("barangs",array(
            'variasi' => 'manis'));
    }

    public function data_original(){
        return $this->db->get_where("barangs",array(
            'variasi' => 'original'));
    }

    public function data_manis_pedas(){
        return $this->db->get_where("barangs",array(
            'variasi' => 'manis pedas'));
    }

    public function data_pedas_sedikit(){
        return $this->db->get_where("barangs",array(
            'variasi' => 'pedas sedikit'));
    }
}