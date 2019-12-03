<?php

class Toko extends CI_Controller
{
    public function index()
    {
        $data['judul']= 'apl'; 
        $data['toko']= $this->Toko_model->getAllToko(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 
        $data['transaksiDetil']= $this->Transaksi_detil_model->getAllTransaksiDetil(); 
        $data['jenisLaundry']= $this->Jenis_laundry_model->getAllJenisLaundry(); 
        $data['totalPakaian']= $this->Transaksi_detil_model->getTotalPakaian(); 
        $data['totalHarga']= $this->Transaksi_detil_model->getTotalHarga(); 

        $this->grocery_crud->set_theme('datatables');
        $this->grocery_crud->set_table('transaksi_detil'); 
        $this->grocery_crud->set_subject('Transaksi_detil'); 
        $data['output']= $this->grocery_crud->render();  

        $this->load->view('beranda', $data); 
    }

    public function edit() 
    {
        $data['judul']= 'apl'; 
        $data['toko']= $this->Toko_model->getAllToko(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 
        $data['transaksiDetil']= $this->Transaksi_detil_model->getAllTransaksiDetil(); 
        $data['jenisLaundry']= $this->Jenis_laundry_model->getAllJenisLaundry(); 
        $data['totalPakaian']= $this->Transaksi_detil_model->getTotalPakaian(); 
        $data['totalHarga']= $this->Transaksi_detil_model->getTotalHarga(); 

        $nama= $_POST['namaToko']; 
        $alamat= $_POST['alamatToko'];  
        $telp= $_POST['telpToko'];  

        $this->form_validation->set_rules('namaToko', 'namaToko', 'required|trim');
        $this->form_validation->set_rules('alamatToko', 'alamatToko', 'required|trim');
        $this->form_validation->set_rules('telpToko', 'telpToko', 'required|trim');

        if ($this->form_validation->run() == false) 
        {
			redirect('/', 'refresh'); 
        }
        else 
        {
            $this->Toko_model->update($nama, $alamat, $telp); 

            redirect('/', 'refresh'); 
		}
    }
}
