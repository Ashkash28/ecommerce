<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

 
//product page functions
 public function index()
 {
  $this->load->model('Products_model');
  $product['product']=$this->Products_model->get_all_products();
  $this->load->view('products',$product);
 }

  public function product_desc()
 {
  $this->load->model('Products_model');
  $product['product']=$this->Products_model->get_by_id(1);
  $cat=$product['product']['category'];
  $product['prod_pictures']=$this->Products_model->get_picture_by_id(1);
  $product['categories']=$this->Products_model->get_by_category($cat);
  $product['all_pictures']=$this->Products_model->get_all_pictures();
  $this->load->view('product_desc',$product);
 }

 
//shopping cart functions
  public function cart()
 {
  $this->load->view('cart');
 }

   public function pay_success()
 {
  $this->load->view('pay_success');
 }

 public function add_item_to_cart()
  {
    echo "got to add to cart";

    // get item info from post
    $product_id = $this->input->post('product_id', TRUE);
    $quantity = $this->input->post('quantity', TRUE);
    // get current cart
    $cart = $this->session->userdata('cart');    

    // determine if item exists in cart
    if(array_key_exists($product_id, $cart))
    {
      // item already in cart, update value (quantity) for this item's key in cart
      $cart['total_items'] +=  $quantity;
      $cart[$product_id] += $quantity;
      $this->session->set_userdata('cart', $cart);
    }
    else
    {
      // add new key=>value pair to cart for new item id=>quantity
      $cart['total_items'] += $quantity;
      $cart[$product_id] = $quantity;
      // populate cart in session
      $this->session->set_userdata('cart', $cart);
    }
    redirect('/Welcome/product_desc');
  }



//admin controller functions

  public function orders()
 {
  $this->load->view('orders');
 }

   public function order_id()
 {
  $this->load->view('order_id');
 }

   public function search()
 {
  $this->load->view('search');
 }

  public function admin()
 {
  $this->load->view('admin_login');
 }

   public function add_product_page()
 {
  $this->load->view('add_product_page');
 }

    public function product_delete()
 {
  $this->load->view('product_delete');
 }






 


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */