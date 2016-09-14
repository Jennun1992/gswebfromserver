<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentsmodel extends CI_Model {

  public function studentall()
  {
    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    $this->db->join('procedure_study', 'studentmaster.procedure_study_id = procedure_study.procedure_study_id');
    $this->db->join('studentstatus', 'studentmaster.STUDENTID = studentstatus.STUDENTID');
    $query = $this->db->get('studentmaster');

    return $query->result_array();
  }
  public function getstudent_id($input){
    $this->db->where('studentmaster.STUDENTCODE', $input);
    $query = $this->db->get('studentmaster');
    return $query->result_array();
  }
  public function student_info($input)
  {
    $this->db->where('studentmaster.STUDENTID', $input);
    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    $this->db->join('procedure_study', 'studentmaster.procedure_study_id = procedure_study.procedure_study_id');
    $this->db->join('studentstatus', 'studentmaster.STUDENTID = studentstatus.STUDENTID');
    $this->db->join('program', 'program.PROGRAMID = studentmaster.PROGRAMID');
    $this->db->join('campus', 'campus.CAMPUSID = studentmaster.CAMPUSID');
    //$this->db->join('adviser', 'adviser.STUDENTID = studentmaster.STUDENTID');
    $this->db->join('prefix', 'prefix.PREFIXID = studentmaster.PREFIXID');
    $query = $this->db->get('studentmaster');

    return $query->result_array();
  }

  public function studentbyofficer($input)
  {

    $this->db->where('officer_relation_OFFICERID', $input);
    //Join
    $this->db->join('studentmaster', 'officer_relation.officer_relation_STUDENTID = studentmaster.STUDENTID');
    $this->db->join('officer', 'officer_relation.officer_relation_OFFICERID = officer.OFFICERID');
    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    $this->db->join('procedure_study', 'studentmaster.procedure_study_id = procedure_study.procedure_study_id');
    $this->db->join('studentstatus', 'studentmaster.STUDENTID = studentstatus.STUDENTID');
    //Result
    $query = $this->db->get('officer_relation');
    return $query->result_array();
  }

  function studenttranscript_info($id){
    $this->db->distinct();
    $this->db->join('course', 'course.COURSEID = transcript.COURSEID');
    $this->db->where(array('STUDENTID' => $id));
    $query = $this->db->get('transcript');
    return $query->result_array();
  }

  function adviser_list(){
    $query = $this->db->get('officer');
    return $query->result_array();
  }

  function adviser_info($id){
    $this->db->join('prefix','prefix.PREFIXID = officer.PREFIXID');
    $this->db->join('department','department.DEPARTMENTID = officer.DEPARTMENTID');
    $this->db->join('faculty','faculty.FACULTYID = officer.FACULTYID');
    $this->db->where(array('OFFICERID' => $id));
    $query = $this->db->get('officer');
    return $query->result_array();
  }

  public function select($table,$data,$limit,$index){
    $this->db->where($data);
    $limit!="*"? $this->db->limit($limit) : "";
    $query = $this->db->get($table);
    return $query->result_array();
  }
  public function is_thesis_propersal_exam($id){
    // $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
    $query = $this->db->get_where('exam_proposal_thesis_is', array('STUDENTID' => $id));
    return $query->result_array();
  }
  public function get_last_row($table,$condition,$id){
    $this->db->select($id);
    $this->db->from($table);
    $this->db->where($condition);
    $this->db->order_by($id,'DESC');
    $query = $this->db->get();
    return $query->result_array();
  }
  public function insert($table,$data){
    $this->db->insert($table,$data);
    $query = $this->db->get();
  }

  public function update($table, $data, $where){
    $this->db->where($where[0], $where[1]);
    $this->db->update('mytable', $data);
  }

  public function student_thesis_is_info($student_id){
    $this->db->where('studentmaster.STUDENTID', $student_id);
    $this->db->join('adviser','adviser.STUDENTID = studentmaster.STUDENTID');
    $this->db->join('officer','officer.OFFICERID = adviser.OFFICERID');
    $this->db->join('thesis','thesis.STUDENTID = studentmaster.STUDENTID');
    $query = $this->db->get('studentmaster');
    return $query->result_array();
  }

  public function thesis_all()
  {
    // $this->db->where('OFFICERID', $input);

    //Join
    $this->db->join('studentmaster', 'thesis.STUDENTID = studentmaster.STUDENTID');

    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    $this->db->join('procedure_study', 'studentmaster.procedure_study_id = procedure_study.procedure_study_id');
    $this->db->join('studentstatus', 'studentmaster.STUDENTID = studentstatus.STUDENTID');

    $query = $this->db->get('thesis');
    return $query->result_array();
  }

  public function thesis_adviser_list($officeid, $adv_type, $ts_type)
  {
    $this->db->where(array('adviser.OFFICERID'=>$officeid, 'adviser.ADVISERTYPE'=>$adv_type,
                            'thesis.THESISTYPE'=>$ts_type));
    $this->db->join('studentmaster', 'adviser.STUDENTID = studentmaster.STUDENTID');
    $this->db->join('thesis', 'thesis.STUDENTID = studentmaster.STUDENTID');
    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $query = $this->db->get('adviser');
    return $query->result_array();
  }
  public function thesis_sub_adviser_list()
  {
    $this->db->join('studentmaster', 'thesis.STUDENTID = studentmaster.STUDENTID');

    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    $this->db->join('procedure_study', 'studentmaster.procedure_study_id = procedure_study.procedure_study_id');
    $this->db->join('studentstatus', 'studentmaster.STUDENTID = studentstatus.STUDENTID');

    $query = $this->db->get('thesis');
    return $query->result_array();

  }
  public function research_all()
  {
    // $this->db->where('OFFICERID', $input);

    //Join
    $this->db->join('studentmaster', 'research.STUDENTID = studentmaster.STUDENTID');

    $this->db->join('faculty', 'studentmaster.FACULTYID = faculty.FACULTYID');
    $this->db->join('department', 'studentmaster.DEPARTMENTID = department.DEPARTMENTID');
    $this->db->join('levelid', 'studentmaster.LEVELID = levelid.LEVELID');
    $this->db->join('procedure_study', 'studentmaster.procedure_study_id = procedure_study.procedure_study_id');
    $this->db->join('studentstatus', 'studentmaster.STUDENTID = studentstatus.STUDENTID');

    $query = $this->db->get('research');
    return $query->result_array();
  }

  public function authenstudent($input)
  {
    $this->db->where('USERCODE',$input['userName']);
    $this->db->where('USERPASS',$input['password']);
    $query = $this->db->get('user_group');
    return $query->result_array();

  }
}
