<?php

class Pelanggan_model extends CI_model
{
    public function login()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('username',  $this->input->post('username')); 
        $this->db->where('password',  $this->input->post('password')); 
        $data= $this->db->get()->row(); 
        if($data == 1)
        {
            return $data;
        }
        else
        {
            return null; 
        }
    }

    public function signup()
    {
        $data= [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'), 
        ];

        $this->db->insert('pelanggan', $data);
    }
}