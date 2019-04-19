<?php
class Users extends CI_Controller {
	
	public function index()
	{

	$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user !== NULL ){
		//$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/logedjobseekerindex');
	}
	header('Cache-Control: no cache'); //disable validation of form by the browser
	$this->load->model('usersmodel');
	$this->load->library('pagination');

	$config = [
		'base_url' => base_url('users/index'),
		'per_page' => 4,
		'total_rows' => $this->usersmodel->listingpostedjobscount(),
		'full_tag_open' => '<div class="pagination">',
		'full_tag_close' => '</div>',
		'next_tag_open' => '<div>',
		'next_tag_close' => '</div>',
		'prev_tag_open' => '<div>',
		'prev_tag_close' => '</div>',
		'last_tag_open' => '<div>',
		'last_tag_close' => '</div>',
		'first_tag_open' => '<div>',
		'first_tag_close' => '</div>',
		'num_tag_open' => '<div>',
		'num_tag_close' => '</div>',
		'cur_tag_open' => '<div class="active"><a>',
		'cur_tag_close' => '</a></div>'
	];
	$this->pagination->initialize($config);

	$joblist1 = $this->usersmodel->listingpostedjobs($config['per_page'],$this->uri->segment(3));

	$joblistbycountry = $this->usersmodel->listingjobsbycountry();


	$joblistbyindustory = $this->usersmodel->listingjobsbyindustory();

	$this->load->view('index',['joblist1' => $joblist1 ,'joblistbyindustory' => $joblistbyindustory ,'joblistbycountry' => $joblistbycountry]);

}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function logedjobseekerindex()
	{
		$user = $this->session->userdata('jobseekeruser_email');
		if($user == NULL ){
		//$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/index');
	}
	header('Cache-Control: no cache'); //disable validation of form by the browser
	$this->load->model('usersmodel');
	$this->load->library('pagination');

	$config = [
		'base_url' => base_url('users/logedjobseekerindex'),
		'per_page' => 4,
		'total_rows' => $this->usersmodel->listingpostedjobscount(),
		'full_tag_open' => '<div class="pagination">',
		'full_tag_close' => '</div>',
		'next_tag_open' => '<div>',
		'next_tag_close' => '</div>',
		'prev_tag_open' => '<div>',
		'prev_tag_close' => '</div>',
		'last_tag_open' => '<div>',
		'last_tag_close' => '</div>',
		'first_tag_open' => '<div>',
		'first_tag_close' => '</div>',
		'num_tag_open' => '<div>',
		'num_tag_close' => '</div>',
		'cur_tag_open' => '<div class="active"><a>',
		'cur_tag_close' => '</a></div>'
	];
	$this->pagination->initialize($config);

	$joblist1 = $this->usersmodel->listingpostedjobsforloggedinuser($config['per_page'],$this->uri->segment(3));

	$joblistbycountry = $this->usersmodel->listingjobsbycountry();

	$joblistbyindustory = $this->usersmodel->listingjobsbyindustory();

	$jobseekeruserid = $_SESSION['jobseekeruser_id'];
	$loggeduserdetails = $this->usersmodel->dashboardjobseeker($jobseekeruserid);

	$this->load->view('indexforloggedinjobseeker',['joblist1' => $joblist1 ,'joblistbyindustory' => $joblistbyindustory ,'joblistbycountry' => $joblistbycountry,'loggeduserdetails' => $loggeduserdetails]);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////// user login sign up start /////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function login()
{
	$jobseekeruser = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if logged in then redirect to dashboard.
	if($jobseekeruser ==! NULL ){
		return redirect('users/dashboard');
	}

                #loading cookie helper.
	$this->load->helper('cookie');

	if(isset($_COOKIE["jobseekeremail"])){

		$this->load->model('usersmodel');
		$password = $_COOKIE["jobseekerpassword"];
		$email = $_COOKIE["jobseekeremail"];

		if(1 == $this->usersmodel->sessionstatecheck($email)){

			if ($this->usersmodel->loginsubmit($email,$password)){
                #if the query run successfully
				$jobseekeruserid = $this->employermodel->loginsubmit($email,$password);

                # Creating Session.
				$this->load->library('session');

                #assignign email to session for user login. 
				$this->session->set_userdata(['jobseekeruser_email'=> $email, 'jobseekeruser_id' => $jobseekeruserid]);

				$this->session->set_flashdata('loginsuccess', ' Logged in Successfully');

                #redirecting to another method in this controler.
				return redirect('users/dashboard');
			}else{
                # invalid credentials dont login user...
				$data2['invalid'] = " Email Or Password Incorrect ";
				$this->load->view('user-login',$data2);
			}

		}else{

                #loading login page from views
			$this->load->view('user-login');
			if (isset($login)) {
				echo 'user login not allowed';
			}
		}

	}else{

                #loading login page from views
		$this->load->view('user-login');
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
		$this->load->view('user-login');
	}
	else
	{
                	# Else if form validate the above criteria 
                	# Take data inputted through form for interacting with db
		$email = $this->input->post('email');
		$password = $this->input->post('password');
                	#loading model 
		$this->load->model('usersmodel');
                	#loading function from model and passing data to it .
                	#at same time checking if the query runs output true or false.
		if ($this->usersmodel->loginsubmit($email,$password)) {
                		#if the query run successfully
			$jobseekeruserid = $this->usersmodel->loginsubmit($email,$password);
                		# Creating Session.
			$this->load->library('session');
                		#assignign email to session for user login.
			$this->session->set_userdata(['jobseekeruser_email'=> $email, 'jobseekeruser_id' => $jobseekeruserid]);
                                #loading cookie helper.
			$this->load->helper('cookie');
			if(null !== $this->input->post('keepmelogin')){
                                #loading cookie helper.
				$this->load->helper('cookie');
				$this->usersmodel->keepmeloginsessionstate($jobseekeruserid);
                                # Setting cookie.
				set_cookie ("email",$email,3600);
				set_cookie ("password",$password,3600);
			}else{
				$this->usersmodel->dontkeepmeloginsessionstate($jobseekeruserid);
				delete_cookie ("email");
				delete_cookie ("password");
			}
			$this->session->set_flashdata('loginsuccess', ' Logged in Successfully');
                		#redirecting to another method in this controler.
			return redirect('users/dashboard');

		} else {
                		# invalid dont login user...
			$data2['invalid'] = " Email Or Password Incorrect ";
			$this->load->view('user-login',$data2);
		}
	}

}

public function Dashboard()
{
	$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user == NULL ){
		$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/login');
	}

	$jobseekeruserid = $_SESSION['jobseekeruser_id'];
	$jobseekeruseremail = $_SESSION['jobseekeruser_email'];
	$this->load->model('usersmodel');
	$data1 = $this->usersmodel->dashboardjobseeker($jobseekeruserid);
	$data2 = $this->usersmodel->dashboardjobseekerjobscounts($jobseekeruserid);
	$data4 = $this->usersmodel->dashboardjobseekersubscriptioncounts($jobseekeruseremail);
	$this->load->view('jobseeker-dashboard/index',['data1' => $data1,'data2'=>$data2,'data4'=>$data4]);		
	
}

public function jobsapplied()
{
	$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user == NULL ){
		$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/login');
	}
	$jobseekeruserid = $_SESSION['jobseekeruser_id'];
	$this->load->model('usersmodel');
	$data1 = $this->usersmodel->dashboardjobseeker($jobseekeruserid);
	$data2 = $this->usersmodel->jobsapplied($jobseekeruserid);
	$this->load->view('jobseeker-dashboard/jobsapplied',['data1' => $data1,'data2'=>$data2]);		
}














public function index3(){

	// load base_url
	$this->load->helper('url');
  
	// load view
	$this->load->view('jobseeker-dashboard/user_view');
   }
  


public function jobsappliedsingle(){
	// POST data
	$postData = $this->input->post('username');
	$this->load->model('usersmodel');
	$data1 = $this->usersmodel->jobsappliedsingle($postData);
	echo json_encode($data1);
}



public function testwebservice($postData){
	// POST data
	//$postData = $this->input->post('username');
	$this->load->model('usersmodel');
	$data1 = $this->usersmodel->testwebservice($postData);
	echo json_encode($data1);
}



public function logout(){
	$jobseekeruserid = $_SESSION['jobseekeruser_id'];

                #loading model 
	$this->load->model('usersmodel');

	$this->usersmodel->logoutsessionstate($jobseekeruserid);

	unset($_SESSION['jobseekeruser_email']);
	unset($_SESSION['jobseekeruser_id']);

	$this->session->set_flashdata('logooutsuccess', ' Logout Successfully Want to login again ? ');
	return redirect('users/login');
}

public function signup()
{
	$jobseekeruseremail = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if logged in then redirect to dashboard.
	if($jobseekeruseremail ==! NULL ){
		return redirect('users/dashboard');
	}

	$this->load->view('user-signup');
}






public function changepassword(){
	$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user == NULL ){
		$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/login');
	}
		$this->load->model('usersmodel');
		$joblist = $this->usersmodel->changepasswordmodel($user);
		$this->load->view('jobseeker-dashboard/changepassword',['data1' => $joblist]);
}
public function editjobseekerpasswordsubmit(){
		$this->form_validation->set_rules('password','password','trim|required');
		if ($this->form_validation->run() == FALSE)
	{
		$this->form_validation->set_error_delimiters('<div class="formerror" style="color:red;">', '</div>');
		$this->changepassword();
	}else{
					#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db

			$editjobseekerpasswordsubmitmodel = $this->input->post(array('id','password'));
                	#loading model 
			
			 $this->load->model('usersmodel');

   //             	#loading function from model and passign data to it 
   //              	#at same time checking if the query runs output true or false.

   //              	//echo $this->employermodel->loginsubmit();
			
			$this->usersmodel->editjobseekerpasswordsubmitmodel($editjobseekerpasswordsubmitmodel);

			$this->session->set_flashdata('jobseekerpasswordsupdate', 'Jobseeker Password updated');
			return redirect('users/changepassword');
			
		}
}
public function editjobseekerdetails(){
	$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user == NULL ){
		$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/login');
	}
		$this->load->model('usersmodel');
		$joblist = $this->usersmodel->editjobseekerdetailsmodel($user);
		$this->load->view('jobseeker-dashboard/editjobseekerdetails',['data1' => $joblist]);
}

public function editjobseekerdetailssubmit(){

$this->form_validation->set_rules('name','Full Name','trim|required');
	$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	$this->form_validation->set_rules('dateofbirth','Date of Birth','trim|required');
	$this->form_validation->set_rules('gender','gender','trim|required');
	$this->form_validation->set_rules('country','country','trim|required');
	$this->form_validation->set_rules('city','city','trim|required');
	$this->form_validation->set_rules('nationality','nationality','trim|required');
	$this->form_validation->set_rules('landlinenumber','land line number','trim|required');
	$this->form_validation->set_rules('countrycode','country code','trim|required');
	$this->form_validation->set_rules('mobilenumber','mobile number','trim|required');
	$this->form_validation->set_rules('experience','experience','trim');
	$this->form_validation->set_rules('industory','industory','trim|required');
	$this->form_validation->set_rules('currencytype','currency type','trim|required');
	$this->form_validation->set_rules('currentsalery','current salery','trim|required');
	$this->form_validation->set_rules('desiredsalary','desired salery','trim|required');


	if ($this->form_validation->run() == FALSE)
	{
		$this->form_validation->set_error_delimiters('<div class="formerror" style="color:red;">', '</div>');
		$this->editjobseekerdetails();
	}else{
					#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db

			$editjobseekerdetailssubmitmodel = $this->input->post(array('id','email', 'name','dateofbirth','gender','country','city','nationality','landlinenumber','countrycode','mobilenumber','experience','industory','currencytype','currentsalery','desiredsalary'));
                	#loading model 
			
			 $this->load->model('usersmodel');

   //             	#loading function from model and passign data to it 
   //              	#at same time checking if the query runs output true or false.

   //              	//echo $this->employermodel->loginsubmit();
			
			$this->usersmodel->editjobseekerdetailssubmitmodel($editjobseekerdetailssubmitmodel);

			$this->session->set_flashdata('jobseekerdetailsupdate', 'Jobseeker details updated');
			return redirect('users/editjobseekerdetails');
			
		}
}


public function signupsubmit()
{

	$this->form_validation->set_rules('name','Full Name','trim|required');
	$this->form_validation->set_rules('email','Email','trim|required|is_unique[userjobseeker.email]|valid_email');
	$this->form_validation->set_rules('dateofbirth','Date of Birth','trim|required');
	$this->form_validation->set_rules('gender','gender','trim|required');
	$this->form_validation->set_rules('country','country','trim|required');
	$this->form_validation->set_rules('city','city','trim|required');
	$this->form_validation->set_rules('nationality','nationality','trim|required');
	$this->form_validation->set_rules('landlinenumber','land line number','trim|required');
	$this->form_validation->set_rules('countrycode','country code','trim|required');
	$this->form_validation->set_rules('mobilenumber','mobile number','trim|required');
	$this->form_validation->set_rules('experience','experience','trim');
	$this->form_validation->set_rules('industory','industory','trim|required');
	$this->form_validation->set_rules('currencytype','currency type','trim|required');
	$this->form_validation->set_rules('currentsalery','current salery','trim|required');
	$this->form_validation->set_rules('desiredsalary','desired salery','trim|required');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
	$this->form_validation->set_rules('passwordconfirm','Confirm Password','trim|required|matches[password]|min_length[8]');


	if ($this->form_validation->run() == FALSE)
	{
		$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
		$this->load->view('user-signup');
	}
	else
	{

                	//echo"form submitted";
		$usermail = $this->input->post('email');
		$res = preg_replace("/[^a-zA-Z]/", "", $usermail);
		$config['upload_path']          = './registered_user_cv_uploads/';
		$config['allowed_types']        = 'pdf|docx|doc';
		$config['max_size']             = '1500';
		$config['file_name']   =  $res;
		$config['overwrite']   =  TRUE;

		$this->load->library('upload', $config);

		if ( $this->upload->do_upload('cvupload') == FALSE) {

			$upload_error = $this->upload->display_errors();

			$this->load->view('user-signup',['upload_error'=> $upload_error]);

		}else{
					#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db

			$signupdata = $this->input->post(array('email', 'name','dateofbirth','gender','country','city','nationality','landlinenumber','countrycode','mobilenumber','experience','industory','currencytype','currentsalery','desiredsalary','password'));
			$res = $this->upload->data('file_name');
			$signupdata['resume'] = $res;

			$this->upload->data('file_name');
                	#loading model 
			$this->load->model('usersmodel');

                	#loading function from model and passign data to it 
                	#at same time checking if the query runs output true or false.

                	//echo $this->employermodel->loginsubmit();
			if($this->usersmodel->signupsubmit($signupdata) != NULL ){

				$this->session->set_flashdata('signupsuccess', 'Sign Up Successfully!');
				return redirect('users/login');
			}
		}
	}
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////// user login sign up end ///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


public function jobsbycountry($jobid)
{

		header('Cache-Control: no cache'); //disable validation of form by the browser
		$this->load->model('usersmodel');
		$this->load->library('pagination');

		$config = [
			'base_url' => base_url('users/jobsbycountry/'.$jobid),
			'per_page' => 4,
			'total_rows' => $this->usersmodel->jobsbycountrycount($jobid),
			'full_tag_open' => '<div class="pagination">',
			'full_tag_close' => '</div>',
			'next_tag_open' => '<div>',
			'next_tag_close' => '</div>',
			'prev_tag_open' => '<div>',
			'prev_tag_close' => '</div>',
			'last_tag_open' => '<div>',
			'last_tag_close' => '</div>',
			'first_tag_open' => '<div>',
			'first_tag_close' => '</div>',
			'num_tag_open' => '<div>',
			'num_tag_close' => '</div>',
			'cur_tag_open' => '<div class="active"><a>',
			'cur_tag_close' => '</a></div>'
		];

		$this->pagination->initialize($config);

		$joblist1 = $this->usersmodel->jobsbycountrymodel($config['per_page'],$this->uri->segment(4),$jobid);

		$this->load->view('jobsbycountry',['joblist1' => $joblist1]);



		// $this->load->model('usersmodel');
		// $singlejob = $this->usersmodel->jobsbyindustorymodel($jobid);
		// $this->load->view('singlejob',['singlejob' => $singlejob]);
	}



   public function forgotpassword()
    {
         $user = $this->session->userdata('jobseekeruser_email');
        #checking if user is logged in or not... if logged in then redirect to dashboard.
        if($user ==! NULL ){
            return redirect('users/dashboard');
        } 
                #loading login page from views
        $this->load->view('userjobseekerforgotpassword');
        
    
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
                    $this->load->view('userjobseekerforgotpassword');

                }else{
                    # Else if form validate the above criteria 
                    # Take data inputted through form for interacting with db
                    $this->load->model('usersmodel');

                    $email = $this->input->post('email');

                    if ($this->usersmodel->forgotpasswordsubmit($email)) {

                    $emaildb = $this->usersmodel->forgotpasswordsubmit($email);

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
                        $this->load->view('userjobseekerforgotpassword',$data2);

                        }

    }
}

	public function jobsbyindustory($jobid)
	{

		header('Cache-Control: no cache'); //disable validation of form by the browser
		$this->load->model('usersmodel');
		$this->load->library('pagination');

		$config = [
			'base_url' => base_url('users/jobsbyindustory/'.$jobid),
			'per_page' => 4,
			'total_rows' => $this->usersmodel->jobsbyindustorycount($jobid),
			'full_tag_open' => '<div class="pagination">',
			'full_tag_close' => '</div>',
			'next_tag_open' => '<div>',
			'next_tag_close' => '</div>',
			'prev_tag_open' => '<div>',
			'prev_tag_close' => '</div>',
			'last_tag_open' => '<div>',
			'last_tag_close' => '</div>',
			'first_tag_open' => '<div>',
			'first_tag_close' => '</div>',
			'num_tag_open' => '<div>',
			'num_tag_close' => '</div>',
			'cur_tag_open' => '<div class="active"><a>',
			'cur_tag_close' => '</a></div>'
		];
		$this->pagination->initialize($config);

		$joblist1 = $this->usersmodel->jobsbyindustorymodel($config['per_page'],$this->uri->segment(4),$jobid);


		$this->load->view('jobsbyindustory',['joblist1' => $joblist1]);



		// $this->load->model('usersmodel');
		// $singlejob = $this->usersmodel->jobsbyindustorymodel($jobid);
		// $this->load->view('singlejob',['singlejob' => $singlejob]);
	}

public function singlejobforresjobseker($jobid)
	{
		$user = $this->session->userdata('jobseekeruser_email');
		if($user == NULL ){
		//$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/singlejob/'.$jobid);
	}
		$this->load->model('usersmodel');
		$singlejob = $this->usersmodel->singlejobuserforregjobseeker($jobid);

		$jobseekeruserid = $_SESSION['jobseekeruser_id'];
		$loggeduserdetails = $this->usersmodel->dashboardjobseeker($jobseekeruserid);

		$this->load->view('singlejobforresjobseker',['singlejob' => $singlejob,'loggeduserdetails' => $loggeduserdetails]);
	}
		
		public function easyapply($singlejob1){

		$user = $this->session->userdata('jobseekeruser_email');
		if($user == NULL ){
		//$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/singlejob/'.$singlejob1);
			}


		$data['userjobseekerid'] = $this->session->userdata('jobseekeruser_id');
		$data['postjobid'] = $singlejob1;
		$this->load->model('usersmodel');
		
		$singlejob = $this->usersmodel->singlejobuserforregjobseeker($singlejob1);
		$jobseekeruserid = $_SESSION['jobseekeruser_id'];
		$loggeduserdetails = $this->usersmodel->dashboardjobseeker($jobseekeruserid);

		if($this->usersmodel->easyapplymodel($data) == NULL ){

			$this->session->set_flashdata('appliedalert', 'error applying');
			$this->load->view('singlejobforresjobseker',['singlejob' => $singlejob,'loggeduserdetails' => $loggeduserdetails]);

		}else{
			$this->session->set_flashdata('appliedalert', 'applied success');
			$this->load->view('singlejobforresjobseker',['singlejob' => $singlejob,'loggeduserdetails' => $loggeduserdetails]);

		}

	}

	public function singlejob($jobid)
	{
		$user = $this->session->userdata('jobseekeruser_email');
		if($user !== NULL ){
		//$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/singlejobforresjobseker/'.$jobid);
	}

		$this->load->model('usersmodel');
		$singlejob = $this->usersmodel->singlejobuser($jobid);
		$this->load->view('singlejob',['singlejob' => $singlejob]);
	}
	public function Companyprof($jobid)
	{
		$this->load->model('usersmodel');
		$singlejob = $this->usersmodel->Companyprof($jobid);
		$Companyprofjobs = $this->usersmodel->Companyprofjobs($jobid);
		$this->load->view('companyprofileview.php',['singlejob' => $singlejob,'Companyprofjobs'=>$Companyprofjobs]);
	}
	public function applyforjob($singlejob)
	{
		
		$this->load->helper('form');
		$this->load->view('applyforjob',['single' => $singlejob]);
	}



public function changecv(){
	$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user == NULL ){
		$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/login');
	}
		$this->load->model('usersmodel');
		$joblist = $this->usersmodel->changecv($user);
		$this->load->view('jobseeker-dashboard/changecv',['data1' => $joblist]);
}

public function uploadpicture(){
			$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user == NULL ){
		$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/login');
	}else{
			$res = preg_replace("/[^a-zA-Z]/", "", $user);
			$config['upload_path']          = './registered_user_profilepic_uploads/';
			$config['allowed_types']        = 'jpg|png|JPEG';
			$config['max_size']             = '5000';
			$config['file_name']   =  $res;
			$config['overwrite']   =  TRUE;
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('profilepicupload') == FALSE) {

				$upload_error = $this->upload->display_errors();
				$jobseekeruserid = $_SESSION['jobseekeruser_id'];
				$this->load->model('usersmodel');
				$data1 = $this->usersmodel->dashboardjobseeker($jobseekeruserid);
				$this->load->view('jobseeker-dashboard/index',['upload_error'=> $upload_error,'data1' => $data1]);



			}else{
			$jobseekeruser['id'] = $_SESSION['jobseekeruser_id'];
			$jobseekeruser['profilepic'] = $this->upload->data('file_name');
 			$this->load->model('usersmodel');
			$this->usersmodel->setprofilepicturelinkmodel($jobseekeruser);
			$this->session->set_flashdata('profilepicupdated', 'Profile Picture Updated Successfully!');
			return redirect('users/dashboard');
			
				
	}
}
}

	public function changecvsubmit(){

		$user = $this->session->userdata('jobseekeruser_email');
		#checking if user is logged in or not... if not then redirect
	if($user == NULL ){
		$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
		return redirect('users/login');
	}else{
			$res = preg_replace("/[^a-zA-Z]/", "", $user);
			$config['upload_path']          = './registered_user_cv_uploads/';
			$config['allowed_types']        = 'pdf|docx|doc';
			$config['max_size']             = '1000';
			$config['file_name']   =  $res;
			$config['overwrite']   =  TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('cvupload') == FALSE) {

				$upload_error = $this->upload->display_errors();
				$this->load->model('usersmodel');
				$joblist = $this->usersmodel->changecv($user);
				$this->load->view('jobseeker-dashboard/changecv',['upload_error'=> $upload_error,'joblist1' => $joblist]);

			}else{
			$jobseekeruser['id'] = $_SESSION['jobseekeruser_id'];
			$jobseekeruser['resume'] = $this->upload->data('file_name');
 			$this->load->model('usersmodel');
			$this->usersmodel->setprofilepicturelinkmodel($jobseekeruser);
			$this->session->set_flashdata('cvupdate', 'Resume Updated Successfully!');
			return redirect('users/changecv');
			
				
	}
}
}
	public function applyforjobsubmit($singlejob)
	{
		$this->load->helper('form');



		$this->form_validation->set_rules('name','name','trim|required');
		$this->form_validation->set_rules('email','email','trim|required|valid_email');
		$this->form_validation->set_rules('phone','phone number','trim|required');
		$this->form_validation->set_rules('coverletter','cover letter','trim|required');

		if ($this->form_validation->run() == FALSE)
		{

			$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
			$this->load->view('applyforjob',['single' => $singlejob]);

		}
		else
		{
			$usermail = $this->input->post('email');
			$res = preg_replace("/[^a-zA-Z]/", "", $usermail);
			$config['upload_path']          = './user_cv_uploads/';
			$config['allowed_types']        = 'pdf|docx|doc';
			$config['max_size']             = '1500';
			$config['file_name']   =  $res;
			$config['overwrite']   =  TRUE;

			$this->load->library('upload', $config);

			if ( $this->upload->do_upload('cvupload') == FALSE) {

				$upload_error = $this->upload->display_errors();

				$this->load->view('applyforjob',['upload_error'=> $upload_error,'single' => $singlejob]);

			}else{

				$this->load->model('usersmodel');
				$joblist1 = $this->usersmodel->candidatemail($singlejob);
                //$joblist1 = $joblist['0'];
				$status = 1;
				foreach ($joblist1 as $joblist1){
					$postjobemail = $joblist1->email;
					if($postjobemail == $usermail){
						$status = 0;    			
					}
				}

				$statuscheck = 0;
				if($status == $statuscheck){


                	//unset($applieddata['submit']);
					$this->session->set_flashdata('alreadyapplied', $singlejob);

			        //$this->load->view('user');
					return redirect('Users/index');

				}else{

					$applieddata = $this->input->post();
					$res = $this->upload->data('file_name');
                	#loading model 
					$this->load->model('usersmodel');
                	#loading function from model and passign data to it 
                	#at same time checking if the query runs output true or false.
                	//echo $this->employermodel->loginsubmit();
					if($this->usersmodel->applyforjob($applieddata,$singlejob,$res) != NULL ){

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

						$appjobemployerjob = $this->usersmodel->applyforjobgetingemaildatajob($singlejob);
						$appjobemployercompany = $this->usersmodel->applyforjobgetingemaildatacompany($singlejob);
					//print_r($appjobemployer2);
					//echo $appjobemployercompany->companyname;


						$this->load->library('email', $config);
						$this->email->set_newline("\r\n");
					// Set to, from, message, etc.
						$this->email->initialize($config);
						$this->email->from('adilkhanengineer72@gmail.com', 'RizqDoor');
						$this->email->to($applieddata['email']); 
						$this->email->subject('Applied  Successfully');

						$this->email->message('Hi '.$applieddata['name'].',
							You have applied for '.$appjobemployerjob->jobtitle.' Job to the '.$appjobemployercompany->companyname.' Company.
							On this '.$applieddata['email']. ' email.
							They have revieve your CV and will get back to you if they shorlist you for interview');  
				//	$this->email->attach('user_cv_uploads/csquestedupk.pdf');
                    //$this->email->set_header('Header1', 'Value1');
                    //$this->email->set_header('Header2', 'Value2');
						$result1 = $this->email->send();

/////////////////////////////////////////////////////////////
						$this->email->initialize($config);
						$this->email->from('adilkhanengineer72@gmail.com', 'RizqDoor');
						$this->email->to($appjobemployerjob->email); 
						$this->email->subject($applieddata['name'].' have Applied to '.$appjobemployerjob->jobtitle);

						$this->email->message('Hi '.$appjobemployercompany->companyname.',
							A candidate applied for '.$appjobemployerjob->jobtitle.' Job.
							Please revieve the CV attached to this email and contact him through his email.
							His email is is the following.'.$applieddata['email']
						);  
						$this->email->attach('user_cv_uploads/csquestedupk.pdf');
                    //$this->email->set_header('Header1', 'Value1');
                    //$this->email->set_header('Header2', 'Value2');
						$result1 = $this->email->send();

////////////////////////////////////////////////////////////


					//unset($applieddata['submit']);
						$this->session->set_flashdata('applied', $singlejob);

			        //$this->load->view('user');
						return redirect('Users/index');

					}
				}

			}


		}

	}


	public function unsubscribe()
	{
		$this->load->view('unsubscribe');
	}

	public function unsubscribesubmit()
	{
		$this->load->helper('form');
		$unsubscribdata = $this->input->post('email');
		$this->load->model('usersmodel');
		$this->usersmodel->unsubscribemodel($unsubscribdata);
		$this->session->set_flashdata('unsubscribesuccess', ' UnSubscribed Successfully');
		redirect(base_url("users/unsubscribe"));
		
		//$this->load->view('applyforjob',['single' => $singlejob]);

	}


	public function subscribesubmit()
	{
		$this->load->helper('form');
		$jobid = $this->input->post('jobid');

		$subscribdata = $this->input->post();
		$this->load->model('usersmodel');
		$this->usersmodel->subscribentry($subscribdata);
		$this->session->set_flashdata('subscribesuccess', ' Subscribed Successfully');
		redirect(base_url("users/singlejob/".$jobid));
		
		//$this->load->view('applyforjob',['single' => $singlejob]);

	}


	public function applyforjobsuccess($singlejob)
	{
		$this->load->helper('form');
		//echo $singlejob;
		$this->load->view('applyforjob');

	}



	public function contactsubmit()
	{
		$this->form_validation->set_rules('title','Title','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('discription','Job Discription','trim|required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
			$this->load->view('contactus');

		}
		else
		{



			$config = Array(
				'protocol' => 'mail',
				'smtp_host'=> 'smtp.gmail.com',
				'smtp_port'=> '465',
				'charset'  => 'utf-8',
				'smtp_timeout' => '30',
				'smtp_user' => 'Contact@rizqdoor.com',
				'smtp_pass' => 'JRE1955zzi?/*',
				'smtp_crypto' => 'tls',
				'priority'  => '1'
			);

			$title11 = $this->input->post('title');
			$usermail11 = $this->input->post('email');
			$discription11 = $this->input->post('discription');

			$subj = $usermail11. "  " . " have send a messege on rizqdoor ";

			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
					// Set to, from, message, etc.
			$this->email->initialize($config);
			$this->email->from('Contact@rizqdoor.com', 'RizqDoor User Messege Sent');
			$this->email->to('Contact@rizqdoor.com'); 
			$this->email->subject($title11);

			$this->email->message('Hi '.$usermail11.',
				You have sent a messege on rizqdoor.com contact page which is >>> ( '.$discription11.' )');  
			$result1 = $this->email->send();



			$this->session->set_flashdata('applied', 'Your message has been Recived to us we will get back to you soon');
			redirect(base_url("users/contactus"));
		}
	}

	public function underconstruction(){

		$this->load->view('underconstruction');
	}

	public function aboutus(){

		$this->load->view('aboutus');
	}
	public function contactus(){

		$this->load->view('contactus');
	}
	public function cookiepolicy(){

		$this->load->view('cookiepolicy');
	}
	public function careers(){

		$this->load->view('careers');
	}
	public function privacypolicy(){

		$this->load->view('privacypolicy');
	}
	public function termandcondition(){

		$this->load->view('termandcondition');
	}
	public function search()
	{
		header('Cache-Control: no cache'); //disable validation of form by the browser
		#validating form inputs.
		$this->form_validation->set_rules('searchtitle','Job Title','trim|required');
		$this->form_validation->set_rules('country','Country','trim');
		$this->form_validation->set_rules('city','City','trim');
		#checking if validation true or false
		if ($this->form_validation->run() == FALSE)
		{
                	#if validation is false then show errors in form on view page
	#setting validation error class and element in html 
			$this->form_validation->set_error_delimiters('<div style="display:block; color:#C21E0F;">', '</div>');
                	#loading form again that we can show occurred errors
			$this->index();


		}
		else
		{
                	#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db
			$searchdata = $this->input->post();
			if($searchdata['country'] == -1){ 

				$searchdata['country'] = "";
				$searchdata['city'] = "";
			}

                	#loading model 
			$this->load->model('usersmodel');

                	#loading function from model and passign data to it 
                	#at same time checking if the query runs output true or false.
			if ($this->usersmodel->searchmodel($searchdata) != NULL) {
				$joblist1 = $this->usersmodel->searchmodel($searchdata);

				

				$this->load->view('results',['joblist1' => $joblist1,'searchdata'=> $searchdata ]);
                		//unset($searchdata['submit']);

			}elseif($this->usersmodel->searchmodel2($searchdata) != NULL){
				$joblist1 = $this->usersmodel->searchmodel2($searchdata);

				$this->load->view('resultbycompany',['joblist1' => $joblist1,'searchdata'=> $searchdata ]);
                		//unset($searchdata['submit']);
			} else {
				$this->session->set_flashdata('nodatamatch', 'No Data Matched Your Criteria Please Try Something else!');
                		#redirecting to another method in this controler.
				return redirect('users/index');
			}
		}
	}

}