<?php
class Store_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_all_store()
    {
		
		$query = $this->db->select('*')
				->from('store')
				->where('status','A')
				->get();
		
		$result = $query->result_array();
		return $result;
    }

	public function get_store_details($id)
    {
		
		$query = $this->db->select('*')
				->from('store')
				->where('id',$id)
				->where('status','A')
				->get();
		
		$result = $query->row_array();
		return $result;
	}
	
	public function get_my_store_details($id)
    {
		
		$query = $this->db->select('*')
				->from('store')
				->where('id',$id)
				->where('status','A')
				->get();
		
		$result = $query->row_array();
		return $result;
    }
	
	
}