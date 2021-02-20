<?php

class model_invoice extends CI_Model{
    public function index()
    {
         date_default_timezone_set('Asia/Jakarta');
         $nama  = $this->input->post('nama');
         $alamat  = $this->input->post('alamat');
         $nomor_hp  = $this->input->post('nomor_hp');
         $jasa_kirim  = $this->input->post('jasa_kirim');
         $bank  = $this->input->post('bank');
         
         $invoice = array (
             'nama' => $nama,
             'alamat'   => $alamat,
             'nomor_hp'   => $nomor_hp,
             'jasa_kirim'   => $jasa_kirim,
             'bank'   => $bank,
             'tgl_pesan'    => date('Y-m-d H:i:s'),
             'batas_bayar'  => date('Y-m-d H:i:s', mktime(date('H'), 
                    date('i'),date('s'),date('m'), date('d') + 1,date(
                        'Y'))),
        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id_invoice'    =>  $id_invoice,
                'id_barang'     =>  $item['id'],
                'nama_barang'   =>  $item['name'],
                'jumlah'        =>  $item['qty'],
                'harga'         =>  $item['price'],
            );
            $this->db->insert('tb_pesanan', $data);
        } 

        return TRUE;

    }

    public function tampil_data()
    {
        $result = $this->db->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1
        )->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->row();
        }else {
            return false; 
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get
        ('tb_pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false; 
        }
    }
}