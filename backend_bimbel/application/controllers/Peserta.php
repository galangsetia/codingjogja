<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta_model');
    }

    public function index()
    {
        echo "index";
    }

    public function list_peserta()
    {
        $data_peserta = $this->Peserta_model->get_peserta();
        $konten = '<tr>
            <td>No</td>
            <td>No Pendaftar</td>
            <td>Nama Peserta</td>
          
         
            
            <td>Aksi</td>
        </tr>';

        foreach ($data_peserta->result() as $key => $value) {
            $konten .= '<tr>
                         
                            <td>' . $value->id_pendaftar . '</td>
							<td>' . $value->nama_peserta . ' </td>
						
                           
                            <td><a href="#' .$value->id_peserta.'" class="linkHapusPeserta" >Hapus</a> | <a href="#' .$value->id_peserta.'" class="linkEditPeserta" >Edit</a></td>
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
	
          
            'id_pendaftar' => $this->input->post('id_pendaftar'),
         
            'nama_peserta' => $this->input->post('nama_peserta'),
            
        );

        $this->Peserta_model->insert_data($arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Input Data Peserta');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Input Data Peserta');
        }

        echo json_encode($data_output);
    }

    public function detail()
    {
        $id_peserta = $this->input->get('id_peserta');
        $data_detail = $this->Peserta_model->get_by_id($id_peserta);

        if ($data_detail->num_rows() > 0) {
            $data_output = array('sukses' => 'ya', 'detail' => $data_detail->row_array());
        } else {
            $data_output = array('sukses' => 'tidak');
        } echo json_encode($data_output);
    }

    public function update_action()
    {
        $this->db->trans_start();

        $id_peserta = $this->input->post('id_peserta');

        $arr_input = array(
			'id_pendaftar' => $this->input->post('id_pendaftar'),
			'nama_peserta' => $this->input->post('nama_peserta'),
         
         
         
          
        );

        $this->Peserta_model->update_data($id_peserta, $arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Update Data Peserta');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Update Data Peserta');
        }

        echo json_encode($data_output);
    }

     public function delete_data()
    {
        $this->db->trans_start();

        $id_peserta = $this->input->get('id_peserta');

        $this->Peserta_model->hapus_data($id_peserta);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Hapus Data Peserta');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Hapus  Data Peserta');
        }

        echo json_encode($data_output);
    }

}
