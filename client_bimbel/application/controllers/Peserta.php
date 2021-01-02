<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{
    public function index()
    {
        $konten = $this->load->view('peserta/list_peserta', null, true);

        $data_json = array(
            'konten' => $konten,
            'title' => 'List Data Peserta',
        );
        echo json_encode($data_json);
    }

    public function form_create()
    {
    	$data_view = array('title' => 'Form Data Peserta Baru');

    	$konten = $this->load->view('peserta/form_peserta', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
            'title' => 'Form Data Peserta Baru',
        );
        echo json_encode($data_json);
    }

    public function form_edit($id_peserta)
    {
    	$data_view = array('title' => 'Form Edit Data Peserta', 'id_peserta' => $id_peserta);

    	$konten = $this->load->view('peserta/form_peserta', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
            'title' => 'Form Edit Data Peserta',
            'id_peserta' => $id_peserta
        );
        echo json_encode($data_json);
    }
}
