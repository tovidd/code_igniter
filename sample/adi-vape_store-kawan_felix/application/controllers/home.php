<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul']= 'Home'; 
        $data['barang']= $this->Barang_model->getAllBarang(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 

        if($this->session->userdata('username') == null)
        {
            $this->session->set_userdata('username', null);
        }
        $this->load->view('home', $data); 
    }

    public function shop()
    {
        $data['judul']= 'Shop'; 
        $data['barang']= $this->Barang_model->getAllBarang(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 

        $this->load->view('shop', $data); 
    }

    public function about()
    {
        $data['judul']= 'Shop'; 
        $data['barang']= $this->Barang_model->getAllBarang(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 

        $this->load->view('about', $data); 
    }

    public function login() 
    {
        $uname= $_POST['username']; 
        $pass= $_POST['password'];  

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) 
        {
            $this->session->set_userdata('username', null);
            redirect('/Home/index'); 
        }
        else 
        {
            if($this->Pelanggan_model->login() != null) 
            {
                $this->session->set_userdata('username', $this->Pelanggan_model->login()); 
            
                redirect('/Home/index'); 
            }
            else
            {
                $this->session->set_userdata('username', null);
                redirect('/Home/index'); 
            }
		}
    }

    public function signup()
    {
        $uname= $_POST['username']; 
        $pass= $_POST['password']; 

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) 
        {
            redirect('/', 'refresh'); 
        }
        else 
        {
            $this->Pelanggan_model->signup();  

            redirect('/', 'refresh');  
		}
    }

    public function logout() 
    {
        $this->session->set_userdata('username', null);
        
        redirect('/Home'); 
    }

    public function buy($id_barang)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang',  $id_barang); 
        $harga= $this->db->get()->row()->harga; 

        $data= [
            'id_pelanggan' => $this->session->userdata('username')->id_pelanggan,
            'id_barang' => $id_barang,
            'subtotal' => (double)$harga,
        ];

        $this->db->insert('transaksi', $data);
        redirect('/');
    }

    public function unbuy($id_transaksi)
    {
        $this->Transaksi_model->deleteTransaksi($id_transaksi);

        redirect('/', 'refresh'); 
    }

}