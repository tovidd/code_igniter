<?php

class Transaksi_model extends CI_model
{
    public function getAllTransaksi()
    {
        $this->db->select('transaksi.*, barang.*');
        $this->db->from('transaksi');
        $this->db->join('barang', 'barang.id_barang = transaksi.id_barang','left');
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function deleteTransaksi($id_transaksi)
    {
        $this->db->delete('transaksi', ['id_transaksi' => $id_transaksi]);
    }
}