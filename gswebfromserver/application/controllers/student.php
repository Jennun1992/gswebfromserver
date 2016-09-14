<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

	function __construct()
	{
		parent::__construct();
    session_start();
	}
	public function index()
	{
    if(!isset($_SESSION) || count($_SESSION)<1)
		{
			redirect('Student/Login');
		} else {
			if($_SESSION['GROUPTYPE']=="" || $_SESSION['GROUPTYPE']!="STUDENT"){
				redirect('Student/Login');
			} else {
				redirect('Student/dashboard');
			}
		}

	}
	public function login()
	{
		$this->load->view('/Student/login');
	}

	public function authenstudent()
	{
		$input = array(
			'userName' => $this->input->post('userName'),
			'password' => MD5($this->input->post('password')),
		);

		$authen = $this->studentsmodel->authen-student($input);

		if(isset($authen) || count($authen)>0){
			$_SESSION['STUDENTCODE'] = $authen[0]['USERCODE'];
		 	$_SESSION['GROUPTYPE'] = $authen[0]['GROUPTYPE'];
			redirect('Student/StudentProfile');
			console.log($_SESSION['STUDENTCODE']);
		}
		else
		{
			redirect('Student');
		}
	}

	public function student-profile()
	{
		//Input
		 $student-id = $this->studentsmodel->get-student-id($_SESSION['STUDENTCODE']);
	   $input = $student-id[0]['STUDENTID'];
		//Array (Result, View)
		$data['Result'] = $this->studentsmodel->student-info($input);
		$_SESSION['STUDENTID']=$data['Result'][0]['STUDENTID'];

		$data['transcript'] = $this->studentsmodel->student-transcript-info($input);
		$StrQuery = array(
			'data' => $data,
			'menuactive'=>1,
			'View' => '/Student/Components/student-profile'
		);
	 	$_SESSION['LEVELID'] = $data['Result'][0]['LEVELID'];
		//Generate View
		$this->LoadPage($StrQuery);
	}

	public function adviser($param1='1'){
// echo $_POST['printdate'];
//
// 	die();
	// แต่งตั้งอาจารย์ที่ปรึกษา
		 $student-id = $_SESSION['STUDENTID'];
		  $param1 =$this->uri->segment(3);
		// ถ้ากดปุ่ม submit ให้ส่งค่าจาก form หน้าที่ 1 ไปหน้าเอกสาร ที่ 2
		// ให้ $param1 =2 และทำการ ดึงข้อมูลอาจารย์ที่ปรึกษาและนักศึกษามาแสดง
		if($param1 =='2'){
			if(isset($_POST['appoint_advisor_btn'])){
					 $data['adviser'] =$this->studentsmodel->adviser-info($_POST['adviser']);
			if(isset($_POST['sub_adviser1']))
					$data['sub_adviser1'] =$this->studentsmodel->adviser-info($_POST['sub_adviser1']);
			if(isset($_POST['sub_adviser2']))
					$data['sub_adviser2'] =$this->studentsmodel->adviser-info($_POST['sub_adviser2']);
			}//print_r($data['adviser']);
		}

		if($param1 =="3"){
			//ถ้าทำการกดปุ่มจากหน้า 2 หน้าเอกสาร เพื่อนำค่าจาก form เอกสารมาทำการบันทึกลง
				//ทำการ select appoint_adviser_is_thesis โดย check paper_type  แล้วเอา row ล่าสุด
				//เพื่อเอามา generate APPOINT_AVISER_ID
				//$lastrow = $this->studentsmodel->getLastRow("appoint_adviser_is_thesis",
			//		array('papertype' => $_POST['paper_type']));
				//$newrow =  count($lastrow)+1;
				//$appointAdviserId = $_POST['paper_type']."-".$student-id."-".$newrow;
				$data1 = array(
											//'APPOINT_AVISER_ID' => $appointAdviserId ,
										  'STUDENT_ID' 				=> $student-id,
										  'ADVISER_ID' 				=> $_POST['adviser_id'],
										  // 'papertype' 				=> $_POST['paper_type'],
											'SUBADVISER1'		=> isset($_POST['adviser1_id'])? $_POST['adviser1_id'] : "-",
											'SUBADVISER2'		=> isset($_POST['subadviser2_id'])? $_POST['subadviser2_id'] : "-",
											'ATTACHMENT_IS_THESIS1'				=> isset($_POST['attachfile1'])? $_POST['attachfile1'] : "-",
											'ATTACHMENT_IS_THESIS2'				=> isset($_POST['attachfile2'])? $_POST['attachfile2'] : "-",
										 	'APPOINT_AVISER_IS_THESIS_DATE'	=> date("Y-m-d"),
											'APPOINT_AVISER_IS_THESIS_TYPE' =>$_SESSION['LEVELID'] ==82 ? "AP-IS" : "AP-TS",
											);

				$this->studentsmodel->insert('appoint_adviser_is_thesis',$data1);
				$data['appointAdInfo'] = $this->studentsmodel->select('appoint_adviser_is_thesis',
						array('STUDENT_ID'=>$student-id),1,"");
				$data['param1']=3;
		}
		// echo "<pre>";
		// print_r($data);
		$data['menuactive']='2';//ให้เมนูด้านซ้าย active
		$data['student-info'] = $this->studentsmodel->student-info($student-id);
		$data['param1']=$param1;
		$data['adviser-list'] = $this->studentsmodel->adviser-list();
		$data['namepage']= $_SESSION['LEVELID'] ==82 ? 'ขอแต่งตั้งอาจารย์ที่ปรึกษาค้นคว้าอิสระ' :'ขอแต่งตั้งอาจารย์ที่ปรึกษาวิทยานิพนธ์' ;
		//$this->load->view('/Student/Adviser',$data);
		$StrQuery = array(
			'data' => $data,
			'menuactive'=>2,
			'View' => '/Student/Components/appoint-adviser'
		);
		$this->LoadPage($StrQuery);
	}

	public function ceqe($param1='1'){
		$student-id = $_SESSION['STUDENTID'];
		$param1 = $this->uri->segment(3);
		$_POST['STUDENTID']=	$student-id;
		if($param1 ==3){
			$this->session->set_userdata('ceqe_status', $this->uri->segment(3));
		}

		if($param1 ==2 || $param1 ==3){
			$data['student-info'] = $this->studentsmodel->student-info($student-id);
			$data['dateArr'] = $this->dateArray();

			if(isset($_POST['confirm'])){
				$papertype =$this->session->userdata('studentType')=="TS" ? "QE" : "CE";//"CE";
				$a = $this->studentsmodel->getLastRow('ce_qe_exam',array('ce_qe_type' => $papertype), 'ceqe_id' );
				$rowcount =  count($a)+1;
				$printyear = $_POST['printyear']-543;
				$_POST['ADVISERID'] = 1;
			 	$examyear = trim($_POST['examyear'])-543;
				$ceqe-id = $papertype."-".$_POST['STUDENTID']."-".$rowcount;
				$data = array(
											'CE_QE_EXAM_ID' => $ceqe-id,
											'ce_qe_type' =>$papertype,
											'STUDENTID' => $_POST['STUDENTID'],
											'ADVISERID' => $_POST['ADVISERID'],
											'ATTACH1' => isset($_POST['attach1']) ? $_POST['attach1'] : "-",
											'ATTACH2' => isset($_POST['attach2']) ? $_POST['attach2'] : "-",
											'ATTACH3' => isset($_POST['attach3']) ? $_POST['attach3'] : "-",
											'SEMESTER_EXAM' => $_POST['exam_semester'],
											'ADCADYEAR_EXAM' => $_POST['exam_acadyear'],
											'EXAM_DATE' =>$examyear."-".$_POST['printmonthhidden']."-".$_POST['examdate'],
											'EXAM_STATUS'=>2,
											'PRINT_DATE' => $printyear."-".date('m')."-".$_POST['printdate'],
										);
				$this->studentsmodel->insert('ce_qe_exam',$data);
				$doc_status = $papertype=="CE" ? 2 : 3;
				$this->studentsmodel->insert('document_index',
											array('doc_index_std_id'=>$_SESSION['STUDENTID'],'doc_index_doc_id'=>$ceqe-id,
											'doc_index_doc_status'=>$doc_status));

				$this->studentsmodel->update('studentmaster',array('procedure_study'=>$doc_status,
											'procedure_study_id'=>2),array('STUDENTID',$_SESSION['STUDENTID']));

				$this->session->set_userdata('print_status', $this->uri->segment(4));
				//ดึงข้อมูลการสอบ วัดคุณสมบัติของ user
				$data['ce_qe_info'] =$this->studentsmodel->select('ce_qe_exam',
											array('STUDENTID'=>$_SESSION['STUDENTID'],'CE_QE_EXAM_ID'=>$ceqe-id),1,'CE_QE_EXAM_ID');

				$data['examdate'] = $this->dateFormat($data['ce_qe_info'][0]['EXAM_DATE']);

				 $param1=3;
			}
		}
		if($param1 ==1){
			$condition = array('STUDENTID'=>$_SESSION['STUDENTID']);
			$data['ce_qe_info'] =$this->studentsmodel->Select('ce_qe_exam',$condition,'*','CE_QE_EXAM_ID');
		}
		$data['student-info'] = $this->studentsmodel->student-info($_SESSION['STUDENTID']);
		$data['menuactive']='3';
		$data['param1']=$param1;
	//	$data['ceqe'] = $this->studentsmodel->dashboardInfo($student-id);
		$data['transcriptInfo'] = $this->studentsmodel->student-iranscript-info($_SESSION['STUDENTID']);

		$data['is_thesis_propersal_exam'] =$this->studentsmodel->is_thesis_propersal_exam($_SESSION['STUDENTID']);
		//$data['examcount'] =count($data['ce_qe_info']);
		$data['namepage']= $_SESSION['LEVELID'] <90 ? 'ขอสอบประมวลผลความรู้' : 'ขอสอบวัดคุณสมบัติ';
		$data['papertype']= $_SESSION['LEVELID'] <90 ? 'IS' :'TS';
		//$this->load->view('/Student/Ceqe',$data);
		$StrQuery = array(
			'data' => $data,
			'menuactive'=>3,
			'View' => '/Student/Components/ceqe-exam'
		);
		$this->LoadPage($StrQuery);
	}

	public function send-topic-thesis-and-is($param1='1'){
		$student-id = $_SESSION['STUDENTID'];
		$data['param1']=$param1;

		if($param1 ==2){
			if(isset($_POST['topicPropersal'])){
				 if($_POST['name_th'] =="" || $_POST['name_en']==""){
					 $data['name_th_err'] = $_POST['name_th'] =="" ? "กรุณากรอกห้วข้อภาษาไทย" : "";
					 $data['name_en_err'] = $_POST['name_en'] =="" ? "กรุณากรอกห้วข้อภาษาอังกฤษ" : "";
					 $data['name_th']  ="";
	 				 $data['name_en']  ="";
					 $this->session->set_userdata("dataArr", $data);

					 redirect("/Student/send-topic-thesis-and-is/","refresh");
				 }
				 else{
					$lastrow = $this->studentsmodel->get-last-row('thesis',array('STUDENTID'=>$student-id),'STUDENTID');
					$thesiscode = "TP-".$student-id.count($lastrow)+1;
					$dataArr = array('THESISCODE'=>$thesiscode,'STUDENTID'=>$student-id,'THESISNAME' =>$_POST['name_th'] ,
												'THESISNAMEENG' =>$_POST['name_en'] );
					$this->studentsmodel->insert('thesis',$dataArr);
					$data['name_th'] =$_POST['name_th'];
					$data['name_en'] =$_POST['name_en'];
					$data['thesiscode'] = $thesiscode;
				}
				$param1 =2;
			}
		}
		else if($param1 ==3){


		}

		$data['namepage']='ยื่นหัวข้อภาคนิพนธ์';
		//$this->load->view('/Student/Termpaper',$data);
		$StrQuery = array(
			'data' => $data,
			'menuactive'=>4,
			'View' => '/Student/Components/send-topic-thesis-and-is'
		);
		$this->LoadPage($StrQuery);
	}

	public function defend-propersal-thesis-is($param1='1'){
		$data['confirm_insert_data'] =false;
		if(isset($_POST['confirmbtn'])){
			$data = array(
										'EXAM_PROPOSAL_ID' => 'D-IS-'.$_POST['STUDENT_ID'],
										'STUDENTID' => $_POST['STUDENT_ID'],
										'OFFICERID' => $_POST['ADVISER_ID']);

			$this->studentsmodel->insert('exam_proposal_thesis_is',$data);
			$data['confirm_insert_data'] =true;
		}
		$data['student-info'] = $this->studentsmodel->student-info($_SESSION['STUDENTID']);
	  $data['show_exampaper'] = $this->uri->segment(4);
		$data['menuactive']='5';
	  $data['param1']=$param1;
		$data['namepage']='ขอสอบภาคนิพนธ์';

		$StrQuery = array(
			'data' => $data,
			'menuactive'=>4,
			'View' => '/Student/Components/defend-propersal-thesis-is'
		);
		$this->LoadPage($StrQuery);
		//$this->load->view('/Student/Exams',$this->data);
	}

	public function defend-thesis-is($param1='1'){
		$data['confirm_insert_data'] =false;
		if(isset($_POST['confirmbtn'])){
			$data = array(
										'EXAM_PROPOSAL_ID' => 'D-IS-'.$_POST['STUDENT_ID'],
										'STUDENTID' => $_POST['STUDENT_ID'],
										'OFFICERID' => $_POST['ADVISER_ID']);

			$this->studentsmodel->insert('exam_proposal_thesis_is',$data);
			$data['confirm_insert_data'] =true;
		}
		$data['student-info'] = $this->studentsmodel->student-info($_SESSION['STUDENTID']);
	  $data['show_exampaper'] = $this->uri->segment(4);
		$data['menuactive']='5';
	  $data['param1']=$param1;
		$data['namepage']='ขอสอบภาคนิพนธ์';

		$StrQuery = array(
			'data' => $data,
			'menuactive'=>5,
			'View' => '/Student/Components/defend-thesis-is'
		);
		$this->LoadPage($StrQuery);
		//$this->load->view('/Student/Exams',$this->data);
	}

	public function graduated($param1='1'){
		$data['menuactive']='7';
		$data['param1']=$param1;
		$data['namepage']='ขอสำเร็จการศึกษา';
		$StrQuery = array(
			'data' => $data,
			'menuactive'=>6,
			'View' => '/Student/Components/graduated'
		);
		$this->LoadPage($StrQuery);
		//$this->load->view('/Student/Completions',$data);
	}

	public function search_student(){
		$data['student-info'] = $this->studentsmodel->student-all();
		$this->load->view('/Template/header-no-left-menu', $data);
		$this->load->view('/Student/SearchStudent');
		$this->load->view('/Template/Footer');
	}

	public function student_thesis_is_info(){
		$student_id = $this->uri->segment(3);
		$data['student_info'] = $this->studentsmodel->student_info($student_id);
		$data['std_ts_is_info'] = $this->studentsmodel->student_thesis_is_info($student_id);

		$this->load->view('/Template/header-no-left-menu', $data);
		$this->load->view('/Student/student_thesis_is_info');
		$this->load->view('/Template/footer');
	}

	public function teacher_info(){
	 	$input =  $this->uri->segment(3);
		$data['officer_info'] = $this->studentsmodel->adviser_info($input);
		$data['stds_in_adviser'] = $this->studentsmodel->thesis_adviser_list($input, 1, "T");
		$data['stds_in_subadviser'] = $this->studentsmodel->thesis_adviser_list($input, 2, "T");
		$data['stds_in_is_adviser'] = $this->studentsmodel->thesis_adviser_list($input, 1, "I");
		$data['stds_in_is_subadviser'] = $this->studentsmodel->thesis_adviser_list($input, 2, "I");

		$data['namepage']='ข้อมูลอาจารย์';
		$this->load->view('/Template/header-no-left-menu', $data);
		$this->load->view('/Teacher/Component/teacher-info');
		$this->load->view('/Template/footer');
	}

	public function load-lage($StrQuery)
	{
		// View
		$this->load->view('/Template/header', $StrQuery);
		$this->load->view($StrQuery['View']);
		$this->load->view('/Template/Footer');
	}




	public function dashboard(){
		$this->studentsmodel->student-info($_SESSION['OFFICERCODE']);
		$data['menuactive']='1';
		$data['namepage']='Dashboard';
		$this->load->view('/Student/dashboard',$data);
	}

	public function profile(){
		$data['menuactive']='1';
		$data['namepage']='Profile';
		$this->load->view('/Student/profile',$data);
	}








	public function termpaperconfirm(){
		$data['menuactive']='3';
		$data['namepage']='ยื่นหัวข้อภาคนิพนธ์';
		$this->load->view('/Student/termpaperconfirm',$data);
	}



	public function research($param1='1'){
		$this->data['menuactive']='6';
		$this->data['param1']=$param1;
		$this->data['namepage']='ผลงานวิจัย';
		$this->load->view('/Student/research',$this->data);
	}
	public function search_thesis($param1='1'){
		$this->data['menuactive']='6';
		$this->data['param1']=$param1;
		$this->data['namepage']='ค้นหางานภาคนิพนธ์';
		$this->load->view('/Search_thesis',$this->data);
	}
	public function searchdisst(){
		$data['menuactive']='5';
		$data['namepage']='ค้นหาภาคนิพนธ์';
		$this->load->view('/Student/searchdisst',$data);
	}


	public function search_research($param1='1'){
			$data['menuactive']='6';
			$data['param1']=$param1;
			$data['namepage']='ค้นหางานงานวิจัย';
			$this->load->view('/search_research',$data);
		}

		public function test(){

			$data['menuactive']='6';
			$data['param1']=$param1;
			$data['namepage']='ค้นหางานงานวิจัย';
			$this->load->view('/Papers/test',$data);


		}
		public function date-format($value){
			$examdate = explode("-",$value);
			$data['date']  = $examdate[2]=="00" ? "" : $examdate[2];
			$thaimonth=
			array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม",
						"สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
			$data['month'] = date($examdate[1])=="00" ?  "" : $thaimonth[date($examdate[1])-1] ;
			$data['year'] = $examdate[0]=="0000" ? "" : $examdate[0]+543;

			return $data;
		}
		public function date-array(){
			$tempDate="";

			for($i=1; $i<=31;$i++){
				if($i<10)
					$tempDate .= "<option value='0".$i."'>".$i."</option>";
				else
					$tempDate .= "<option value='".$i."'>".$i."</option>";
			}
			$tempMonth=
			array(["มกราคม","01"],["กุมภาพันธ์","02"],["มีนาคม","03"],["เมษายน","04"],["พฤษภาคม","05"],["มิถุนายน","06"],["กรกฎาคม","07"],
			["สิงหาคม","08"],["กันยายน","09"],["ตุลาคม","10"],["พฤศจิกายน","11"],["ธันวาคม","12"]);
			$data['arrDate']=$tempDate;
			$data['arrMonth'] = $tempMonth;
			return $data;
		}

}?>
