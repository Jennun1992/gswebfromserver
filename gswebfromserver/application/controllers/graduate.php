<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class graduate extends CI_Controller {

	public function __construct(){
		parent::__construct();
		session_start();
	}

	public function loadpage($StrQuery) // Generate Webpage
	{
		//Data
		$data['Result'] = $StrQuery['Result'];
		// View
		$this->load->view('/Template/Header', $data);
		$this->load->view($StrQuery['View']);
		$this->load->view('/Template/Footer');
	}

	// Manage Student
	public function index()
	{
		$StrQuery = array(
			'Result' => $this->studentsmodel->StudentsAll(),
			'View' => 'Graduate/Pages/GraduateManageStudent'
		);
		$this->loadpage($StrQuery);
	}
	public function StudentInfo()
	{
		$input = $this->uri->segment(3);
		$StrQuery = array(
			'Result' => $this->studentsmodel->StudentInfo($input),
			'View' => 'Template/StudentInfo'
		);
		$this->loadpage($StrQuery);
	}

	// Manage Officer
	public function graduatemanageofficer()
	{
		$StrQuery = array(
			'Result' => $this->officermodel->officersall(), // Query
			'View' => 'Graduate/Pages/ManageOfficers' // View
		);

		$this->loadpage($StrQuery);
	}
	public function officerinfo()
	{
		$input = $this->uri->segment(3); // Query ID from URI

		// Multi Table
		$StrQuery = array(
			'Result' => array(
				'OfficerDetail' => $this->officermodel->OfficerDetail($input),
				'StudentByOfficer' => $this->studentsmodel->StudentByOfficer($input),
				'WorkByOfficer' =>$this->officermodel->WorkByOfficer($input)
			),
			'View' => 'Template/OfficerInfo'
		);

		$this->loadpage($StrQuery);
	}

	// Manage Course
	public function GraduateManagePrograms()
	{
		$allprog = $this->programsmodel->programsall();
		$i = 0;
		for ($r = 1; $r <= count($allprog); $r++) {
			$input = $allprog[$i]['PROGRAMID'];
			$allprog[$i]['AMT_STD'] = $this->programsmodel->programswithstd($input);
			$i++;
		}
		$StrQuery = array(
			'Result' => $allprog,
			'View' => 'Graduate/Pages/ManagePrograms'
		);
		$this->loadpage($StrQuery);
	}
	public function GraduateProgramsFilter()
	{
		$input = array(
			'PROGRAMNAME' => $this->input->post('programname'),
			'FACULTYNAME' => $this->input->post('facultyname'),
			'DEPARTMENTNAME' => $this->input->post('departmentname'),
			'LEVELNAME' => $this->input->post('levelname'),
			'PROGRAMYEARfor' => $this->input->post('programyearfor'),
			'PROGRAMYEARto' => $this->input->post('programyearto'),
		);
		$allprog = $this->programsmodel->ProgramsFilter($input);
		$i = 0;
		for ($r = 1; $r <= count($allprog); $r++) {
			$input = $allprog[$i]['PROGRAMID'];
			$allprog[$i]['AMT_STD'] = $this->programsmodel->programswithstd($input);
			$i++;
		}
		$StrQuery = array(
			'Result' => $allprog,
			'View' => 'Graduate/Pages/ManagePrograms'
		);
		$this->loadpage($StrQuery);
	}
	public function programdetail() {

		$input = $this->uri->segment(3);

		$StrQuery = array(
			'Result' => $this->programsmodel->programdetail($input),
			'View' => 'Template/ProgramsDetail'
		);
		//echo "<pre>";
		//			print_r($StrQuery);
		//			exit();
		$this->loadpage($StrQuery);
	}

	public function FormEditProgram() {

		$input = $this->uri->segment(3);

		$StrQuery = array(
			'Result' => array(
				'STDYLEVEL' => $this->lvlstudymodel->lvlall(),
				'FACULTY' => $this->facultymodel->facultyall(),
				'DEPARTMENT' => $this->departmentmodel->departmentall(),
				'OFFICER' => $this->officermodel->officersall(),
				'PROGRAM' => $this->programsmodel->programinfo($input),
				'PROGRAM_STRUC' => $this->programsmodel->programstrucbyprogram($input)),
				'View' => 'Graduate/Pages/FormAddProgram');


				//					 echo "<pre>";
				//					 print_r($StrQuery);
				//					 exit();

				$this->loadpage($StrQuery);
			}
			
			public function DelProgram(){
				$input = $this->uri->segment(3);
				$this->programsmodel->delprogram($input);
				redirect('graduate/GraduateManagePrograms');
			}
			public function SaveProgram(){
				$input = array(
					//รหัสหลักสูตร
					'PROG_NUM'  => $this->input->post('PROG_NUM'),
					'PROGRAMID' => $this->input->post('PROGRAMID'),
					//ชื่อหลักสูตร
					'PROGRAMCODENAME' => $this->input->post('PROGRAMCODENAME'),
					'PROGRAMCODENAMEENG' => $this->input->post('PROGRAMCODENAMEENG'),
					'PROGRAMYEAR' => $this->input->post('PROGRAMYEAR'),
					// //ชื่อปริญญาและสาขาวิชา
					'LEVELID' => $this->input->post('LEVELID'),
					'PROGRAMNAME' => $this->input->post('PROGRAMNAME'),
					'PROGRAMABB' => $this->input->post('PROGRAMABB'),
					'PROGRAMNAMEENG' => $this->input->post('PROGRAMNAMEENG'),
					'PROGRAMABBENG' => $this->input->post('PROGRAMABBENG'),
					// //อาจารย์ประจำหลักสูตร
					'OFFICERID' => $this->input->post('OFFICERID'),
					// //คชจ.
					'PROGRAM_COST' => $_POST['PROGRAM_COST'],
					//วันที่
					'CREATEDATE' =>$this->input->post('CREATEDATE'),
					'OPENDATE' => $this->input->post('OPENDATE'),
					'CLOSEDATE' => $this->input->post('CLOSEDATE'),

					//คณะ สาขา
					'FACULTYID' => $this->input->post('FACULTYID'),
					'DEPARTMENTID' => $this->input->post('DEPARTMENTID'),
				);



				if ($input['PROG_NUM']=="") {
					$this->programsmodel->insertnewprogram($input);

				} else {
					$this->programsmodel->updateprogram($input);
				}
				redirect('graduate/FormEditProgram/'.$input['PROGRAMID']);
			}

			public function SaveStructure() {

				$input = array (
				'PROGRAMSTRUCTUREID' => $this->input->post('PROGRAMSTRUCTUREID'),
				'PROGRAMID' => $this->input->post('PROGRAMID'),
				'PROGRAMPLAN' => $this->input->post('PROGRAMPLAN'),
				'MAXCREDIT' => $this->input->post('MAXCREDIT'),
				'PROGRAMPLAN' => $this->input->post('PROGRAMPLAN'),
			);


			if($input['PROGRAMSTRUCTUREID']==""){
				//Save New
				$this->programsmodel->insertNewProgStruc($input);
			} else {
				//Edit
				$this->programsmodel->updateProgStruc($input);
			}

			redirect('graduate/FormEditProgram/'.$input['PROGRAMID']);
		}
		public function DelStructure() {

			$input = $this->uri->segment(3);
			$ProgID = $this->uri->segment(4);

			$this->programsmodel->delProgStruc($input);

			redirect('graduate/FormEditProgram/'.$ProgID);
		}

		public function GraduatePrintingCourse() {
			if ($this->uri->segment(3) === FALSE) {
				redirect('/GraduateManageCourse/0');
			} else {
				$input = $this->uri->segment(3);
			}

			$StrQuery = array(
				'Result' => "",
				'View' => 'Graduate/Pages/GraduatePrintingCourse'
			);
			$this->loadpage($StrQuery);
		}

		// Search
		public function SearchThesis()
		{
			//Array (Result, View)
			$StrQuery = array(
				'Result' => $this->studentsmodel->ThesisAll(),
				'View' => 'Template/SearchThesis'
			);

			//Generate View
			$this->loadpage($StrQuery);
		}

		public function SearchResearch()
		{
			//Array (Result, View)
			$StrQuery = array(
				'Result' => $this->studentsmodel->ResearchAll(),
				'View' => 'Template/SearchResearch'
			);
			//Generate View
			$this->loadpage($StrQuery);
		}

		public function GraduateLogin()
		{
			$this->load->view('/Graduate/Pages/Authen');
		}

		public function Graduatelogout()
		{
			session_destroy();
			redirect('home');
		}


		public function changepicprofile()
		{
			$OFFICERID = $this->input->post('OFFICERID');
			$OFFICERCODE = $this->input->post('OFFICERCODE');
			$file = $_FILES["image"]["tmp_name"];
			$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
			$new_file = 'img_'.$OFFICERID.'_'.$OFFICERCODE.'.'.$ext;

			if( $ext == "png" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG"  )
			{
				copy($file, "image/officer/".$new_file);
			}
			else
			{
				echo $ext;
				exit();
			}

			// $this->load->library('image_lib');
			// $config['image_library'] = 'gd2';
			// $config['source_image']	= "./image/officer/".$new_file;
			// //$config['create_thumb'] = TRUE;
			// $config['maintain_ratio'] = TRUE;
			// $config['height']	= 155;
			// // $config['width'] = 250;
			// $config['new_image'] = "./image/officer/".$new_file;
			// $this->image_lib->initialize($config);
			// $this->image_lib->resize();

			$input = array(
				'OFFICERID' => $OFFICERID,
				'OFFICER_PIC' => $new_file
			);
			// echo "<pre>";
			// print_r($input);
			// exit();
			$this->officermodel->SaveOfficerPic($input);
			redirect('graduate/OfficerInfo/'.$OFFICERID);
		}
	}
