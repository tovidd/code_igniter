<?php

class Toko extends CI_Controller
{
    public function index()
    {
        $this->load->model('Toko_model');
        $this->load->model('Transaksi_model');
        $this->load->model('Transaksi_detil_model');

        $data['judul']= 'apl-ku'; 
        $data['toko']= $this->Toko_model->getAllToko(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 
        $data['transaksiDetil']= $this->Transaksi_detil_model->getAllTransaksiDetil(); 

        $this->grocery_crud->set_theme('datatables');
        $this->grocery_crud->set_table('transaksi_detil'); 
        $this->grocery_crud->set_subject('Transaksi_detil'); 
        $data['output']= $this->grocery_crud->render();  

        $this->load->view('beranda', $data); 
    }

    public function edit() 
    {
        $this->load->model('Toko_model');
        $this->load->model('Transaksi_model');
        $this->load->model('Transaksi_detil_model');

        $data['judul']= 'apl-ku'; 
        $data['toko']= $this->Toko_model->getAllToko(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 
        $data['transaksiDetil']= $this->Transaksi_detil_model->getAllTransaksiDetil(); 

        $nama= $_POST['namaToko']; 
        $alamat= $_POST['alamatToko'];  

        $this->form_validation->set_rules('namaToko', 'namaToko', 'required|trim');
        $this->form_validation->set_rules('alamatToko', 'alamatToko', 'required|trim');

        if ($this->form_validation->run() == false) 
        {
			redirect('/', 'refresh'); 
        }
        else 
        {
            $this->Toko_model->update($nama, $alamat); 

            redirect('/', 'refresh'); 
		}
    }
}

