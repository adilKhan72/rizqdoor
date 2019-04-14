<?php

class Employer extends CI_Controller {
	
	public function index()
	{
		 $this->login();
	}
	public function login()
	{
		 $user = $this->session->userdata('user_email');
		#checking if user is logged in or not... if logged in then redirect to dashboard.
		if($user ==! NULL ){
			return redirect('employer/dashboard');
		}
                
                #loading cookie helper.
                $this->load->helper('cookie');
                
                if(isset($_COOKIE["email"])){
                
                $this->load->model('employermodel');
                $password = $_COOKIE["password"];
                $empem = $_COOKIE["email"];

                if(1 == $this->employermodel->sessionstatecheck($empem)){
                
                if ($this->employermodel->loginsubmit($empem,$password)){
                #if the query run successfully
                $userid = $this->employermodel->loginsubmit($email,$password);

                # Creating Session.
                $this->load->library('session');

                #assignign email to session for user login.
                $this->session->set_userdata(['user_email'=> $email, 'user_id' => $userid]);

                $this->session->set_flashdata('loginsuccess', ' Logged in Successfully');
                        
                #redirecting to another method in this controler.
                return redirect('employer/dashboard');
                }else{
                # invalid credentials dont login user...
                		$data2['invalid'] = " Email Or Password Incorrect ";
                        $this->load->view('employer-login',$data2);
                }
                
                }else{
                
                #loading login page from views
		$this->load->view('employer-login');
		if (isset($login)) {
			echo 'user login not allowed';
		}
                }
                
                }else{

                #loading login page from views
		$this->load->view('employer-login');
		if (isset($login)) {
			echo 'user login not allowed';
		}

                }
                
                
                
                
		
	}

	public function loginsubmit()
	{

		#validating form inputs.
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
		
		#checking if validation true or false
		if ($this->form_validation->run() == FALSE)
                {
                	#if validation is false then show errors in form on view page

                	#setting validation error class and element in html 
                	$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');

                	#loading form again that we can show occured errors
                        $this->load->view('employer-login');

                }
                else
                {
                	# Else if form validate the above criteria 
                	# Take data inputted through form for interacting with db

                	$email = $this->input->post('email');
                	$password = $this->input->post('password');

                	#loading model 
                	$this->load->model('employermodel');

                	#loading function from model and passing data to it .

                	#at same time checking if the query runs output true or false.

                	if ($this->employermodel->loginsubmit($email,$password)) {

                		#if the query run successfully
                		$userid = $this->employermodel->loginsubmit($email,$password);

                		# Creating Session.
                		$this->load->library('session');

                		#assignign email to session for user login.
                		$this->session->set_userdata(['user_email'=> $email, 'user_id' => $userid]);
                                
                                #loading cookie helper.
                                $this->load->helper('cookie');
                                
                                if(null !== $this->input->post('keepmelogin')){

                                #loading cookie helper.
                                $this->load->helper('cookie');
                                $this->employermodel->keepmeloginsessionstate($userid);

                                # Setting cookie.
                                set_cookie ("email",$email,3600);
	                        set_cookie ("password",$password,3600);

                                }else{
                                $this->employermodel->dontkeepmeloginsessionstate($userid);

                                delete_cookie ("email");
	                        delete_cookie ("password");

                                }
                                
                         $this->session->set_flashdata('loginsuccess', ' Logged in Successfully');
                        
                		#redirecting to another method in this controler.
                		 return redirect('employer/dashboard');

                	} else {
                		# invalid dont login user...
                		$data2['invalid'] = "Company Email Or Password Incorrect ";
                        $this->load->view('employer-login',$data2);
                	}
                }
		
	}
	public function signup()
	{
		$user = $this->session->userdata('user_email');
		#checking if user is logged in or not... if logged in then redirect to dashboard.
		if($user ==! NULL ){
			return redirect('employer/dashboard');
		}
		
		$this->load->view('employer-sign-up');
	}
	public function signupsubmit()
	{

		

	$this->form_validation->set_rules('companyname','Company Name','trim|required|is_unique[employer.companyname]');
		
		$this->form_validation->set_rules('city','City','trim|required|alpha');
		$this->form_validation->set_rules('country','Country','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|is_unique[employer.email]|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
		$this->form_validation->set_rules('passwordconfirm','Confirm Password','trim|required|matches[password]|min_length[8]');


		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
                        $this->load->view('employer-sign-up');

                }
                else
                {


                	#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db
                	$signupdata = $this->input->post(array('companyname', 'city','country','email','password'));

                	#loading model 
                	$this->load->model('employermodel');

                	#loading function from model and passign data to it 
                	#at same time checking if the query runs output true or false.
                	
                	//echo $this->employermodel->loginsubmit();
                	 if($this->employermodel->signupsubmit($signupdata) != NULL ){

			$this->session->set_flashdata('signupsuccess', 'Sign Up Successfully!');
			return redirect('employer/login');


                }
	}
}

public function editemployerdetails()
	{
#checking if user is logged in or not... if not then redirect
		$user = $this->session->userdata('user_id');
		if($user == NULL ){
			$this->session->set_flashdata('loginforjobposting', ' Please Login First for Job Posting');
			return redirect('employer/login');
		}

		$this->load->model('employermodel');
		$joblist = $this->employermodel->editemployerdetailsmodel($user);
		$this->load->view('employer-dashboard/editemployeedetails',['joblist1' => $joblist]);

}
public function editemployeedetailssubmit()
{
                   $this->form_validation->set_rules('companyname','Name','trim|required');
		$this->form_validation->set_rules('city','city','trim|required');
		$this->form_validation->set_rules('country','country','trim|required');
		$this->form_validation->set_rules('email','email','trim|required|valid_email');
		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<div class="formerror" style="color:red;">', '</div>');
                       $this->editemployerdetails();

                }
                 else
                {
  $employeedetails = $this->input->post(array('id','companyname', 'city','country','email'));
	    $this->load->model('employermodel');
		$this->employermodel->editemployeedetailssubmitmodel($employeedetails);
		 $this->session->set_flashdata('employeeupdated', 'Your info Updated Successfully!');
		 redirect('employer/editemployerdetails');
}
}

public function changepassword(){
    $user = $this->session->userdata('user_id');
        #checking if user is logged in or not... if not then redirect
    if($user == NULL ){
        $this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
        return redirect('employer/login');
    }
        $this->load->model('employermodel');
        $joblist = $this->employermodel->changepasswordmodel($user);
        $this->load->view('employer-dashboard/changepassword',['joblist1' => $joblist]);
}


public function editemployerpasswordsubmit(){
        $this->form_validation->set_rules('password','password','trim|required');
        if ($this->form_validation->run() == FALSE)
    {
        $this->form_validation->set_error_delimiters('<div class="formerror" style="color:red;">', '</div>');
        $this->changepassword();
    }else{
                    #else if form validate the above crieteria 
                    #take data inputed through form for interacting with db

            $editemployerpasswordsubmitmodel = $this->input->post(array('id','password'));
                    #loading model 
            
             $this->load->model('employermodel');

   //               #loading function from model and passign data to it 
   //               #at same time checking if the query runs output true or false.

   //               //echo $this->employermodel->loginsubmit();
            
            $this->employermodel->editemployerpasswordsubmitmodel($editemployerpasswordsubmitmodel);

            $this->session->set_flashdata('employerpasswordsupdate', 'Employer Password updated');
            return redirect('employer/changepassword');
            
        }
}
public function editcompanydetails()
	{
#checking if user is logged in or not... if not then redirect
		$user = $this->session->userdata('user_id');
		if($user == NULL ){
			$this->session->set_flashdata('loginforjobposting', ' Please Login First for Job Posting');
			return redirect('employer/login');
		}

		$this->load->model('employermodel');
		$joblist = $this->employermodel->editcompanydetailsmodel($user);
		$this->load->view('employer-dashboard/editcompanydetails',['joblist1' => $joblist]);

}


public function editcompanydetailssubmit()
	{

	    $this->form_validation->set_rules('companybranchname','Company Name','trim|required');
		$this->form_validation->set_rules('compinfo','Company info','trim');
		$this->form_validation->set_rules('howmanyemployees','how many employees','trim|required');
		$this->form_validation->set_rules('companyfield','Company Field','trim|required');
		$this->form_validation->set_rules('address','Company address','trim|required');
        $this->form_validation->set_rules('countrycode','Company phone country code','trim|required');
		$this->form_validation->set_rules('phone','Company phone','trim|required');
		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<div class="formerror" style="color:red;">', '</div>');
                       $this->editcompanydetails();

                }
                 else
                {
                    // $phone1 = $this->input->post('phone');
                    // $phone =  $this->input->post('countrycode');
	            $companydetails = $this->input->post(array('id','companybranchname', 'compinfo','howmanyemployees','companyfield','address','countrycode','phone'));
	    $this->load->model('employermodel');
		$this->employermodel->editcompanydetailssubmitmodel($companydetails);
		 $this->session->set_flashdata('companyupdated', 'Company Updated Successfully!');
		 redirect('employer/editcompanydetails');
	}
}
	public function Dashboard()
	{
		 $user = $this->session->userdata('user_email');
		#checking if user is logged in or not... if not then redirect
		if($user == NULL ){
			$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
			return redirect('employer/login');
		}
		
        $empid = $_SESSION['user_id'];
        $this->load->model('employermodel');
        $data1 = $this->employermodel->dashboardemp($empid);
        $data2 = $this->employermodel->dashboardcom($empid);
        
        $this->load->view('employer-dashboard/index',['data1' => $data1,'data2' => $data2]);


	}
	public function addmoreinfocom(){
	    $user = $this->session->userdata('user_email');
		#checking if user is logged in or not... if not then redirect
		if($user == NULL ){
			$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
			return redirect('employer/login');
		}
		
		$this->form_validation->set_rules('companybranchname','company branch name','trim|required');
		$this->form_validation->set_rules('compinfo','company information','trim');
		$this->form_validation->set_rules('howmanyemployees','Number of employees','trim|required');
         $this->form_validation->set_rules('countrycode','Company phone country code','trim|required');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|integer');
		$this->form_validation->set_rules('companyfield','company industory','trim|required');
		$this->form_validation->set_rules('address','company address','trim|required');


		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<span style="color:red; text-align:right;" >', '</span>');
                       // redirect('employer/Dashboard');
                        $this->Dashboard();
                }
                else
                {

                    $empid = $_SESSION['user_id'];
                	#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db
                	$comdatasub = $this->input->post(array('companybranchname','compinfo','howmanyemployees','countrycode','phone','companyfield','address'));

                	#loading model 
                	$this->load->model('employermodel');

                	#loading function from model and passign data to it 
                	#at same time checking if the query runs output true or false.
                	$comdatasub['employerid'] = $empid;
                	//echo $this->employermodel->loginsubmit();
                	 if($this->employermodel->comdatasub($comdatasub) != NULL ){

			        return redirect('employer/Dashboard');


                }
                }
		
	}
	public function logout(){
                $userid = $_SESSION['user_id'];

                #loading model 
                $this->load->model('employermodel');

                $this->employermodel->logoutsessionstate($userid);

		unset($_SESSION['user_email']);
		unset($_SESSION['user_id']);
                
		$this->session->set_flashdata('logooutsuccess', ' Logout Successfully Want to login again ?');
		return redirect('employer/login');
	}

    public function forgotpassword()
    {
         $user = $this->session->userdata('user_email');
        #checking if user is logged in or not... if logged in then redirect to dashboard.
        if($user ==! NULL ){
            return redirect('employer/dashboard');
        } 
                #loading login page from views
        $this->load->view('employeerforgotpassword');
        
    
    }

public function forgotpasswordsubmit()
    {
        
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');

        if ($this->form_validation->run() == FALSE)
                {
                    #if validation is false then show errors in form on view page

                    #setting validation error class and element in html 
                    $this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');

                    #loading form again that we can show occured errors
                    $this->load->view('employeerforgotpassword');

                }else{
                    # Else if form validate the above criteria 
                    # Take data inputted through form for interacting with db
                    $this->load->model('employermodel');

                    $email = $this->input->post('email');

                    if ($this->employermodel->forgotpasswordsubmit($email)) {

                    $emaildb = $this->employermodel->forgotpasswordsubmit($email);

                        $config = Array(
						'protocol' => 'mail',
						'smtp_host'=> 'smtp.gmail.com',
                        'smtp_port'=> '465',
                        'charset'  => 'utf-8',
                        'smtp_timeout' => '30',
						'smtp_user' => 'adilkhanengineer72@gmail.com',
						'smtp_pass' => '02011994',
						'smtp_crypto' => 'tls',
						'priority'  => '1'
					);
 
 
      
          
          $this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					// Set to, from, message, etc.
					$this->email->initialize($config);
					$this->email->from('adilkhanengineer72@gmail.com', 'RizqDoor');
					$this->email->to($emaildb->email); 
					$this->email->subject('Forgot Your RizqDoor Employer account Password ?');
					
					$this->email->message(
					'You have clicked on forgot password for your employer account 
					YOUR ACCOUNT PASSWORD FOR THIS EMAIL IS : '.$emaildb->password.'
					Please do not share your password publically.');  
					$result1 = $this->email->send();
                                        
                                        $data2['forgotpass'] = " Password has been sent to the email listed in forgot form PLEASE DO CHECK YOUR SPAM FOLDER IF EMAIL DOESNT APPEARED IN THE INBOX ";
                        $this->load->view('employer-login',$data2);
                        }else{

    # invalid dont login user...
                        $data2['invalid'] = " Email Incorrect or does not exist in our Database! ";
                        $this->load->view('employeerforgotpassword',$data2);

                        }

    }
}

	public function postjob()
	{
		 $user = $this->session->userdata('user_id');
		#checking if user is logged in or not... if not then redirect
		if($user == NULL ){
			$this->session->set_flashdata('loginforjobposting', ' Please Login First for Job Posting');
			return redirect('employer/login');
		}
		$this->load->view('post-a-job');
	}
	public function postjobsubmit()
	{
				$this->form_validation->set_rules('jobtitle','Job Title','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('discription','Job Discription','trim');
		$this->form_validation->set_rules('skills','skills','trim|required');
		$this->form_validation->set_rules('noposition','No Of Positions','trim|required|integer');
		$this->form_validation->set_rules('jobfield','Job Field','trim|required');
		$this->form_validation->set_rules('city','City','trim|required');
		$this->form_validation->set_rules('country','Country','trim|required');
		$this->form_validation->set_rules('exp','Experience','trim|required|integer');
        $this->form_validation->set_rules('currencytype','Currency Type','trim|required');
		$this->form_validation->set_rules('salary','Salary Range','trim|required|integer');
		$this->form_validation->set_rules('dayofduaration','Job duration in days','trim|integer');
		$this->form_validation->set_rules('gender','Gender','trim');
		$this->form_validation->set_rules('qualification','Qualification','trim|required');
		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
                        $this->load->view('post-a-job');

                }
                else
                {
                	#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db
                	$jobpostdata = $this->input->post(array('jobtitle', 'email','discription','skills','noposition','jobfield','city','country','exp','currencytype','salary','dayofduaration','gender','qualification'));

                	#loading model 
                	$this->load->model('employermodel');

                	#loading function from model and passign data to it 
                	#at same time checking if the query runs output true or false.
                	 
                	//echo $this->employermodel->loginsubmit();
                	 if($this->employermodel->postjobubmit($jobpostdata) != NULL ){
                	     
                	     if($this->employermodel->sendemailsubscribe($jobpostdata) != NULL )
                	{
                		$resultsubscription = $this->employermodel->sendemailsubscribe($jobpostdata);
                		 if( count($resultsubscription) ){
 
 $config = Array(
						'protocol' => 'mail',
						'smtp_host'=> 'smtp.gmail.com',
                        'smtp_port'=> '465',
                        'charset'  => 'utf-8',
                        'smtp_timeout' => '30',
						'smtp_user' => 'adilkhanengineer72@gmail.com',
						'smtp_pass' => '02011994',
						'smtp_crypto' => 'tls',
						'priority'  => '1'
					);
 
 
      foreach ($resultsubscription as $resultsubscription){
          
          $this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					// Set to, from, message, etc.
					$this->email->initialize($config);
					$this->email->from('adilkhanengineer72@gmail.com', 'RizqDoor');
					$this->email->to($resultsubscription->email); 
					$this->email->subject(' New Job Posted ');
					
					$this->email->message(
					'New Job has been posted Today 
					JOB TITLE IS : '.$jobpostdata['jobtitle'].'
					Required Skills are : '.$jobpostdata['skills'] . 
 ' To Unsubscribe your email from our job alert list please click on the link =  https://rizqdoor.com/users/unsubscribe');  
					$result1 = $this->email->send();
          
      }
                		     
	 }
                		 
                		 
                	}

			$this->session->set_flashdata('jobpostsuccess', 'Your Job Has Been Posted Successfully');
			return redirect('employer/dashboard');

		}
                }
	}
	
	
}