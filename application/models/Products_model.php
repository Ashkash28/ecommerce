<?php
class Products_model extends CI_Model {
	
	function get_all_products() 
	{	
		$results = $this->db->get('products')->result_array();
		return $results;
	}
	
	function get_by_id($id) 
	{		
		$query="SELECT * from products WHERE id=?";
		return $this->db->query($query,$id)->row_array();

	}

	function get_by_category($cat) 
	{		
		$query="SELECT * from products WHERE category=?";
		return $this->db->query($query,$cat)->result_array();
	}
	
	function get_picture_by_id($id)
	{
		$query="SELECT * from pictures WHERE products_id=?";
		return $this->db->query($query,$id)->result_array();
	}
}
