<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{ 
		$session_data = $this->session->userdata('user');
		
		if(isset($session_data)){
			$data["currentPage"] = "Home";
			//$data['userinfo'] = $this->Profile_Model->getUserInfo(array("id"=>$session_data['id']);
		
			$data["title"] = "Home";
			$this->load->view('home',$data);
		}
		else{
			redirect(base_url());
		}
	}
}
