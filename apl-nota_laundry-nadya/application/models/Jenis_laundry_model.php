<?php

class Jenis_laundry_model extends CI_model
{
    public function getAllJenisLaundry()
    {
        return $this->db->get('jenis_laundry')->result_array();
    }
}