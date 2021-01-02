<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        // tambahkan fungsi untuk menghapus dengan menggunakan soft delete
        $this->db->where('status_delete', 0);
        return $this->db->get();
    }

    public function insert_data($data)
    {
    	$this->db->insert('kelas', $data);
    }

    public function get_by_id($id_kelas)
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->get();
    }

     public function update_data($id_kelas, $data)
    {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
    }
    public function soft_delete_data($id_kelas)
    {
        $data = array(
            'status_delete' => 1
        );
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
    }
  
}
