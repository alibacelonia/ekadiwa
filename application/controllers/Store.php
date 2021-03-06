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
			$data["current_page"] = "store";
			$data["title"] = "Store";
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			//var_dump($data);
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('user/store',$data);
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts');
		}
		else{
			$data["current_page"] = "store";
			$data["title"] = "Store";

			$data['userinfo'] = array();
			
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('user/store',$data);
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts');
		}
	}
	
	public function details()
	{
		
		$storeid = base64_decode(base64_decode($this->uri->segment(3)));
		$data['store'] = $this->store->get_store_details($storeid);
		$data['products'] = $this->product->get_products_by_store($storeid);
        $session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data["current_page"] = "store";
			$data["title"] = "Store";
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			$this->load->view('user_template/head',$data);
			$this->load->view('user_template/style');
			$this->load->view('user_template/navbar',$data);
			$this->load->view('user/store_details',$data);
			$this->load->view('user_template/footer');
			$this->load->view('user_template/scripts');
		}
		else{
			redirect(base_url()."auth");
		}
	}

	public function mystore()
	{
		
		$storeid = base64_decode(base64_decode($this->uri->segment(3)));
		$data['store'] = $this->store->get_store_details($storeid);
		$data['products'] = $this->product->get_products_by_store($storeid);
        $session_data = $this->session->userdata('user');
		if(isset($session_data)){
			$data["currentPage"] = "Store";
			$data['user_details'] = $this->user->get_user_details(array("id"=>$session_data['id']));
			//var_dump($data);
			$data["title"] = "Home";
			$this->load->view('user/mystore',$data);
		}
		else{
			redirect(base_url()."auth");
		}
	}
}
