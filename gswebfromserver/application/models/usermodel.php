<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usermodel extends CI_Model {

  public function authen_user($input)
  {
	$this->db->where('USERCODE', $input['userName']);
    $this->db->where('USERPASS', $input['password']);
    $query = $this->db->get('user_group');
    return $query->result_array();
  }
}
