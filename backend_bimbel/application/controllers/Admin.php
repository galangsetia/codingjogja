<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
    {
		parent::__construct();
	
        $this->load->model('Admin_model');
    }
	
		public function index()
		{
			
			echo "index";
		}
	
		public function list_admin()
		{
			$data_admin = $this->Admin_model->get_admin();
			$konten = '<tr>
			<td>Nama Admin</td>
            <td>Username</td>
            <td>Password</td>
            <td>Aksi</td>
			</tr>';
	
			foreach ($data_admin->result() as $key => $value) {
				$konten .= '<tr>
			
				<td>' . $value->nama_admin . '</td>
				<td>' . $value->username . ' </td>
				<td style=" -webkit-text-security: disc; /* Default */ ";>' . $value->password . ' </td>
				// <td>  <a href="#'.$value->id_admin.'" class="linkHapusAdmin">Hapus</a>  
				|
					  <a href="#'.$value->id_admin.'"  class="linkEditAdmin">Edit</a> </td>
					  
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
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
			);
			$this->Admin_model->insert_data($arr_input);

			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Input Data ');
			} else {
				$this->db->trans_commit();
				$data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Input Data ');
			}

			echo json_encode($data_output);
		}



		public function detail()
		{
			$id_admin = $this->input->get('id_admin');
			$data_detail = $this->Admin_model->get_by_id($id_admin);

			if ($data_detail->num_rows() > 0) {
				$data_output = array('sukses' => 'ya', 'detail' => $data_detail->row_array());
			} else {
				$data_output = array('sukses' => 'tidak');
			} 
			echo json_encode($data_output);
		}



		public function update_action()
		{
			$this->db->trans_start();

			$id_admin = $this->input->post('id_admin');

			$arr_input = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				
			);

			$this->Admin_model->update_data($id_admin, $arr_input);

			if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
				$data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Update Data admin');
			} else {
				$this->db->trans_commit();
				$data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Update Data admin');
			}

			echo json_encode($data_output);
		}

		public function delete_data()
		{
			$this->db->trans_start();
		
			$id_admin = $this->input->get('id_admin');

			$this->Admin_model->hapus_data($id_admin);

			if( $this->db->trans_status() === FALSE){
						$this->db->trans_rollback();
						$data_output = array('sukses' => 'tidak','pesan' => 'gagal hapus data Admin');
				}else{
						$this->db->trans_commit();
						$data_output = array('sukses' => 'ya','pesan' => 'Berhasil hapus Data Admin');
				}
				echo json_encode($data_output);
		}
	}


