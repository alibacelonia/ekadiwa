<?php
class User_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_user_details($data)
    {
		
		$query = $this->db->select('*')
				->from('users')
				->where('id',$data['id'])
				->get();
		
		$result = $query->row_array();
		return $result;
    }
	
	
}