<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {


	public function index()
	{
		$this->load->model('Daftar_model');
		$this->data['kelas'] = $this->Daftar_model->get();
		$this->load->view('homepage',$this->data);
	}


}
?>

