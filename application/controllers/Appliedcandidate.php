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


		$this->load->model('appliedcandidatemodel');
		$candidatelist = $this->appliedcandidatemodel->listingcandidate();
		
		$this->load->view('employer-dashboard/candidates',['joblist'=>$candidatelist]);
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