<?php

class Postedjob extends CI_Controller 
{
	public function joblisting()
	{
		#checking if user is logged in or not... if not then redirect
		$user = $this->session->userdata('user_id');
		if($user == NULL ){
			$this->session->set_flashdata('loginforjobposting', ' Please Login First for Job Posting');
			return redirect('employer/login');
		}
		$this->load->model('employermodel');
		$empid = $_SESSION['user_id'];
		$data1 = $this->employermodel->dashboardemp($empid);
		$this->load->model('postedjobmodel');
		$joblist = $this->postedjobmodel->listingpostedjobs();
		$this->load->view('employer-dashboard/posted-jobs',['joblist1' => $joblist,'data1'=>$data1]);
	}



	public function deletejob($delete)
	{
		//echo $delete;
		#loading model 
        $this->load->model('postedjobmodel');

        if ($this->postedjobmodel->deletingpostedjobs($delete)) {
                		$this->session->set_flashdata('jobdeleted', 'Job Deleted Successfully!');
                		#redirecting to another method in this controler.
                		 redirect('postedjob/joblisting');

                	}
	}

	public function viewcandidateappliedjob($appcandidate)
	{

		$this->load->model('postedjobmodel');
		$joblist = $this->postedjobmodel->candidateappliedjob($appcandidate);
		$joblist2 = $this->postedjobmodel->jobofappcan($appcandidate);
		$this->load->model('employermodel');
		$empid = $_SESSION['user_id'];
		$data1 = $this->employermodel->dashboardemp($empid);
         $this->load->view('employer-dashboard/posted-jobs-applied-candidates',['joblist' => $joblist,'joblist2' => $joblist2,'data1'=>$data1]);
	}
	public function editjob($editjobid)
	{
	    	#checking if user is logged in or not... if not then redirect
		$user = $this->session->userdata('user_id');
		if($user == NULL ){
			$this->session->set_flashdata('loginforjobposting', ' Please Login First for Job Posting');
			return redirect('employer/login');
		}
		$this->load->model('employermodel');
		$empid = $_SESSION['user_id'];
		$data1 = $this->employermodel->dashboardemp($empid);
		$this->load->model('postedjobmodel');
		$joblist = $this->postedjobmodel->editjob($editjobid);
		$this->load->view('employer-dashboard/editjob',['joblist1' => $joblist,'data1'=>$data1]);
	}
	public function editjobsubmit()
	{
	    $this->form_validation->set_rules('jobtitle','Job Title','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('discription','Job Discription','trim|required');
		$this->form_validation->set_rules('skills','skills','trim|required');
		$this->form_validation->set_rules('noposition','No Of Positions','trim|required|integer');
		$this->form_validation->set_rules('jobfield','Job Field','trim|required');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('country','Country','trim|required|alpha');
		$this->form_validation->set_rules('exp','Experience','trim|required|integer');
		$this->form_validation->set_rules('currencytype','Currency Type','trim|required');
		$this->form_validation->set_rules('salary','Salary Range','trim|required|integer');
		$this->form_validation->set_rules('qualification','qualification Range','trim|required');
		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
                	$editjobid = $this->input->post('id');
                       $this->editjob($editjobid);
                }
                else
                {
	            $jobpostdata = $this->input->post(array('id','jobtitle', 'email','discription','skills','noposition','jobfield','city','country','exp','currencytype','salary','gender','qualification'));
	    $this->load->model('postedjobmodel');
		$this->postedjobmodel->editjobsubmit($jobpostdata);
		$this->session->set_flashdata('jobupdated', 'Job Updated Successfully!');
		$editjobid = $this->input->post('id');
		//$this->editjob($editjobid);
		redirect('Postedjob/editjob/'.$editjobid);
	}
	}
}
?>
