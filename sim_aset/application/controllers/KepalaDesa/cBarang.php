<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cBarang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load model jika diperlukan
        // $this->load->model('mBarang');
    }

    public function index() {
        $data['title'] = 'Data Barang';
        
        // Contoh data statis (ganti dengan data dari database)
        $data['barang'] = [
            ['id' => 1, 'kode_barang' => 'BRG001', 'nama_barang' => 'Laptop', 'id_kategori' => 1, 'keterangan' => 'Laptop kantor'],
            ['id' => 2, 'kode_barang' => 'BRG002', 'nama_barang' => 'Meja Kerja', 'id_kategori' => 2, 'keterangan' => 'Meja kerja staff']
        ];
        
        $this->load->view('KepalaDesa/Layout/head', $data);
        $this->load->view('KepalaDesa/Layout/aside');
        $this->load->view('KepalaDesa/Barang/vBarang', $data);
        $this->load->view('KepalaDesa/Layout/footer');
    }
}
