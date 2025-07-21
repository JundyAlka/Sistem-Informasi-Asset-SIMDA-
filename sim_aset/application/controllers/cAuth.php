<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAuth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mAuth');
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vAuth');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $auth = $this->mAuth->Auth($username, $password);
            if ($auth) {

                $userdata = array(
                    'id' => $auth->id_user,
                    'username' => $auth->username,
                    'level' => $auth->level_user,
                    'nama' => $auth->nama_user,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($userdata);

                if ($auth->level_user == '1') {
                    redirect('Admin/cDashboard');
                } else {
                    redirect('KepalaDesa/cDashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Username dan Password Salah!!!');
                redirect('cAuth');
            }
        }
    }
    public function logout()
    {
        // Hapus semua data session
        $this->session->sess_destroy();
        
        // Set pesan sukses
        $this->session->set_flashdata('success', 'Anda Berhasil Logout!');

        // Redirect ke halaman login
        redirect('cAuth');
    }
}

/* End of file c.php */
