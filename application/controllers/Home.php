<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{ 
		$this->encryption->initialize(array('driver' => 'openssl'));
		$session_data = $this->session->userdata('user');
		$data['karne'] = $this->product->get_karne_for_home();
		$data['gulay'] = $this->product->get_gulay_for_home();
		$stores  = $this->store->get_all_store();	
		$data['store_count'] =count($stores);
		for($a = 0; $a < count($stores); $a++){
			$stores[$a]['id'] = base64_encode(base64_encode($stores[$a]['id']));
		}
		$data['stores'] = $stores;
		if(isset($session_data)){
			$data["current_page"] = "home";
			$data["title"] = "Home";
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('user/home',$data);
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts',$data);
			
		}
		else{
			$data["current_page"] = "home";
			$data["title"] = "Home";
			$data['userinfo'] = array();
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('user/home',$data);
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts',$data);
		}
	}
	public function myaccount()
	{ 
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data["current_page"] = "myaccount";
			$data["title"] = "My Account";
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('user/myaccount',$data);
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts',$data);
		}
		else{
			redirect(base_url()."auth");
		}
	}

	public function mystore()
	{ 
		$session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data["current_page"] = "mystore";
			$data["title"] = "My Store";
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			$data['store_details'] = $this->store->get_my_store_details(array("id"=>$session_data['id']));
			$data['store_products'] = $this->product->get_my_store_products(array("id"=>$session_data['id']));
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('user/mystore',$data);
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts');
		}
		else{
			redirect(base_url()."auth");
		}
	}
	
	public function save_changes()
	{
		
		$session_data = $this->session->userdata('user');
		$firstname = $this->input->post('firstname');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		$gender = $this->input->post('gender');
		$phone = $this->input->post('phone');
		$birthdate = $this->input->post('birthdate');
		
        $current_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');
		
		$data = array(
					'firstname' => $firstname,
					'middlename' => $middlename,
					'lastname' => $lastname,
					'gender' => $gender,
					'phone' => $phone,
					'birthdate' => $birthdate
				);
		$this->user->save_user_changes($session_data['id'], $data);
		header('location:'.base_url()."home/myaccount");
		$this->session->set_flashdata('user_success','Account successfully updated.');
	}

	public function change_password(){
		
		$session_data = $this->session->userdata('user');
		$password = $this->input->post('current_password');
		$new_password = $this->input->post('new_password');
		$confirm_password = $this->input->post('confirm_password');
		
		$user = $this->user->get_user_details(array("id"=>$session_data['id']));

		if(password_verify($password,$user['password']) && $new_password == $confirm_password){
			$data = array(
				'password' => password_hash($new_password,PASSWORD_BCRYPT)
			);
			//var_dump($data);
			$this->user->save_user_changes($session_data['id'], $data);
			header('location:'.base_url()."home/myaccount");
			$this->session->set_flashdata('password_success','You successfully changed your password.');
		}
		else{
			if(!password_verify($password,$user['password'])){
				header('location:'.base_url()."home/myaccount");
				$this->session->set_flashdata('password_error','Incorrect password. Please try again.');
			}
			else if($new_password != $confirm_password){
				header('location:'.base_url()."home/myaccount");
				$this->session->set_flashdata('password_error','Password does not match.');
			}
			else if(strlen($new_password) <=5){
				header('location:'.base_url()."home/myaccount");
				$this->session->set_flashdata('password_error','Password must atleast 6 characters.');
			}
		}
	}

	public function save_about()
	{
		
		$session_data = $this->session->userdata('user');
		$about = $this->input->post('about');
		
		$data = array(
					'about' => $about
				);
		$this->store->save_store_changes($session_data['id'], $data);
		header('location:'.base_url()."home/mystore".$this->index());
	}

	public function save_policy()
	{
		
		$session_data = $this->session->userdata('user');
		$policy = $this->input->post('policy');
		
		$data = array(
					'policy' => $policy
				);
		$this->store->save_store_changes($session_data['id'], $data);
		header('location:'.base_url()."home/mystore".$this->index());
	}
}
