<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {


	public function index()
	{
		$this->load->model('Daftar_model');
		$this->data['kelas'] = $this->Daftar_model->get();
		// $data['namakelas'] = $this->Dropdown->tampil_kelas();
		$this->load->view('daftar',$this->data);
	}

	function tambah_daftar(){
		
		$nama_kelas = $this->input->post('nama_kelas');
		$nama_peserta = $this->input->post('nama_peserta');
		$tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$usia = $this->input->post('usia');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$id_pendaftar = $this->input->post('id_pendaftar');
 
		$data = array(
		
			'nama_kelas' => $nama_kelas,
			'nama_peserta' => $nama_peserta,
			'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
			'alamat' => $alamat,
			'usia' => $usia,
			'email' => $email,
			'no_telp' => $no_telp,
			'id_pendaftar' => $id_pendaftar,

			);
			$this->load->model('Daftar_model');
		$this->Daftar_model->input_data($data,'Pendaftar');
		redirect('sudah_daftar');
	}


}
?>

