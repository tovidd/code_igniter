<?php

class Transaksi_model extends CI_model
{
    public function getAllTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function update($total, $bayar)
    {
        $data = [
            'total' => $total,
            'bayar' => $bayar,
        ];

        $this->db->where('id_transaksi', 1);
        $this->db->update('transaksi', $data);
    }
}