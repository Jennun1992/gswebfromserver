<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class graduatemodel extends CI_Model {

  public function AuthenGraduate($input)
  {
    $this->db->where('USERCODE',$input['userName']);
    $this->db->where('USERPASS',$input['password']);
    $query = $this->db->get('user_group');
    return $query->result_array();
  }

  public function StudentsAll()
  {
    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    // $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    // $this->db->join('studenstatus', 'studentmaster.STUDENTID = studenstatus.STUDENTID');
    $query = $this->db->get('studentmaster');
    return $query->result_array();
  }

  public function StudentByOfficer($input)
  {
    $this->db->where('OFFICERID', $input);
    $query = $this->db->get('studentmaster');
    return $query->result_array();
  }

  public function WorkByOfficer($input)
  {
    $this->db->where('OFFICERID', $input);
    $query = $this->db->get('studentmaster');
    return $query->result_array();
  }
}
