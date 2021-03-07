<?php
class Product_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_karne_for_home()
    {
		$sql = "SELECT p.*  FROM products p INNER JOIN store s ON s.id = p.ownerid WHERE s.status = 'A' and p.category = 6 ";
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
    }
	
	public function get_gulay_for_home()
    {
		
		$query = $this->db->select('*')
				->from('products')
				->where('category',9)
				->get();
		
		$result = $query->result_array();
		return $result;
    }
	
	
	public function get_products_by_store($id)
    {
		
		$query = $this->db->select('*')
				->from('products')
				->where('ownerid',$id)
				->get();
		
		$result = $query->result_array();
		return $result;
	}

	public function get_products_by_category($category)
    {
		
		$sql = "SELECT p.* FROM products p INNER JOIN store s ON p.ownerid = s.id WHERE s.status = 'A' and  p.category = ".$category;
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
	}
	
	public function get_my_store_products($data)
    {
		$sql = "SELECT p.* FROM products p INNER JOIN store s ON s.id = p.ownerid WHERE s.status = 'A' AND p.ownerid = ".$data['id'];
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
	}
	
	public function get_product_category_name($id)
    {
		$query = $this->db->select('*')
				->from('category')
				->where('id',$id)
				->get();
		
		$result = $query->row_array();
		return $result;
	}

	
}