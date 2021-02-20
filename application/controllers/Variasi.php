<?php

class Variasi extends CI_Controller{
    public function manis()
    {
        $data['manis'] = $this->model_variasi->data_manis()
            ->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('manis',$data);
        $this->load->view('templates/footer');
    }

    public function original()
    {
        $data['original'] = $this->model_variasi->data_original()
            ->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('original',$data);
        $this->load->view('templates/footer');
    }

    public function  manis_pedas()
    {
        $data['manis_pedas'] = $this->model_variasi->data_manis_pedas()
            ->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('manis_pedas',$data);
        $this->load->view('templates/footer');
    }

    public function pedas_sedikit()
    {
        $data['pedas_sedikit'] = $this->model_variasi->data_pedas_sedikit()
            ->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pedas_sedikit',$data);
        $this->load->view('templates/footer');
    }
}