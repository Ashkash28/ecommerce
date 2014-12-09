<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model 
{

	function get_admin_by_email($email)
	{
		return $this->db->query('SELECT * FROM users WHERE email = ?', array($email))->row_array();
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */