<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		session_start();
	}
	public function index()
	{
		$this->load->view('Template/authen');
	}
	public function authen()
	{
		$input = array (
			'userName' => $this->input->post('userName'),
			'password' => MD5($this->input->post('password')),
		);

		$Authen = $this->usermodel->authen_user($input);
		
		//echo "<pre>";
//		print_r($Authen);
//		exit();
		if(count($Authen)>0)
		{
			$_SESSION['USERCODE'] = $Authen[0]['USERCODE'];
			$_SESSION['GROUPTYPE'] = $Authen[0]['GROUPTYPE'];
			
			if($_SESSION['GROUPTYPE']=="TEACHER")
			{
				redirect('teacher');
			} 
			else if($_SESSION['GROUPTYPE']=="ADMIN")
			{
				redirect('graduate');
			}
			else if($_SESSION['GROUPTYPE']=="STUDENT")
			{
				redirect('student');
			}
			else 
			{
				redirect('home');
			}
		}
		else
		{
			redirect('home');
		}
			
	}
	
	public function logout()
	{
		session_destroy();
		redirect('home');
	}
}
