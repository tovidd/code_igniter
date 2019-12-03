<?php

class Transaksi_detil_model extends CI_model
{
    public function getAllTransaksiDetil()
    {
        // return $this->db->get('transaksi_detil')->result_array(); 

        $this->db->select('transaksi_detil.*, jenis_laundry.nama, jenis_laundry.harga');
        $this->db->from('transaksi_detil');
        $this->db->join('jenis_laundry', 'jenis_laundry.id_jenis_laundry = transaksi_detil.id_jenis_laundry','left');
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function saveTransaksiDetil()
    {
        $this->db->select('*');
        $this->db->from('jenis_laundry');
        $this->db->where('id_jenis_laundry',  $this->input->post('jenisLaundry')); 
        $harga= $this->db->get()->row()->harga; 

        $data= [
            'id_jenis_laundry' => $this->input->post('jenisLaundry'),
            'jumlah_laundry' => $this->input->post('jumlahLaundry'), 
            'subtotal' => (int)$this->input->post('jumlahLaundry')*(double)$harga,
        ];

		$this->db->insert('transaksi_detil', $data);
    }

    public function getTotalHarga()
    {
        $this->db->select_sum('subtotal');
        $result = $this->db->get('transaksi_detil')->row(); 
        
        return $result->subtotal;
    }

    public function getTotalPakaian()
    {
        $this->db->select_sum('jumlah_laundry');
        $result = $this->db->get('transaksi_detil')->row(); 
        
        return $result->jumlah_laundry;
    }

    public function deleteTransaksiDetil($id_transaksi_detil)
    {
        $this->db->delete('transaksi_detil', ['id_transaksi_detil' => $id_transaksi_detil]);
    }

    public function referensi()
    {
        // https://www.bladephp.co/left-join-query-in-codeigniter
    }
}