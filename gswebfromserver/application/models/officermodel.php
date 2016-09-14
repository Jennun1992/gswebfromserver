<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class officermodel extends CI_Model {

  public function officersall()
  {
    $this->db->join('faculty', 'officer.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'officer.DEPARTMENTID = department.DEPARTMENTID');

    $query = $this->db->get('officer');
    return $query->result_array();
  }
  public function OfficerInfo($input)
  {
    $this->db->where('officer.OFFICERCODE', $input);

    $this->db->join('faculty', 'officer.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'officer.DEPARTMENTID = department.DEPARTMENTID');

    $query = $this->db->get('officer');
    return $query->result_array();
  }

  public function OfficerDetail($input)
  {
    $this->db->where('officer.OFFICERID', $input);

    $this->db->join('faculty', 'officer.FACULTYID = faculty.FACULTYID', 'left');
    $this->db->join('department', 'officer.DEPARTMENTID = department.DEPARTMENTID', 'left');

    $query = $this->db->get('officer');
    return $query->result_array();
  }

  public function WorkByOfficer($input)
  {
    //WHERE Table1.Culumn , Value
    $this->db->where('officer_rmu_class.OFFICERID', $input);

    //Join inner
    //Table2 , Table1.FK = Table2.PK
    $this->db->join('rmu_class', 'officer_rmu_class.RMU_CLASSID = rmu_class.RMU_CLASSID');
    $this->db->join('officer', 'officer_rmu_class.OFFICERID = officer.OFFICERID');

    //Join Another Table
    //Table3 , Table2.FK = Table3.PK
    $this->db->join('course', 'rmu_class.COURSEID = course.COURSEID');

    // Select Table1
    $query = $this->db->get('officer_rmu_class');
    return $query->result_array();
  }

  public function AuthenOfficer($input)
  {
    $this->db->where('USERCODE',$input['userName']);
    $this->db->where('USERPASS',$input['password']);
    $query = $this->db->get('user_group');
    return $query->result_array();

  }

  public function SaveOfficerPic($input)
  {
    $this->db->where('OFFICERID', $input['OFFICERID']);
    $this->db->update('officer', $input);
  }
}
