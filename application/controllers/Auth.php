<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] = "Login";
		$data["current_page"] = "login";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			redirect(base_url()."home/myaccount");
		}
		else{
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('login');
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts');
		}
	}

    public function register()
	{
		$data["title"] = "Register";
		$data["current_page"] = "register";
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			redirect(base_url()."home/myaccount");
		}
		else{
			
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('register');
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts');
		}
	}

    public function register_as_seller()
	{
			
		$data["title"] = "Register As Vendor";
		$data["current_page"] = "register_as_vendor";
        $session_data = $this->session->userdata('user');
		if(isset($session_data)){
			redirect(base_url()."home/myaccount");
		}
		else{
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('register_as_vendor');
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts');
		}
	}
	
	public function do_login()
	{
		$username = $this->input->post('email');
        $password = $this->input->post('password');
		
	
		$data = $this->auth->auth_check($username,$password);
		if($data){
			if($data['status'] == "A" && ($data['type'] == "V" || $data['type'] == "U")){
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

	public function do_register()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$data = array(
			"username"=>$username,
			"email"=>$email,
			"password"=>password_hash($password,PASSWORD_BCRYPT),
			"status"=>"A",
			"type"=>"U"
		);
	
		$result = $this->auth->check_if_exists($username,$email);

		if($result){
			header('location:'.base_url()."auth/register".$this->index());
			$this->session->set_flashdata('error','Username or Email already exists.');
		}
		else{
			if(strlen($password) <= 5){
				header('location:'.base_url()."auth/register".$this->index());
				$this->session->set_flashdata('error','Password must be at least 6 characters.');
			}
			else{
				$this->user->register_user($data);
				header('location:'.base_url()."auth/register".$this->index());
				$this->session->set_flashdata('success','Account successfully register.');
			}
		}
	}
	
	 
	public function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url().$this->index());
	}    
}
