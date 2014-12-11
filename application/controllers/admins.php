<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {
  public function login_user()
  {
    $this->load->model('Admin');
    $admin = $this->Admin->get_admin_by_email($this->input->post('email'));
    if($admin && $admin['password'] == $this->input->post('password'))
    {
      //user validation successful, set user session, redirect to profile function
      $admin_info = array(
          'admin_id' => $admin['id'],
          'admin_is_logged_in' => TRUE,
          'name' => $admin['first_name']);
      $this->session->set_userdata($admin_info);
      redirect('/admins/orders/');

    }
    else
    {
      //invalid login - redirect to login page, display errors
      $errors[] = 'Invalid credentials, please try again.';
      $this->session->set_flashdata('errors', $errors);
      redirect('/welcome/admin/');
    }
  }

  public function orders()
  {
    if ($this->session->userdata('admin_is_logged_in'))
    {
      $this->load->model('Admin');
      $results['customers'] = $this->Admin->get_orders_with_customers();
      // var_dump($results);
      // die();
      $this->load->view('search', $results);
 
    }
  }

  public function order_id($id)
  {
    // var_dump($id);
    // die();
    $this->load->model('Admin');
    $row['customer'] = $this->Admin->get_orders_with_customer($id);
    $row['shipping'] = $this->Admin->get_orders_with_shipping($id);
    $row['products'] = $this->Admin->get_orders_with_products($id);
    // var_dump($row);
    // die();

    $this->load->view('order_id',$row);

  }

  public function change_status()
  {
    $this->load->model('Admin');
    $status = $this->input->post('status');
    $id = $this->input->post('id');
    $status_details = array(
                      'status' => $status);
    //update database
    $stats_update = $this->Admin->update_status($status_details, $id);
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect("/Welcome/admin");
  }
}

/* End of file admins.php */
/* Location: ./application/controllers/admins.php */