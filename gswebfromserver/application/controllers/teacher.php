<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class teacher extends CI_Controller {

	public function __construct(){
		parent::__construct();
		session_start();
	}

	

	public function loadpage($StrQuery)
	{
		//Data
		$data['Result'] = $StrQuery['Result'];
		 //echo "<pre>";
		// print_r($data['Result']);
		 //exit();

		// View
		$this->load->view('/Template/Header', $data);
		$this->load->view($StrQuery['View']);
		$this->load->view('/Template/Footer');
	}

	public function index()
	{
		//Input
		$input = $_SESSION['USERCODE'];
		//Array (Result, View)
		$Result = $this->officermodel->OfficerInfo($input);
		$StrQuery = array(
			'Result' => $Result,
			'View' => '/Teacher/Pages/OfficerProfile'
		);
		$_SESSION['OFFICERID']=$Result[0]['OFFICERID'];
		//Generate View

		$this->loadpage($StrQuery);
	}

	public function StudentByOfficer()
	{
		//Input
		$input = $_SESSION['OFFICERID'];
		//Array (Result, View)
		$StrQuery = array(
			'Result' => $this->studentsmodel->StudentByOfficer($input),
			'View' => '/Teacher/Pages/StudentByOfficer'
		);
		//Generate View
		$this->loadpage($StrQuery);
	}

	public function WorkByOfficer()
	{
		//Input
		$input = $_SESSION['OFFICERID'];
		//Array (Result, View)
		$StrQuery = array(
			'Result' => $this->officermodel->WorkByOfficer($input),
			'View' => '/Teacher/Pages/WorkByOfficer'
		);
		//Generate View
		$this->loadpage($StrQuery);
	}

	public function SearchStudent()
	{
		//Array (Result, View)
		$StrQuery = array(
			'Result' => $this->studentsmodel->StudentsAll(),
			'View' => 'Template/SearchStudent'
		);
		//Generate View
		$this->loadpage($StrQuery);
	}

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

	public function OfficerLogin()
	{
		$this->load->view('/Teacher/Pages/AuthenOfficer');
	}

	public function Officerlogout()
	{
		session_destroy();
		redirect('home');
	}

	public function AuthenOfficer()
	{
		$input = array(
			'userName' => $this->input->post('userName'),
			'password' => MD5($this->input->post('password')),
		);

		$Authen = $this->officermodel->AuthenOfficer($input);

		if(count($Authen)>0){
			session_destroy();
			$_SESSION['USERCODE'] = $Authen[0]['USERCODE'];
			$_SESSION['GROUPTYPE'] = $Authen[0]['GROUPTYPE'];
			redirect('teacher');
			
		}
		else
		{
			redirect('teacher');
		}
	}
	public function changepicprofile()
		{
			$OFFICERID = $_SESSION['OFFICERID'];
			$OFFICERCODE = $_SESSION['USERCODE'];
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
//echo "<pre>";
			// print_r($input);
			// exit();
			$this->officermodel->SaveOfficerPic($input);
			redirect('teacher');
		}
}
