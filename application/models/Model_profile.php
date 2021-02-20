<?php

class Model_profile extends CI_Model{

    public function edit_profile($where,$table){
            return $this->db->get_where($table,$where);
        }

        
        public function profile()
        {
            if($this->session->userdata('username')){
            return $this->db->get_where("tb_pelanggan",array(
                'username' => $this->session->userdata('username')));
            }
                
        }    

        public function data_original(){
            return $this->db->get_where("barangs",array(
                'variasi' => 'original'));
        }

            
}
