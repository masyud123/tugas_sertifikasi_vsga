<?php

class Model_login extends CI_Model
{
	public function cek_login()
	{
		$email		= set_value('email');
		$password	= set_value('password');
		
		$this->input->post('email', $email);
		$this->input->post('password', $password);
		
		$where = array(
			'email' => $email,
			'password' => $password,
		);

		$result = $this->db->get_where('t_user', $where);
		// $auth = mysql_fetch_assoc($result);
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}
