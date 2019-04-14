<?php
class Blog extends CI_Controller {
	
	public function index()
	{
	    $this->load->model('blogmodel');
	     $result = $this->blogmodel->listblogs();
		$this->load->view('blog',['result' => $result]);
	}
		public function category($type)
		{
		     $this->load->model('blogmodel');
	     $result = $this->blogmodel->listblogscategory($type);
	   
		$this->load->view('blogtype',['result' => $result]);
		}
		
    public function singleblog($blogid)
	{
	    $this->load->model('blogmodel');
	     $result = $this->blogmodel->singleblog($blogid);
		    $this->load->view('singlepost',['result' => $result]);
	}
	public function admin_dashboard()
	{
	    $user = $this->session->userdata('admin_email');
		#checking if user is logged in or not... if not then redirect
		if($user == NULL ){
			$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
			return redirect('blog/login');
		}
		
		
			$this->load->model('blogmodel');
		$joblist = $this->blogmodel->listingpostedblogs();
		$this->load->view('blog/index',['bloglist1' => $joblist]);
	}
	
		public function postblog()
	{
	    $user = $this->session->userdata('admin_email');
		#checking if user is logged in or not... if not then redirect
		if($user == NULL ){
			$this->session->set_flashdata('loginforaccess', ' Please Login First for accessing Dashboard');
			return redirect('blog/login');
		}
		$this->load->view('blog/postblog');
	}
		public function postblogsubmit()
	{
	    $this->form_validation->set_rules('title','Job Title','trim|required');
		$this->form_validation->set_rules('blogtype','Email','trim|required');
		$this->form_validation->set_rules('paragraph','Job Discription','trim|required');
		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
                        $this->load->view('blog/postblog');
                }
                else
                {
                    	$blogpostdata = $this->input->post(array('title','blogtype','paragraph'));
                    	
                    	$this->load->model('blogmodel');
                    	
                    	if($this->blogmodel->postblogsubmit($blogpostdata) != NULL ){
                    	
                    	$this->session->set_flashdata('blogpostsuccess', 'blog posted successfully');
                    	    	redirect('blog/admin_dashboard');
                    	}
	}
	}
		public function login()
	{
		 $user = $this->session->userdata('admin_email');
		#checking if user is logged in then redirect to dashboard.
		if($user ==! NULL ){
			return redirect('employer/dashboard');
		}

		#loading login page from views
		$this->load->view('adminlogin');
		if (isset($login)) {
			echo 'user login not allowed';
		}
	}
	
	public function loginsubmit()
	{

		#validating form inputs.
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
		
		#checking if validation true or fals
		if ($this->form_validation->run() == FALSE)
                {
                	#if validation is false then show errors in form on view page

                	#setting validation error class and element in html 
                	$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');

                	#loading form again that we can show occured errors
                        $this->load->view('adminlogin');

                }
                else
                {
                	#else if form validate the above crieteria 
                	#take data inputed through form for interacting with db
                	$email = $this->input->post('email');
                	$password = $this->input->post('password');

                	#loading model 
                	$this->load->model('blogmodel');
                	
                	#loading function from model and passign data to it 
                	#at same time checking if the query runs output true or false.
                	if ($this->blogmodel->loginsubmit($email,$password)) {
                		#if the query run successfully
                		$userid = $this->blogmodel->loginsubmit($email,$password);
                		# Creating Session.
                		$this->load->library('session');

                		#assignign email to session for user login.
                		$this->session->set_userdata(['admin_email'=> $email, 'admin_id' => $userid]);
                                
                                
                                #loading cookie helper.
                                $this->load->helper('cookie');

                                if(null !== $this->input->post('keepmelogin')){

                                #loading cookie helper.
                                $this->load->helper('cookie');
  
                                # Setting cookie.
                                set_cookie ("admin_email",$email,3600);
	                        set_cookie ("admin_password",$password,3600);

                                }else{

                                delete_cookie ("admin_email");
	                        delete_cookie ("admin_password");

                                }


                        $this->session->set_flashdata('loginsuccess', ' Logged in Successfully');
                        
                		#redirecting to another method in this controler.
                		 return redirect('blog/admin_dashboard');

                	} else {
                		# invalid dont login user...
                		$data2['invalid'] = " Email Or Password Incorrect ";
                        $this->load->view('adminlogin',$data2);
                	}
                }
		
	}
	
	
		public function logout()
	{
	    unset($_SESSION['admin_email']);
		unset($_SESSION['admin_id']);
		$this->session->set_flashdata('logooutsuccess', ' Logout Successfully Want to login again ?');
		return redirect('blog/login');
		
	}
		public function deleteblog($delete)
	{
		//echo $delete;
		#loading model 
        $this->load->model('blogmodel');

        if ($this->blogmodel->deletingpostedblog($delete)) {
                		$this->session->set_flashdata('blogdeleted', 'blog Deleted Successfully!');
                		#redirecting to another method in this controler.
                		 redirect('blog/admin_dashboard');

                	}
	}
	









	public function editblog($editblogid)
	{
	    	#checking if user is logged in or not... if not then redirect
		$user = $this->session->userdata('admin_id');
		if($user == NULL ){
			$this->session->set_flashdata('loginforjobposting', ' Please Login First for Job Posting');
			return redirect('blog/adminlogin');
		}

		$this->load->model('blogmodel');
		$blog = $this->blogmodel->editblog($editblogid);
		$this->load->view('blog/editblog',['blog' => $blog]);
	}
	public function editblogsubmit()
	{
	     $this->form_validation->set_rules('title','Job Title','trim|required');
		$this->form_validation->set_rules('blogtype','Blog Type','trim|required');
		$this->form_validation->set_rules('paragraph','Job Discription','trim|required');
		 if ($this->form_validation->run() == FALSE)
                {
                	$this->form_validation->set_error_delimiters('<div class="formerror">', '</div>');
                        $this->load->view('blog/editblog');
                }
                else
                {
                    	$blogdata = $this->input->post(array('id','title','blogtype','paragraph'));
                    	
                    	$this->load->model('blogmodel');
                    	
                    	$this->blogmodel->editblogsubmit($blogdata);
                    	$blogeditedid = $blogdata['title'];
                    	$blogeditedid1 = $blogeditedid . ' Edited successfully';
                    	
                    	$this->session->set_flashdata('blogedited', $blogeditedid1);
                    	    	redirect('blog/admin_dashboard');
                    	
	}
	}

















}