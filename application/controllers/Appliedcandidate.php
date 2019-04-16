<?php

class Appliedcandidate extends CI_Controller 
{
	public function candidatelisting()
	{
		#checking if user is logged in or not... if not then redirect
		$user = $this->session->userdata('user_id');
		if($user == NULL ){
			$this->session->set_flashdata('loginforjobposting', ' Please Login First for Job Posting');
			return redirect('employer/login');
		}

		$empid = $_SESSION['user_id'];
		$this->load->model('appliedcandidatemodel');
		$this->load->model('employermodel');
		$candidatelist = $this->appliedcandidatemodel->listingcandidate();
		$data1 = $this->employermodel->dashboardemp($empid);
		$this->load->view('employer-dashboard/candidates',['joblist'=>$candidatelist,'data1' => $data1]);
	}
 
	public function removecandidate($candidateid)
	{
		$this->load->model('appliedcandidatemodel');
		if ($this->appliedcandidatemodel->removecandidatemodel($candidateid)){
                $this->session->set_flashdata('candidatedeleted', 'candidate Deleted Successfully!');
                		return redirect('Appliedcandidate/candidatelisting');
                	}
	}


}