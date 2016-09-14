<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class programsmodel extends CI_Model {

  public function ProgramsAll()
  {
    $this->db->join('faculty', 'program.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'program.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'program.LEVELID = levelid.LEVELID');
    $query = $this->db->get('program');
    return $query->result_array();
  }
  public function programstrucbyprogram($input)
  {
    $this->db->where('programstructure.PROGRAMID', $input);
    $query = $this->db->get('programstructure');
    return $query->result_array();
  }
  public function programswithstd($input)
  {
    $this->db->where('studentmaster.PROGRAMID', $input);
    $query = $this->db->get('studentmaster');
    return $query->num_rows();
  }

  public function ProgramsFilter($input)
  {

    $this->db->like('PROGRAMNAME', $input['PROGRAMNAME']);
    $this->db->or_like('PROGRAMCODENAME', $input['PROGRAMNAME']);
    $this->db->or_like('PROGRAMABB', $input['PROGRAMNAME']);

    $this->db->like('FACULTYNAME', $input['FACULTYNAME']);
    $this->db->like('DEPARTMENTNAME', $input['DEPARTMENTNAME']);
    $this->db->like('LEVELNAME', $input['LEVELNAME']);

    if ($input['PROGRAMYEARfor']!="" && $input['PROGRAMYEARto']!="") {
      $this->db->where('PROGRAMYEAR >=', $input['PROGRAMYEARfor']);
      $this->db->where('PROGRAMYEAR <=', $input['PROGRAMYEARto']);
    }
    else if ($input['PROGRAMYEARfor']!="" && $input['PROGRAMYEARto']=="") {
      $this->db->where('PROGRAMYEAR >=', $input['PROGRAMYEARfor']);
    }
    else if ($input['PROGRAMYEARfor']=="" && $input['PROGRAMYEARto']!="") {
      $this->db->where('PROGRAMYEAR <=', $input['PROGRAMYEARto']);
    }
    else {
      $this->db->or_where('PROGRAMYEAR >', "1979");
    }
    // $this->db->where('PROGRAMYEAR >=', $input['PROGRAMYEARfor']);
    // $this->db->where('PROGRAMYEAR <=', $input['PROGRAMYEARto']);

    $this->db->join('faculty', 'program.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'program.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'program.LEVELID = levelid.LEVELID');
    $query = $this->db->get('program');

    return $query->result_array();
  }

  public function programdetail($input)
  {
    $this->db->where('programofficer.PROGRAMID', $input);

    $this->db->join('program', 'programofficer.PROGRAMID = program.PROGRAMID');
    //
    $this->db->join('faculty', 'program.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'program.DEPARTMENTID = department.DEPARTMENTID');

    $this->db->join('officer', 'programofficer.OFFICERID = officer.OFFICERID');

    $query = $this->db->get('programofficer');
    return $query->result_array();
  }
  public function programinfo($input)
  {
    $this->db->where('PROGRAMID', $input);

    $this->db->join('levelid', 'program.PROGRAMID = program.PROGRAMID');
    $this->db->join('faculty', 'program.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'program.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('officer', 'program.OFFICERID = officer.OFFICERID');

    $query = $this->db->get('program');
    return $query->result_array();
  }

  public function insertnewprogram($input)
  {
    $this->db->insert('program', $input);
  }
  public function updateprogram($input)
  {
    $this->db->where('PROGRAMID', $input['PROGRAMID']);
    $this->db->update('program', $input);

  }
  public function insertNewProgStruc($input)
  {
	  $this->db->insert('programstructure', $input);
	  }
  public function updateProgStruc($input)
  {
	  $this->db->where('PROGRAMSTRUCTUREID',$input['PROGRAMSTRUCTUREID']);
	  $this->db->update('programstructure', $input);
	  }
  public function delProgStruc($input)
  {
	  $this->db->where('PROGRAMSTRUCTUREID', $input);
	  $this->db->delete('programstructure');
	  }
	public function delprogram($input) 
	{
		$this->db->where('PROGRAMID', $input);
	  	$this->db->delete('program');
		
	  $this->db->where('PROGRAMID', $input);
	  $this->db->delete('programstructure');
	}
}
