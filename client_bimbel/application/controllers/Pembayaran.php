<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function index()
    {
        $konten = $this->load->view('pembayaran/list_pembayaran', null, true);

        $data_json = array(
            'konten' => $konten,
            'title' => 'List Data Pembayaran',
        );
        echo json_encode($data_json);
    }

    public function form_create()
    {
    	$data_view = array('title' => 'Form Data Pembayaran');

    	$konten = $this->load->view('pembayaran/form_pembayaran', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
            'title' => 'Form Data Pembayaran',
        );
        echo json_encode($data_json);
    }

    public function form_edit($id_pembayaran)
    {
    	$data_view = array('title' => 'Form Edit Data Pembayaran', 'id_pembayaran' => $id_pembayaran);

    	$konten = $this->load->view('pembayaran/form_pembayaran', $data_view, true);

    	$data_json = array(
            'konten' => $konten,
            'title' => 'Form Edit Data Pembayaran',
            'id_pembayaran' => $id_pembayaran
        );
        echo json_encode($data_json);
    }
}