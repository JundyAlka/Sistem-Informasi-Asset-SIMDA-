<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPengajuan');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pengajuan',
            'pengajuan' => $this->mPengajuan->select()
        ];
        
        // Load view
        $this->load->view('KepalaDesa/Layout/head', $data);
        $this->load->view('KepalaDesa/Layout/aside');
        $this->load->view('KepalaDesa/vPengajuan', $data);
        $this->load->view('KepalaDesa/Layout/footer');
    }
}
