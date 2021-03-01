<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
        $data["current_page"] = "store";
        $data["title"] = "Store";

		$this->load->view('templates/styles');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('store',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
	}
}
