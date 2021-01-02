<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->helper('url');
	}


	public function index()
	{
		$this->load->view('login');
	}

	public function login_aksi()
	{
	
		$username = $this->input->post('username',true);
		$password = md5($this->input->post('password',true));

		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');


		#rule validasi
		if($this->form_validation->run() != FALSE){
			$where = array(
				'username' => $username,
				'password' => $password

			);
			$cekLogin = $this->Login_model->cek_login($where)->num_rows();
			$datauser = $this->Login_model->cek_login($where)->row();
		
			if($cekLogin > 0){
				$sess_data = array(
					// 'username' => $username,
					// 'password' => $password,
					'username' => $datauser->username,
					'login' => 'OK'
					
				);
				
				$this->session->set_userdata($sess_data);
				$this->load->view('template');
			
			}else{
				redirect(base_url('login'));
				
			}
			}else{
				// $this->load->view('login');
				redirect(base_url('login'));
			}
		}
		public function admin(){
			if($this->session->userdata('login')== OK){
				$this->load->view('template');
			}else{
				$this->load->view('login');
			
		}
	}
	public function logout(){
	  $this->session->sess_destroy();
	  redirect(base_url('login'));
	}

}
?>

