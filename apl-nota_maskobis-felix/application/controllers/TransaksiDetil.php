<?php

class TransaksiDetil extends CI_Controller
{

    public function index()
    {
        //
    }

    public function save()
    {
        $data['judul']= 'apl-ku'; 
        $data['toko']= $this->Toko_model->getAllToko(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 
        $data['transaksiDetil']= $this->Transaksi_detil_model->getAllTransaksiDetil(); 


        $nama= $_POST['namaItem']; 
        $jumlah= $_POST['jumlahItem']; 
        $harga= $_POST['hargaItem']; 

        $this->form_validation->set_rules('namaItem', 'namaItem', 'required|trim');
        $this->form_validation->set_rules('jumlahItem', 'jumlahItem', 'required|trim|numeric');
        $this->form_validation->set_rules('hargaItem', 'hargaItem', 'required|trim|numeric');

        if ($this->form_validation->run() == false) 
        {
			redirect('/', 'refresh'); 
        }
        else 
        {
            $this->Transaksi_detil_model->saveTransaksiDetil(); 
            $this->Transaksi_model->update((double)$this->Transaksi_detil_model->getTotal(), (double)$this->Transaksi_detil_model->getTotal()); 

            redirect('/', 'refresh'); 
		}
    }

    public function delete($id_transaksi_detil)
    {
        $this->Transaksi_detil_model->deleteTransaksiDetil($id_transaksi_detil);
        $this->Transaksi_model->update((double)$this->Transaksi_detil_model->getTotal(), (double)$this->Transaksi_detil_model->getTotal()); 

        redirect('/', 'refresh'); 
    }
}
