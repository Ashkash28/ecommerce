<?php
class Cart extends CI_Model {

  //needed to build the cart
  public function get_all_products()
  {
    return $this->db->query("SELECT * FROM products")->result_array();
  }

  public function get_by_id($id)
  {
    $query = 'SELECT * FROM products WHERE id = ?';
    return $this->db->query($query, $id)->row_array();
  }

  //needed to submit order after Pay is clicked
  //first, add customer and billing info to database and return customer id
  public function create_customer($billing)
  {
  	$query = "INSERT INTO `ecommerce`.`customers` 
		(`first_name`, `last_name`, `address`, 
		`address_2`, `city`, `state`, `zipcode`, 
		`card`, `security_code`, `exp_month`, `exp_year`, 
		`created_at`, `updated_at`) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,Now(),Now())";
	$values = array($billing['bfname'],$billing['blname'],$billing['baddress'],
		 $billing['baddress2'], $billing['bCity'],$billing['bState'], $billing['bZipcode'], 
		$billing['cardnum'],$billing['security'], $billing['month'],$billing['year']);
   $this->db->query($query, $values);
   $customer_id=mysql_insert_id();
   return  $customer_id;
  }

  //needed to submit order after Pay is clicked
  //second, add shipping info to databsse and return shipping id
  public function create_shipping($shipping)
  {
  	$price=rand(2, 20);
  	$query = "INSERT INTO `ecommerce`.`shipping_information` 
		(`first_name`, `last_name`, `address`, 
		`address_2`, `city`, `state`, `zipcode`, `price`,
		`created_at`, `updated_at`) 
		VALUES (?,?,?,?,?,?,?,?,Now(),Now())";
	$values = array($shipping['sfname'],$shipping['slname'],$shipping['saddress'],
		 $shipping['saddress2'], $shipping['sCity'],$shipping['sState'], $shipping['sZipcode'],$price);
   $this->db->query($query, $values);
   $shipping_id=mysql_insert_id();
   return  $shipping_id;
  }

  public function shipping_price($shipping_id)
  {
  	$query="SELECT price from shipping_information 
  			WHERE shipping_information.id=$shipping_id";
  	return $this->db->query($query)->row_array();
  }

  //needed to submit order after Pay is clicked
  //third, add order info to databsse and return order id
  public function create_order($customer_id,$shipping_id)
  {
  $query = "INSERT INTO `ecommerce`.`orders` 
		(`order_date`, `customers_id`, `shipping_information_id`,
		`created_at`, `updated_at`) 
		VALUES (Now(),$customer_id,$shipping_id,Now(),Now())";
   $this->db->query($query);
   $order_id=mysql_insert_id();
   return  $order_id;
  }

  //needed to submit order after Pay is clicked
  //fourth, add order details to the product_has_orders table
 
  public function add_to_products_has_orders($order_id,$key,$value)
  {  	
	$query = "INSERT INTO `ecommerce`.`products_has_orders` 
			(`orders_id`, `products_id`, `products_quantity`) 
			VALUES ($order_id, $key, $value)";
	$this->db->query($query);

	$query1 = "SELECT price FROM products where id=$key";
	return $this->db->query($query1)->row_array();	
  }

    //needed to submit order after Pay is clicked
   //update orders table with total
  public function update_order($total, $order_id)
  {
  	$query = "UPDATE `ecommerce`.`orders` 
  			SET `total`=$total WHERE `id`=$order_id";
  			return $this->db->query($query);
  }

}
