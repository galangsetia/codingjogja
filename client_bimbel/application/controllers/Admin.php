<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	
    public function index()
    {


        $konten = $this->load->view('admin/list_admin', null, true);

        $data_json = array(
            'konten' => $konten,
            'title' => 'List Data Admin',
        );
        echo json_encode($data_json);
	}
	

	public function form_create()
    {
    	$data_view = array('title' => 'Form Data Admin');

    	$konten = $this->load->view('admin/form_admin', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
            'title' => 'Form Data Admin',
        );
        echo json_encode($data_json);
	}


	public function form_edit($id_admin)
    {
    	$data_view = array('title' => 'Form Edit Data Admin' , 	'id_admin' => '$id_admin');

    	$konten = $this->load->view('admin/form_admin', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
			'title' => 'Form Edit Data Admin',
			'id_admin' => '$id_admin'
        );
        echo json_encode($data_json);
	}
	
	
}
