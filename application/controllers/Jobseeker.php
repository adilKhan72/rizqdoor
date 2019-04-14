<?php
class Jobseeker extends CI_Controller 
{

public function index()
	{

		echo'public index jobseekers';
	}	
public function login()
	{

		$this->load->helper('form');
		$this->load->view('jobseeker-login');	
	}
	public function loginsubmit()
	{
		$this->load->helper('form');
		echo 'form data submitted';
	}
	public function forgotpassjobseeker()
	{
		
		echo 'forgot password script function called';
		
	}
public function signup()
	{

		$this->load->helper('form');
		$this->load->view('jobseeker-sign-up');
	}
	public function signupsubmit()
	{
		
		echo 'form data submitted';
	}
	public function applyforjob()
	{
		$this->load->view('applyforjob');
	}
}