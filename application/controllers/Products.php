<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
        $data["current_page"] = "products";
        $data["title"] = "Products";

		$this->load->view('templates/styles');
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar',$data);
		$this->load->view('products',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/scripts');
	}

	public function filter()
	{
		$category = base64_decode(base64_decode($this->uri->segment(3)));
		$data['products'] = $this->product->get_products_by_category($category);
		$data['category'] = $this->product->get_product_category_name($category);
		//var_dump($data['products']);
        $data["current_page"] = "filter_products";
        $data["title"] = "Filter Products";

		
		$this->load->view('user_template/head',$data);
		$this->load->view('user_template/style');
		$this->load->view('user_template/navbar',$data);
		$this->load->view('user/filter_products',$data);
		$this->load->view('user_template/footer');
		$this->load->view('user_template/scripts');
	}
}
