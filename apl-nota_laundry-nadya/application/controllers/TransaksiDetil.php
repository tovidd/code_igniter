<?php

class TransaksiDetil extends CI_Controller
{

    public function index()
    {
        echo json_encode( $this->Transaksi_detil_model->getAllTransaksiDetil() );
    }

    public function save()
    {
        $data['judul']= 'apl-ku'; 
        $data['toko']= $this->Toko_model->getAllToko(); 
        $data['transaksi']= $this->Transaksi_model->getAllTransaksi(); 
        $data['transaksiDetil']= $this->Transaksi_detil_model->getAllTransaksiDetil(); 


        $id_jenis_laundry= (int)$_POST['jenisLaundry']; 
        $jumlah= $_POST['jumlahLaundry']; 

        $this->form_validation->set_rules('jenisLaundry', 'jenisLaundry', 'required|trim|numeric');
        $this->form_validation->set_rules('jumlahLaundry', 'jumlahLaundry', 'required|trim|numeric');

        if ($this->form_validation->run() == false) 
        {
            redirect('/', 'refresh'); 
            echo 'gagal';
        }
        else 
        {
            $this->Transaksi_detil_model->saveTransaksiDetil(); 
            $this->Transaksi_model->update((double)$this->Transaksi_detil_model->getTotalHarga(), (double)$this->Transaksi_detil_model->getTotalHarga()); 

            redirect('/', 'refresh');  
		}
    }

    public function delete($id_transaksi_detil)
    {
        $this->Transaksi_detil_model->deleteTransaksiDetil($id_transaksi_detil);
        $this->Transaksi_model->update((double)$this->Transaksi_detil_model->getTotalHarga(), (double)$this->Transaksi_detil_model->getTotalHarga()); 

        redirect('/', 'refresh'); 
    }
}
