<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function index()
    {
        $konten = $this->load->view('kelas/list_kelas', null, true);

        $data_json = array(
            'konten' => $konten,
            'title' => 'List Data Kelas',
        );
        echo json_encode($data_json);
    }

    public function form_create()
    {
    	$data_view = array('title' => 'Form Data Kelas Baru');

    	$konten = $this->load->view('kelas/form_kelas', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
            'title' => 'Form Data Kelas Baru',
        );
        echo json_encode($data_json);
    }

    public function form_edit($id_kelas)
    {
    	$data_view = array('title' => 'Form Edit Data Kelas', 'id_kelas' => $id_kelas);

    	$konten = $this->load->view('kelas/form_kelas', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
            'title' => 'Form Edit Data Kelas',
            'id_kelas' => $id_kelas
        );
        echo json_encode($data_json);
    }
}
