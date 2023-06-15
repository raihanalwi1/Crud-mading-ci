<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
		if (!$this->session->userdata('user')) {
            redirect('index.php/auth');
        }
    }
	public function index()
	{
		$this->load->view('admin/template/header_admin');
		$this->load->view('admin/dashboard_admin');
		$this->load->view('admin/template/footer_admin');
	}
}