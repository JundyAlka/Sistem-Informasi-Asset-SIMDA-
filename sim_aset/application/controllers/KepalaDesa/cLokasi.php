<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cLokasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load model jika diperlukan
        // $this->load->model('mLokasi');
    }

    public function index() {
        $data['title'] = 'Data Lokasi';
        
        // Contoh data statis (ganti dengan data dari database)
        $data['lokasi'] = [
            ['id' => 1, 'kode_lokasi' => 'LOK001', 'nama_lokasi' => 'Gedung A', 'keterangan' => 'Lantai 1'],
            ['id' => 2, 'kode_lokasi' => 'LOK002', 'nama_lokasi' => 'Gedung B', 'keterangan' => 'Lantai 2']
        ];
        
        $this->load->view('KepalaDesa/Layout/head', $data);
        $this->load->view('KepalaDesa/Layout/aside');
        $this->load->view('KepalaDesa/Lokasi/vLokasi', $data);
        $this->load->view('KepalaDesa/Layout/footer');
    }
}
