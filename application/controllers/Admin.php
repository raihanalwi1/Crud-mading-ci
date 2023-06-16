<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
		// $this->load->model('user_model');
		if (!$this->session->userdata('user')) {
            redirect('index.php/auth');
        }
    }
	public function index()
	{
		// $userId = $this->session->userdata('user');
		// $namauser = $this->user_model->get_namauser($userId);
		// $data ['nama_user'] = $namauser;
		$data['title'] = 'Dashboard admin';
		
		$this->load->view('admin/template/header_admin', $data);
		$this->load->view('admin/dashboard_admin');
		$this->load->view('admin/template/footer_admin');
		
	}	
	public function komentar(){
		$this->load->view('admin/template/header_admin');
		$this->load->view('admin/komentar_admin');
		$this->load->view('admin/template/footer_admin');
	}
	public function laporan(){
		$this->load->view('admin/template/header_admin');
		$this->load->view('admin/laporan_admin');
		$this->load->view('admin/template/footer_admin');
	}
}