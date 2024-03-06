<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mdl extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function read_where($namatb,$where)
	{
		$res=$this->db->get_where($namatb,$where);
		return $res->result_array();
	}
}
