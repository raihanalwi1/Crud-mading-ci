<?php
class Artikel_model extends CI_Model {
    
    public function get_artikel() {
        // Mengambil data artikel dari database
        // Gantikan dengan logika pengambilan data sesuai dengan struktur tabel Anda
        $query = $this->db->get('artikel');
        return $query->result();
    }
    
    public function tambah_artikel($data) {
        // Menyimpan data artikel ke database
        // Gantikan dengan logika penyimpanan data sesuai dengan struktur tabel Anda
        $this->db->insert('artikel', $data);
        return $this->db->insert_id();
    }
    
    public function hapus_artikel($id) {
        // Menghapus artikel berdasarkan ID
        // Gantikan dengan logika penghapusan data sesuai dengan struktur tabel Anda
        $this->db->where('id_artikel', $id);
        $this->db->delete('artikel');
        return $this->db->affected_rows();
    }
}
?>