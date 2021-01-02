<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        echo "index";
    }

    public function list_kelas()
    {
        $data_kelas = $this->Kelas_model->get_kelas();
        $konten = '<tr>
        <td>No</td>
        <td>Nama Kelas</td>
        <td>Nama Pengajar</td>
        <td>Jadwal Bimbel</td>
        <td>Jumlah Pertemuan</td>
        <td>Harga Kelas</td>
        <td>Ruang Kelas</td>
        <td>Aksi</td>
        </tr>';

        foreach ($data_kelas->result() as $key => $value) {
            $konten .= '<tr>
            <td>' . $value->id_kelas . '</td>
            <td>' . $value->nama_kelas . '</td>
            <td>' . $value->nama_pengajar . '</td>
            <td>' . $value->jadwal_bimbel . '</td>
            <td>' . $value->jumlah_pertemuan . '</td>
            <td>' . $value->harga_kelas . '</td>
            <td>' . $value->ruang_kelas . '</td>
            <td> <a href="#' .$value->id_kelas.'" class="linkHapusKelas" >Hapus</a> | <a href="#' .$value->id_kelas.'" class="linkEditKelas" >Edit</a></td>
            </tr>';
        }
        $data_json = array(
            'konten' => $konten,
        );
        echo json_encode($data_json);
    }

    public function create_action()
    {
        $this->db->trans_start();

        $arr_input = array(
            'nama_kelas' => $this->input->post('nama_kelas'),
            'nama_pengajar' => $this->input->post('nama_pengajar'),
            'jadwal_bimbel' => $this->input->post('jadwal_bimbel'),
            'jumlah_pertemuan' => $this->input->post('jumlah_pertemuan'),
            'harga_kelas' => $this->input->post('harga_kelas'),
            'ruang_kelas' => $this->input->post('ruang_kelas'),
        );

        $this->Kelas_model->insert_data($arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Input Data Kelas');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Input Data Kelas');
        }

        echo json_encode($data_output);
    }

    public function detail()
    {
        $id_kelas = $this->input->get('id_kelas');
        $data_detail = $this->Kelas_model->get_by_id($id_kelas);

        if ($data_detail->num_rows() > 0) {
            $data_output = array('sukses' => 'ya', 'detail' => $data_detail->row_array());
        } else {
            $data_output = array('sukses' => 'tidak');
        } echo json_encode($data_output);
    }

    public function update_action()
    {
        $this->db->trans_start();

        $id_kelas = $this->input->post('id_kelas');

        $arr_input = array(
            'nama_kelas' => $this->input->post('nama_kelas'),
            'nama_pengajar' => $this->input->post('nama_pengajar'),
            'jadwal_bimbel' => $this->input->post('jadwal_bimbel'),
            'jumlah_pertemuan' => $this->input->post('jumlah_pertemuan'),
            'harga_kelas' => $this->input->post('harga_kelas'),
            'ruang_kelas' => $this->input->post('ruang_kelas'),
        );

        $this->Kelas_model->update_data($id_kelas, $arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Update Data Kelas');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Update Data Kelas');
        }

        echo json_encode($data_output);
    }

     public function soft_delete_data()
    {
        $this->db->trans_start();

        $id_kelas = $this->input->get('id_kelas');

        $this->Kelas_model->soft_delete_data($id_kelas);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Hapus Data Kelas');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Hapus  Data Kelas');
        }

        echo json_encode($data_output);
    }

}
