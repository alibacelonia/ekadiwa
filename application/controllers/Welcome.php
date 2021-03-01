<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{ 
		$data["current_page"] = "dashboard";
        $data["title"] = "Dashboard";

		$this->load->view('templates/styles');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
		// $this->load->view('welcome_message');
	}
}
