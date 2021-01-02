<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar_model extends CI_Model
{




	
    public function get_pendaftar($cari_peserta = '', $cari_email = '')
    {
        $this->db->select('*');
		$this->db->from('pendaftar');
		return $this->db->get();
	
        //penambahan fungsi cari
        if ($cari_peserta != '' && $cari_peserta != null) {
            $this->db->like('nama_peserta', $cari_peserta);
        }

        if ($cari_email != '' && $cari_email != null) {
            $this->db->like('email', $cari_email);
        }
        return $this->db->get();
    }
    
    public function insert_data($data)
    {
    	$this->db->insert('pendaftar', $data);
    }

    public function get_by_id($id_pendaftar)
    {
        $this->db->select('*');
        $this->db->from('pendaftar');
        $this->db->where('id_pendaftar', $id_pendaftar);
        return $this->db->get();
    }

     public function update_data($id_pendaftar, $data)
    {
        $this->db->where('id_pendaftar', $id_pendaftar);
        $this->db->update('pendaftar', $data);
    }

    public function hapus_data($id_pendaftar)
    {
        $this->db->where('id_pendaftar', $id_pendaftar);
        $this->db->delete('pendaftar');
    }
}
