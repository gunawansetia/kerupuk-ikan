<?php

class Dashboard_admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert 
            alert-danger alert-dismissible fade show" 
            role="alert">
            Anda Belum Masuk!
            <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('auth/login');
        }
    }
    public function index()
    {
      $data['total_barang'] = $this->model_dashboard->hitungJumlahBarang();
      $data['total_inventori'] = $this->model_dashboard->hitungJumlahInventori();
      $data['total_pelanggan'] = $this->model_dashboard->hitungPelanggan();
      $data['total_pesanan'] = $this->model_dashboard->hitungPesanan();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}