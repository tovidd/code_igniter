<?php

class Transaksi_detil_model extends CI_model
{
    public function getAllTransaksiDetil()
    {
        return $this->db->get('transaksi_detil')->result_array();
    }

    public function saveTransaksiDetil()
    {
        $data = [
            'nama_item' => $this->input->post('namaItem'),
            'jumlah_item' => $this->input->post('jumlahItem'),
            'harga_item' => $this->input->post('hargaItem'),
            'subtotal_item' => (int)$this->input->post('jumlahItem')*(double)$this->input->post('hargaItem'),
        ];

		$this->db->insert('transaksi_detil', $data);
    }

    public function getTotal()
    {
        $this->db->select_sum('subtotal_item');
        $result = $this->db->get('transaksi_detil')->row(); 
        
        return $result->subtotal_item;
    }

    public function deleteTransaksiDetil($id_transaksi_detil)
    {
        $this->db->delete('transaksi_detil', ['id_transaksi_detil' => $id_transaksi_detil]);
    }
}