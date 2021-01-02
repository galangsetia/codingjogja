<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_model extends CI_Model
{
    public function get_peserta()
    {
        $this->db->select('*');
        $this->db->from('peserta');
        return $this->db->get();
    }

    public function insert_data($data)
    {
    	$this->db->insert('peserta', $data);
    }

    public function get_by_id($id_peserta)
    {
        $this->db->select('*');
        $this->db->from('peserta');
        $this->db->where('id_peserta', $id_peserta);
        return $this->db->get();
    }

     public function update_data($id_peserta, $data)
    {
        $this->db->where('id_peserta', $id_peserta);
        $this->db->update('peserta', $data);
    }

    public function hapus_data($id_peserta)
    {
        $this->db->where('id_peserta', $id_peserta);
        $this->db->delete('peserta');
    }
}
