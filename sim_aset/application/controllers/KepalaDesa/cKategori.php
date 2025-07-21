<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cKategori extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load model jika diperlukan
        // $this->load->model('mKategori');
    }

    public function index() {
        $data['title'] = 'Data Kategori';
        
        // Contoh data statis (ganti dengan data dari database)
        $data['kategori'] = [
            ['id' => 1, 'kode_kategori' => 'KTG001', 'nama_kategori' => 'Elektronik', 'keterangan' => 'Perangkat elektronik'],
            ['id' => 2, 'kode_kategori' => 'KTG002', 'nama_kategori' => 'Furniture', 'keterangan' => 'Perabot kantor']
        ];
        
        $this->load->view('KepalaDesa/Layout/head', $data);
        $this->load->view('KepalaDesa/Layout/aside');
        $this->load->view('KepalaDesa/Kategori/vKategori', $data);
        $this->load->view('KepalaDesa/Layout/footer');
    }
}
