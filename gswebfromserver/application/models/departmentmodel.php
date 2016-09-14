<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departmentmodel extends CI_Model {

  public function departmentall()
  {
    $query = $this->db->get('department');
    return $query->result_array();
  }
}
