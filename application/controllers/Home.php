<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{ 
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data["currentPage"] = "Home";
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			//var_dump($data);
			$data["title"] = "Home";
			$this->load->view('home',$data);
		}
		else{
			$data["currentPage"] = "Home";
			$data['userinfo'] = array();
		
			$data["title"] = "Home";
			$this->load->view('home',$data);
		}
	}
}
