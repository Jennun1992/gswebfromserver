<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class facultymodel extends CI_Model {

  public function facultyall()
  {
    $query = $this->db->get('faculty');
    return $query->result_array();
  }
}
