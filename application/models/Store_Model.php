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
	
	public function get_my_store_details($data)
    {
		$query = $this->db->select('*')
				->from('store')
				->where('owner',$data['id'])
				->where('status','A')
				->get();
		
		$result = $query->row_array();
		return $result;
    }
	
	public function save_store_changes($id,$data)
    {
		$this->db->where('owner', $id);
		$query = $this->db->update('store',$data);
		return $query;
    }
	
}