<?php 

class Employermodel extends CI_Model
{
public function index(){}

public function editemployerdetailsmodel($user)
	{
	    $query1 = $this->db->select()
				->where('id', $user)
				->from('employer')
				->get('');
	    
	 return $query1->result();
	 
	}

public function editemployeedetailssubmitmodel($employeedetails){
 
$this->db->set($employeedetails);
$this->db->where('id', $employeedetails['id']);
$this->db->update('employer'); 

}

public function statistics($user)
{
	$query1 = $this->db->select()
	->where('employerid',$user)
	->from('post-job')
	->get('');
	$postedjobcount = $query1->num_rows();

	$query2 = $this->db->select()
	->where('employerid',$user)
	->join('appliedjobseeker','appliedjobseeker.postjobid = post-job.id')
	->from('post-job')
	->get('');
	$appliedjobseekers1 = $query2->num_rows();

	$query3 = $this->db->select()
	->where('employerid',$user)
	->join('logeduserappliedforjobmanytomany','logeduserappliedforjobmanytomany.postjobid = post-job.id')
	->from('post-job')
	->get('');
	$appliedjobseekers2 = $query3->num_rows();

	$appliedjobseekers =  $appliedjobseekers2 + $appliedjobseekers1;
	
	$array = array(
		'postedjobs' => $postedjobcount,
		'appliedjobseekers' =>  $appliedjobseekers,
	);

	return $array;
}

public function testwebservice($postData)
{
	$query1 = $this->db->select()
	->where('id',$postData)
	->from('post-job')
	->get('');
	$response = $query1->result_array();
	return $response;
}

public function changepasswordmodel($user){
	$query1 = $this->db->select()
				->where('id', $user)
				->from('employer')
				->get('');
	
	 return $query1->row();
}

	public function editemployerpasswordsubmitmodel($editemployerpasswordsubmitmodel)
	{

		$this->db->set($editemployerpasswordsubmitmodel);
$this->db->where('id', $editemployerpasswordsubmitmodel['id']);
$this->db->update('employer'); 

	}


public function editcompanydetailsmodel($user)
	{
	    $query1 = $this->db->select()
				->where('employerid', $user)
				->from('company')
				->get('');
	    
	 return $query1->result();
	 
	}

public function editcompanydetailssubmitmodel($companydetails){
 
$this->db->set($companydetails);
$this->db->where('id', $companydetails['id']);
$this->db->update('company'); 

}



public function dashboardemp($empid)
	{
        $query1 = $this->db->select()
				->where('id', $empid)
				->from('employer')
				->get('');
	
	 return $query1->row();
	}
	
public function dashboardcom($empid)
{
    $query1 = $this->db->select()
				->where('employerid', $empid)
				->from('company')
				->get('');
	
	 return $query1->row();
}
public function comdatasub($comdatasub)
	{  
	    
		$this->db->insert('company', $comdatasub);
		//return $this->db->inset_id();
		return $this->db->affected_rows() > 0;

	}

	public function signupsubmit($signupdata)
	{
		$this->db->insert('employer', $signupdata);
		//return $this->db->inset_id();
		return $this->db->affected_rows() > 0;

	}

	public function loginsubmit($email,$password)
	{
		$query = $this->db->where(['email'=>$email,'password'=>$password])
		->get('employer');
		if ($query->num_rows() ) {
			return $query->row()->id;
		}else{
			return FALSE;
		}
	}

public function forgotpasswordsubmit($email)
	{
		$query = $this->db->where(['email'=>$email])
		->get('employer');
		if ($query->num_rows() ) {
			return $query->row();
		}else{
			return FALSE;
		}
	}


        public function sessionstatecheck($empem){
        
        $query = $this->db->where(['email'=>$empem])
		->get('employer');
        if ($query->num_rows() ) {
			return $query->row()->login_session;
		}else{
			return FALSE;
		}
        
        }

        public function keepmeloginsessionstate($userid){
        
        
                 $this->db->set('login_session', '1');
                 $this->db->where('id', $userid);
                 $this->db->update('employer');
        
        }
 public function dontkeepmeloginsessionstate($userid){
        
        
                 $this->db->set('login_session', '0');
                 $this->db->where('id', $userid);
                 $this->db->update('employer');
        
        }

       public function logoutsessionstate($userid){
        
        
                 $this->db->set('login_session', '0');
                 $this->db->where('id', $userid);
                 $this->db->update('employer');
        
        }

	public function postjobubmit($jobpostdata)
		{
		$jobpostdata['employerid'] = $data1['regstatus'] = $this->session->userdata('user_id');
		$jobpostdata['posteddate'] = date("l j F Y");
		$jobpostdata['status'] = 1;
		$jobfield = $jobpostdata['jobfield'];
		$country = $jobpostdata['country'];
		$city = $jobpostdata['city'];

        $q = $this->db->from('jobcountry')
		->select('*')
        ->where('countryname',$country)
		->get();
		$res = $q->row();
		$resultcountry = $q->num_rows();
		
         //if the country already availible
		 if($resultcountry > 0){

         //select country id
         $countryidexist = $res->id;
         $countryidexist1 = $res->countryname;

         //check if the city in this country is availible or not
         $qq = $this->db->from('city')
		 ->select('*')
         ->where('cityname',$city)
		 ->get();
		 $res1 = $qq->row();
		 $resultcity = $qq->num_rows();

		 if($resultcity > 0){

		 	$jobcityidexist1 = $res1->id;
		 	$jobcityidexist = $res1->cityname;

		 }elseif($resultcity == 0){

             $cityinfo['countryid'] = $countryidexist;
             $cityinfo['cityname'] = $city;
		 	$this->db->insert('city', $cityinfo);
		 	

		 	$qq = $this->db->from('city')
            ->select('*')
         ->where('cityname',$city)
		 ->get();
		 $res1 = $qq->row();

		 $jobcityidexist1 = $res1->id;
         $jobcityidexist = $res1->cityname;

		 }
 
 		

		 }else{

		 	$country1 = array(
		 		'countryname' =>  $jobpostdata['country'],
		 	);

		 	$this->db->insert('jobcountry', $country1);

		 	$q = $this->db->from('jobcountry')
		->select('*')
        ->where('countryname',$country)
		->get();
		$res = $q->row();
        

        $countryidexist = $res->id;
        $countryidexist1 = $res->countryname;

         $cityinfo['countryid'] = $countryidexist;
             $cityinfo['cityname'] = $city;
		 	$this->db->insert('city', $cityinfo);
		 	

		 	$qq = $this->db->from('city')
            ->select('*')
         ->where('cityname',$city)
		 ->get();
		 $res1 = $qq->row();

         $jobcityidexist1 = $res1->id;
         $jobcityidexist = $res1->cityname;

       
		 }

		 $jobpostdata['jobcityid'] = $jobcityidexist1;
		 





		 $q = $this->db->from('jobfield')
		->select('*')
        ->where('job-field',$jobfield)
		->get();
		$res = $q->row();
		$resultcountry1 = $q->num_rows();
		
         //if the country already availible
		 if($resultcountry1 > 0){

		 	$jobfieldexist = $res->id;

		 }else{

		 	$jobfield1 = array(
		 		'job-field' =>  $jobfield,
		 	);

		 	$this->db->insert('jobfield', $jobfield1);

		 $q = $this->db->from('jobfield')
		->select('*')
        ->where('job-field',$jobfield)
		->get();
		$res = $q->row();

		$jobfieldexist = $res->id;
		 }

		 $jobpostdata['jobfieldid'] = $jobfieldexist;


		$this->db->insert('post-job', $jobpostdata);

		//$this->db->insert('post-job', $jobpostdata);
		//return $this->db->inset_id();                
		return $this->db->affected_rows() > 0;

	}
	public function sendemailsubscribe($jobpostdata)
	{
		$jobtitle = $jobpostdata['jobtitle'];
		$city = $jobpostdata['city'];

		$q = $this->db->from('subscription')
		->select('*')
		->like('jobtitle',$jobtitle)
		->like('city',$city)
		->get();
		return $q->result();
	}
}
?>