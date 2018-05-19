<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('news')->row_array();
	$this->load->view('news',$data);
	}
	}
class Seminar extends CI_Controller {
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('seminar')->row_array();
	$this->load->view('seminar',$data);
	}
	}
class Dogerekler extends CI_Controller {
	public function show($id)
	{
	$data['info']=$this->db->where('id',$id)->get('dogerekler')->row_array();
	$this->load->view('dogerekler',$data);
	}
	}