<?php
class Product_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_karne_for_home()
    {
		$sql = "SELECT p.*  FROM products p INNER JOIN store s ON s.id = p.ownerid WHERE s.status = 'A'";
		$query = $this->db->query($sql);
		
		$result = $query->result_array();
		return $result;
    }
	
	public function get_gulay_for_home()
    {
		
		$query = $this->db->select('*')
				->from('products')
				->where('category',1)
				->limit(0)
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
	
}