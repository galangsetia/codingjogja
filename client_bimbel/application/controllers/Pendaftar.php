<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		$this->load->model('Daftar_model');

    }
	public function index()
	{
		$konten = $this->load->view('pendaftar/list_pendaftar', null, true);

		$data_json = array(
			'konten' => $konten,
			'title' => 'List Data Pendaftar',
		);
		echo json_encode($data_json);
		//load model 


	}



	public function form_create()
	{
	


	
		// load view 
		$data_view = array('title' => 'Form Data Pendaftar');

		$konten = $this->load->view('pendaftar/form_pendaftar', $data_view, true);

		$data_json = array(
			'konten' => $konten,
			'title' => 'Form Data Pendaftar',
		);
		echo json_encode($data_json);
	}

	public function form_edit($id_pendaftar)
	{
		
	
		$data_view = array('title' => 'Form Edit Data Pendaftar', 'id_pendaftar' => $id_pendaftar);

		$konten = $this->load->view('pendaftar/form_pendaftar', $data_view, true);

		$data_json = array(
			'konten' => $konten,
			'title' => 'Form Edit Data Pendaftar',
			'id_pendaftar' => $id_pendaftar,
			
		);
		echo json_encode($data_json);
	}
}
