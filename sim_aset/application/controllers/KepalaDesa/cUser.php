<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cUser extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load model jika diperlukan
        // $this->load->model('mUser');
    }

    public function index() {
        $data['title'] = 'Data User';
        
        // Contoh data statis (ganti dengan data dari database)
        $data['users'] = [
            [
                'id' => 1, 
                'username' => 'admin', 
                'nama_lengkap' => 'Administrator', 
                'email' => 'admin@example.com',
                'level' => 'Admin',
                'status' => 'Aktif'
            ],
            [
                'id' => 2, 
                'username' => 'staff', 
                'nama_lengkap' => 'Staff Gudang', 
                'email' => 'staff@example.com',
                'level' => 'Staff',
                'status' => 'Aktif'
            ]
        ];
        
        $this->load->view('KepalaDesa/Layout/head', $data);
        $this->load->view('KepalaDesa/Layout/aside');
        $this->load->view('KepalaDesa/User/vUser', $data);
        $this->load->view('KepalaDesa/Layout/footer');
    }
}
