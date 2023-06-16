<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('login_view');
        if ($this->session->userdata('user')) {
            redirect('index.php/admin');
        }
    }

    public function process_login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $is_active = $this->input->post('is_active');
            
            $user = $this->login_model->check_login($username, $password, $is_active);

            if ($user) {
                // Login berhasil, simpan data pengguna ke session
                $this->session->set_userdata('user', $user);
                redirect('index.php/admin');
            } else {
                // Login gagal, tampilkan pesan error
                $data['error'] = 'Username atau password salah';
                $this->load->view('login_view', $data);
            }
        }
    }

    public function logout() {
        // Hapus data pengguna dari session
        
        $this->session->unset_userdata('user');
        redirect('index.php/auth');
    }
}
