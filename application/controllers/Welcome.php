<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function index()
	{
	$data['news']=$this->db->order_by('id','desc')->get('news')->result_array();
	$data['images']=$this->db->get('images')->result_array();
	$data['seminar']=$this->db->get('seminar')->result_array();
	$data['dogerekler']=$this->db->get('dogerekler')->result_array();
	$this->load->view('homepage',$data);
	}
	}
	