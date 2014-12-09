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
      redirect('/welcome/search/');
    }
    else
    {
      //invalid login - redirect to login page, display errors
      $errors[] = 'Invalid credentials, please try again.';
      $this->session->set_flashdata('errors', $errors);
      redirect('/welcome/admin/');
    }
  }

}

/* End of file admins.php */
/* Location: ./application/controllers/admins.php */