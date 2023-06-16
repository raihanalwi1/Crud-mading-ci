<?php
class User_model extends CI_model{
    public function get_namauser($id){
        $query = $this->db->get_where('user', $id);
        $user = $query->row();
        return $user->result();
    }
}