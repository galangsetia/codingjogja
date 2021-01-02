<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftar_model');
    }

    public function index()
    {
        echo "index";
	}
	


    public function list_pendaftar()
    {
		$this->load->model('Daftar_model');
        $data_pendaftar = $this->Pendaftar_model->get_pendaftar();
        $konten = '<tr>
        <td>No</td>
        <td>ID Kelas</td>
        <td>Nama Peserta</td>
        <td>Tempat Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Usia</td>
        <td>Email</td>
        <td>No Telepon</td>
        <td>Aksi</td>
        </tr>';
        
        foreach ($data_pendaftar->result() as $key => $value) {
            $konten .= '<tr>
            <td>' . $value->id_pendaftar . '</td>
            <td>' . $value->nama_kelas . '</td>
            <td>' . $value->nama_peserta . '</td>
            <td>' . $value->tempat_tanggal_lahir . '</td>
            <td>' . $value->alamat . '</td>
            <td>' . $value->usia . '</td>
            <td>' . $value->email . '</td>
            <td>' . $value->no_telp . '</td>
            <td><a href="#' .$value->id_pendaftar.'" class="linkHapusPendaftar" >Hapus</a> | <a href="#' .$value->id_pendaftar.'" class="linkEditPendaftar" >Edit</a></td>
            </tr>';
        }
        $data_json = array(
            'konten' => $konten,
        );
        echo json_encode($data_json);
    }

    // public function create_action()
    // {
    //     $this->db->trans_start();

    //     $arr_input = array(
    //         'id_kelas' => $this->input->post('id_kelas'),
    //         'nama_peserta' => $this->input->post('nama_peserta'),
    //         'tempat_tanggal_lahir' => $this->input->post('tempat_tanggal_lahir'),
    //         'alamat' => $this->input->post('alamat'),
    //         'usia' => $this->input->post('usia'),
    //         'email' => $this->input->post('email'),
    //         'no_telp' => $this->input->post('no_telp'),
    //     );

    //     $this->Pendaftar_model->insert_data($arr_input);

    //     if ($this->db->trans_status() === FALSE) {
    //         $this->db->trans_rollback();
    //         $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Input Tanggal Pendaftar');
    //     } else {
    //         $this->db->trans_commit();
    //          $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Input Tanggal Pendaftar');
    //     }

    //     echo json_encode($data_output);
    // }

    public function detail()
    {
		
        $id_pendaftar = $this->input->get('id_pendaftar');
        $data_detail = $this->Pendaftar_model->get_by_id($id_pendaftar);

        if ($data_detail->num_rows() > 0) {
            $data_output = array('sukses' => 'ya', 'detail' => $data_detail->row_array());
        } else {
            $data_output = array('sukses' => 'tidak');
        } echo json_encode($data_output);
    }

    public function update_action()
    {
        $this->db->trans_start();

        $id_pendaftar = $this->input->post('id_pendaftar');

        $arr_input = array(
	
			'nama_kelas' => $this->input->post('nama_kelas'),
            'nama_peserta' => $this->input->post('nama_peserta'),
            'tempat_tanggal_lahir' => $this->input->post('tempat_tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'usia' => $this->input->post('usia'),
            'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			
        );

        $this->Pendaftar_model->update_data($id_pendaftar, $arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Update Data Pendaftar');
        } else {
            $this->db->trans_commit();
             $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Update Data Pendaftar');
        }

        echo json_encode($data_output);
    }

    public function delete_data()
    {
        $this->db->trans_start();

        $id_pendaftar = $this->input->get('id_pendaftar');

        $this->Pendaftar_model->hapus_data($id_pendaftar);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Hapus Data Pendaftar');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Hapus  Data Pendaftar');
        }

        echo json_encode($data_output);
    }

    public function cari_pendaftar()
    {
        $cari_peserta = $this->input->post('cari_peserta');
        $cari_email = $this->input->post('cari_email');

        $data_pendaftar = $this->Pendaftar_model->get_pendaftar($cari_peserta, $cari_email);

        $konten = '<tr>
        <td>No</td>
        <td>No Kelas</td>
        <td>Nama Peserta</td>
        <td>Tempat Tanggal Lahir</td>
        <td>Alamat</td>
        <td>Usia</td>
        <td>Email</td>
        <td>No Telepon</td>
        <td>Aksi</td>
        </tr>';

        foreach ($data_pendaftar->result() as $key => $value) {
            $konten .= '<tr>
            <td>' . $value->id_pendaftar . '</td>
            <td>' . $value->id_kelas . '</td>
            <td>' . $value->nama_peserta . '</td>
            <td>' . $value->tempat_tanggal_lahir . '</td>
            <td>' . $value->alamat . '</td>
            <td>' . $value->usia . '</td>
            <td>' . $value->email . '</td>
            <td>' . $value->no_telp . '</td>
            <td><a href="#' .$value->id_pendaftar.'" class="linkHapusPendaftar" >Hapus</a> | <a href="#' .$value->id_pendaftar.'" class="linkEditPendaftar" >Edit</a></td>
                    </tr>';
        }
        $data_json = array(
            'konten' => $konten,
        );
        echo json_encode($data_json);
    }
}
