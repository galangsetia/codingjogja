<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct(){
        parent::__construct();
        if( ! $this->session->userdata('login'))
            redirect('login');
    }

    public function index()
    {
        $this->load->view('template');
    }
}
