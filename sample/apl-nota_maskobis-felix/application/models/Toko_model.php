<?php

class Toko_model extends CI_model
{
    public function getAllToko()
    {
        return $this->db->get('toko')->result_array();
    }

    public function update($nama, $alamat)
    {
        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
        ];

        $this->db->where('id_toko', 1);
        $this->db->update('toko', $data);
    }
}