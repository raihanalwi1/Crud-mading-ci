<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Artikel extends CI_Controller{

        public function __construct() {
            parent::__construct();
            $this->load->model('artikel_model');
            $this->load->library('form_validation');
        }

        public function index() {
            $data['artikel'] = $this->artikel_model->get_artikel();
            
		    $title['title'] = 'Artikel List admin';
            $this->load->view('admin/template/header_admin', $title);
            $this->load->view('admin/artikel_admin', $data);
            $this->load->view('admin/template/footer_admin');
        
        }

        public function tambah() {
            // Proses tambah artikel
            if ($this->input->post()) {
                // Validasi form jika diperlukan
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'isi_artikel' => $this->input->post('isi_artikel')
                );
                $id = $this->artikel_model->tambah_artikel($data);
                redirect('index.php/artikel');
            }
            // Tampilkan form tambah artikel
            $this->load->view('admin/template/header_admin');
            $this->load->view('admin/tambah_artikel_admin');
            $this->load->view('admin/template/footer_admin');

        }

        public function hapus($id) {
            // Proses hapus artikel
            $data = $this->artikel_model->hapus_artikel($id);
          
            redirect('index.php/artikel');
        }
    }
