<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cMonitoring extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mMonitoring');
    }

    public function index()
    {
        $data = [
            'title' => 'Monitoring Asset',
            'monitoring' => $this->mMonitoring->select()
        ];
        
        // Load view
        $this->load->view('KepalaDesa/Layout/head', $data);
        $this->load->view('KepalaDesa/Layout/aside');
        $this->load->view('KepalaDesa/vMonitoring', $data);
        $this->load->view('KepalaDesa/Layout/footer');
    }
}
