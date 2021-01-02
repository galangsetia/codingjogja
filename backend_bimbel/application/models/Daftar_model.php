<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{


	 // Get nama_kelas
	//  function getnamakelas(){

	// 	$response = array();
	 
	// 	// Select record
	// 	$this->db->select('*');
	// 	$q = $this->db->get('kelas');
	// 	$response = $q->result_array();
	// 	return $response;
	//   }
	function get_namakelas(){
        $query = $this->db->get('kelas');
        return $query;  
    }
 
    


}
