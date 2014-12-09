<?php
class Products_model extends CI_Model {
	
	function get_all_products() 
	{	
		$results = $this->db->get('products')->result_array();
		return $results;
	}
	
	function get_by_id($id) 
	{		
		$results = $this->db->get_where('products', array('id' => $id))->result();
		$result = $results[0];	
		return $result;
	}
	
}
