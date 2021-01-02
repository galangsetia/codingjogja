<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    public function get_pembayaran()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        // tambahkan fungsi untuk menghapus dengan menggunakan soft delete
        $this->db->where('status_delete', 0);
        return $this->db->get();
    }
    public function insert_data($data)
    {
    	$this->db->insert('pembayaran', $data);
    }

    public function get_by_id($id_pembayaran)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('id_pembayaran', $id_pembayaran);
        return $this->db->get();
    }

     public function update_data($id_pembayaran, $data)
    {
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->update('pembayaran', $data);
    }

    public function soft_delete_data($id_pembayaran)
    {
        $data = array(
            'status_delete' => 1
        );
        $this->db->where('id_pembayaran', $id_pembayaran);
        $this->db->update('pembayaran', $data);
    }
}
