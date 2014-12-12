<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model 
{

	function get_admin_by_email($email)
	{
		return $this->db->query('SELECT * FROM users WHERE email = ?', array($email))->row_array();
	}

	function get_orders_with_customers()
	{

		$query = "SELECT customers.*, orders.id AS order_id, orders.order_date, orders.order_status, products.*, products_has_orders.products_quantity
					FROM orders
					LEFT JOIN customers ON orders.customers_id = customers.id
					LEFT JOIN products_has_orders ON orders.id = products_has_orders.orders_id
					LEFT JOIN products ON products_has_orders.products_id = products.id
					GROUP BY order_id
					ORDER BY orders_id DESC";

		return $this->db->query($query)->result_array();
	}

	function get_orders_with_customer($id)
	{

		return $this->db->query("SELECT customers.*, orders.*
					FROM orders
					LEFT JOIN customers ON orders.customers_id = customers.id
					WHERE orders.id = ?", array($id))->row_array();

	}

	function get_orders_with_shipping($id)
	{
		return $this->db->query("SELECT orders.*, shipping_information.*
					FROM orders
					LEFT JOIN shipping_information ON orders.shipping_information_id = shipping_information.id
					WHERE orders.id = ?", array($id))->row_array();

	}

	function get_orders_with_products($id)
	{
		return $this->db->query("SELECT orders.*, products.*, products_has_orders.products_quantity
									FROM orders
									LEFT JOIN products_has_orders ON orders.id = products_has_orders.orders_id
									LEFT JOIN products ON products_has_orders.products_id = products.id
									WHERE orders.id = ?", array($id))->result_array();
	}

	function get_orders_with_product()
	{
		return $this->db->query("SELECT orders.*, products.*,pictures.name AS pic_name, pictures.description AS pic_desc, products_has_orders.products_quantity
									FROM orders
									LEFT JOIN products_has_orders ON orders.id = products_has_orders.orders_id
									LEFT JOIN products ON products_has_orders.products_id = products.id
									LEFT JOIN pictures ON products.id = pictures.products_id
									ORDER BY products.id ASC")->result_array();
	}

	function update_status($status, $id)
	{
		$query = "UPDATE orders SET order_status = ?
					WHERE orders.id = ?";
		$values = array($status['order_status'], $id);
		return $this->db->query($query, $values);
	}

	function get_all_pictures_with_products()
	{
		return $this->db->query('SELECT pictures.name AS pic_name, pictures.description AS pic_desc, products.*
									FROM pictures
									LEFT JOIN products ON products.id = pictures.products_id;')->result_array();
	}

	function get_user($name)
	{		return $this->db->query('SELECT * FROM customers WHERE email LIKE ? ORDER BY first_name ASC', $name.'%')->result_array();
	}


	// function get_lead($lead_data = NULL)
	// {
	// 	$sql = "SELECT * FROM ... LIMIT ? OFFSET ?";

	// 	if($lead_data == NULL)
	// 		$where = array(LEAD_LIMIT, 0);

	// 	else if(isset($lead_data['page_number']) && isset($lead_data['search']))
	// 	{
	// 		if($lead_data['search'] == "")
	// 			$where = array(LEAD_LIMIT, $lead_data['page_number']);
	// 		else
	// 		{
	// 			if(is_array($lead_data['search']))
	// 			{
	// 				$sql = "SELECT * from ... WHERE "
	// 			}
	// 		}
	// 	}
	// }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */