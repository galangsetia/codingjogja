<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_daftar extends CI_Controller {



	function __construct(){

		parent::__construct();                        

		$this->load->model('CPendaftar_model');

}



	public function index()
	{
	
		$data['pendaftar'] = $this->CPendaftar_model->tampil_data()->result();
		$this->load->view('v_tampil',$data);

	}


}
?>

