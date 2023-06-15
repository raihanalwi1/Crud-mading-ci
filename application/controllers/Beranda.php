<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('beranda_view');
		$this->load->view('template/footer');
	}
}