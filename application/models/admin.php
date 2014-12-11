<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model 
{

	function get_admin_by_email($email)
	{
		return $this->db->query('SELECT * FROM users WHERE email = ?', array($email))->row_array();
	}

	function get_orders_with_customers()
	{

		$query = "SELECT customers.*, orders.*
					FROM orders
					LEFT JOIN customers ON orders.customers_id = customers.id
					GROUP BY orders.id
					ORDER BY orders.id DESC";

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
		return $this->db->query("SELECT orders.*, products.*
									FROM orders
									LEFT JOIN products_has_orders ON orders.id = products_has_orders.orders_id
									LEFT JOIN products ON products_has_orders.products_id = products.id
									WHERE orders.id = ?", array($id))->result_array();
	}
	function update_status($status, $id)
	{
		return $this->db->query("UPDATE orders SET order_status = ?
									WHERE orders.id = ?", array($status, $id))->result_array();
	}

	// function get_order_by_id($id)
	// {
	// 	return $this->db->query("SELECT customers.*,
	// 		orders.id AS orders_id, orders.order_date AS orders_date, orders.total, 
	// 		products.name AS products_name, products.description AS products_desc, products.category, products.price, products.inventory_count, products.quantity_sold, products.id as products_id,
	// 		products_has_orders.orders_id
	// 		FROM customers
	// 		RIGHT JOIN shipping_information on shipping_information.customers_id = customers.id
	// 		LEFT JOIN orders on customers.id = orders.customers_id
	// 		LEFT JOIN products_has_orders on orders.id = products_has_orders.orders_id
	// 		LEFT JOIN products on products_has_orders.products_id = products.id
	// 		WHERE orders.id = ?
	// 		ORDER BY products_id asc", array($id))->result_array();
	// }

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */