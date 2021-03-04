<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
			redirect(base_url()."home/my_account");
		}
		else{
			$this->load->view('login');
		}
	}

    public function register()
	{
        $data["current_page"] = "products";
        $data["title"] = "Products";

		$this->load->view('templates/styles');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('register',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
	}

    public function register_as_seller()
	{
        $data["current_page"] = "products";
        $data["title"] = "Products";

		$this->load->view('templates/styles');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('register_as_seller',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
	}
	
	public function do_login()
	{
		$username = $this->input->post('email');
        $password = $this->input->post('password');
		
	
		$data = $this->auth->auth_check($username,$password);
		if($data){
			if($data['status'] == "A" && ($data['type'] == "V" || $data['type'] == "B")){
				$this->session->set_userdata('user', $data);
				redirect(base_url());
			}
			if($data['status'] == "A" && $data['type'] == "A"){
				$this->session->set_userdata('user', $data);
				redirect(base_url());
			}
			else{
				header('location:'.base_url()."auth/".$this->index());
				$this->session->set_flashdata('error','Your account is deactivated. Please contact your administartor.');
			}
		}
		else{
			header('location:'.base_url()."auth/".$this->index());
			$this->session->set_flashdata('error','Incorrect username or password.');
		}
	}
}
