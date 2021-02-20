<?php 

class Model_dashboard extends CI_Model{
    public function tampil_data(){
        return $this->db->get('barangs');
    }


    public function hitungJumlahBarang()
    {   
        $query = $this->db->get('barangs');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

    public function hitungJumlahInventori()
    {
        $this->db->select_sum('stok');
        $query = $this->db->get('barangs');
        if($query->num_rows()>0)
        {
            return $query->row()->stok;
        }
        else
        {
            return 0;
        }
    }

    public function hitungPelanggan()
    {

        $this->db->select('role_id');
        $this->db->where('role_id', '2');
        $query = $this->db->get('tb_pelanggan');
        if($query->num_rows()>0)
        {
            return $query->row()->role_id;
        }
        else
        {
            return 0;
        }
    }

    public function hitungPesanan()
    {
        
        $query = $this->db->get('tb_invoice');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
}
?>