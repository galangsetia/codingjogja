<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
    }

    public function index()
    {
        echo "index";
    }

    public function list_pembayaran()
    {
		$data_pembayaran = $this->Pembayaran_model->get_pembayaran();
		
		$konten = '<tr>
		<td>Tanggal Pembayaran</td>
        <td>No Pendaftar</td>
        <td>Kode Kelas</td>
        <td>Aksi</td>
        </tr>';
        
        foreach ($data_pembayaran->result() as $key => $value) {
            $konten .= '<tr>
            <td>' . $value->tanggal_pembayaran . '</td>
            <td>' . $value->id_pendaftar . '</td>
            <td>' . $value->id_kelas . '</td>
        
			<td><a href="#' .$value->id_pembayaran.'" class="linkHapusPembayaran" >Hapus</a> | <a href="#' .$value->id_pembayaran.'" class="linkEditPembayaran" >Edit</a> 
		</br> </td>
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
            'tanggal_pembayaran' => $this->input->post('tanggal_pembayaran'),
            'id_pendaftar' => $this->input->post('id_pendaftar'),
            'id_kelas' => $this->input->post('id_kelas'),
        );

		// mengecek isi variabel keisi atau tidak
		// return var_dump($arr_input);


        $this->Pembayaran_model->insert_data($arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Input Tanggal Pembayaran');
        } else {
            $this->db->trans_commit();
             $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Input Tanggal Pembayaran');
        }

		
        echo json_encode($data_output);
    }

    public function detail()
    {
        $id_pembayaran = $this->input->get('id_pembayaran');
        $data_detail = $this->Pembayaran_model->get_by_id($id_pembayaran);

        if ($data_detail->num_rows() > 0) {
            $data_output = array('sukses' => 'ya', 'detail' => $data_detail->row_array());
        } else {
            $data_output = array('sukses' => 'tidak');
        } echo json_encode($data_output);
    }

    public function update_action()
    {
        $this->db->trans_start();

        $id_pembayaran = $this->input->post('id_pembayaran');

        $arr_input = array(
            'tanggal_pembayaran' => $this->input->post('tanggal_pembayaran'),
        );

        $this->Pembayaran_model->update_data($id_pembayaran, $arr_input);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Update Data Pembayaran');
        } else {
            $this->db->trans_commit();
             $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Update Data Pembayaran');
        }

        echo json_encode($data_output);
    }

    public function soft_delete_data()
    {
        $this->db->trans_start();

        $id_pembayaran = $this->input->get('id_pembayaran');

        $this->Pembayaran_model->soft_delete_data($id_pembayaran);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Hapus Data Pembayaran');
        } else {
            $this->db->trans_commit();
            $data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Hapus  Data Pembayaran');
        }

        echo json_encode($data_output);
    }
}
