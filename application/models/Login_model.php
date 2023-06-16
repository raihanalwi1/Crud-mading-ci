<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($username, $password, $is_active) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('is_active', $is_active);
        $query = $this->db->get('user');
        return $query->row_array();
    }
}
