<?php
class Usersmodel extends CI_Model
{

	public function listingjobsbyindustory(){
		$query = $this->db
		->select('*')
		->from('jobfield')
		->get();
		$result = $query->result_array();

		$overallres1 = array() ;
		if( count($result) ){
	
			foreach ($result as $result){
				$jobfieldid = $result['id'];
				$query1 = $this->db->select('*')
				->where('jobfieldid', $jobfieldid)
				->from('post-job')
				->get();
				$rowcount = $query1->num_rows();
				array_push($result,$rowcount);
				array_push($overallres1,$result);
			}
		}
		return $overallres1;
	}

public function signupsubmit($signupdata)
	{
		$this->db->insert('userjobseeker', $signupdata);
		//return $this->db->inset_id();
		return $this->db->affected_rows() > 0;

	}
	public function changecv($user){
	$query1 = $this->db->select()
				->where('email', $user)
				->from('userjobseeker')
				->get('');
	
	 return $query1->row();
}
	public function changepasswordmodel($user){
	$query1 = $this->db->select()
				->where('email', $user)
				->from('userjobseeker')
				->get('');
	
	 return $query1->row();
}
public function setprofilepicturelinkmodel($jobseekeruser){
			$this->db->set($jobseekeruser);
			$this->db->where('id', $jobseekeruser['id']);
			$this->db->update('userjobseeker');
		}
	public function editjobseekerpasswordsubmitmodel($editjobseekerpasswordsubmitmodel)
	{

		$this->db->set($editjobseekerpasswordsubmitmodel);
$this->db->where('id', $editjobseekerpasswordsubmitmodel['id']);
$this->db->update('userjobseeker'); 

	}
	public function editjobseekerdetailssubmitmodel($editjobseekerdetailssubmitmodel)
	{

		$this->db->set($editjobseekerdetailssubmitmodel);
$this->db->where('id', $editjobseekerdetailssubmitmodel['id']);
$this->db->update('userjobseeker'); 

	}



		public function loginsubmit($email,$password)
	{
		$query = $this->db->where(['email'=>$email,'password'=>$password])
		->get('userjobseeker');
		if ($query->num_rows() ) {
			return $query->row()->id;
		}else{
			return FALSE;
		}
	}

 public function keepmeloginsessionstate($jobseekeruserid){
        
        
                 $this->db->set('login_session', '1');
                 $this->db->where('id', $jobseekeruserid);
                 $this->db->update('userjobseeker');
        
        }

 public function dontkeepmeloginsessionstate($jobseekeruserid){
        
        
                 $this->db->set('login_session', '0');
                 $this->db->where('id', $jobseekeruserid);
                 $this->db->update('userjobseeker');
        
        }
               public function logoutsessionstate($jobseekeruserid){
        
        
                 $this->db->set('login_session', '0');
                 $this->db->where('id', $jobseekeruserid);
                 $this->db->update('userjobseeker');
        
        }


        public function sessionstatecheck($jobseekeremail){
        
        $query = $this->db->where(['email'=>$jobseekeremail])
		->get('userjobseeker');
        if ($query->num_rows() ) {
			return $query->row()->login_session;
		}else{
			return FALSE;
		}
        
        }


public function dashboardjobseeker($jobseekeruserid)
	{
        $query1 = $this->db->select()
				->where('id', $jobseekeruserid)
				->from('userjobseeker')
				->get('');
	
	 return $query1->row();
	}
	public function dashboardjobseekerjobscounts($jobseekeruserid)
	{
        $query1 = $this->db->select()
				->where('userjobseekerid', $jobseekeruserid)
				->from('logeduserappliedforjobmanytomany')
				->join('post-job', 'post-job.id = logeduserappliedforjobmanytomany.postjobid')
				->join('employer', 'employer.id = post-job.employerid')
				->get('');
	 return $query1->result();
	 
	}
	public function dashboardjobseekersubscriptioncounts($jobseekeruseremail)
	{
        $query1 = $this->db->select()
				->where('email', $jobseekeruseremail)
				->from('subscription')
				->get('');
	 return $query1->result();
	 
	}



	public function jobsapplied($jobseekeruserid)
	{
		$query1 = $this->db->select()
		->where('userjobseekerid', $jobseekeruserid)
		->from('logeduserappliedforjobmanytomany')
		->join('post-job', 'post-job.id = logeduserappliedforjobmanytomany.postjobid')
		->join('employer', 'employer.id = post-job.employerid','right inner')
		->get('');
return $query1->result();
	}

	public function jobsappliedsingle($postData)
	{
		$query1 = $this->db->select()
		->where('id',$postData)
		->from('post-job')
		->get('');
		$response = $query1->result_array();
		return $response;
	}


	public function companiesapplied($jobseekeruserid)
	{
	 
	}

	public function listingjobsbycountry(){
		$query = $this->db
		->select('*')
		->from('jobcountry')
		->get();
		$result = $query->result_array();

		$overallres1 = array() ;
		if( count($result) ){
	
			foreach ($result as $result){
				$countryname = $result['countryname'];
				$query1 = $this->db->select('*')
				->where('country', $countryname)
				->from('post-job')
				->get();
				$rowcount = $query1->num_rows();
				array_push($result,$rowcount);
				array_push($overallres1,$result);
			}
			
		}
		return $overallres1;
	}

public function forgotpasswordsubmit($email)
	{
		$query = $this->db->where(['email'=>$email])
		->get('userjobseeker');
		if ($query->num_rows() ) {
			return $query->row();
		}else{
			return FALSE;
		}
	}


	public function candidatemail($appcandidate)
	{
		$query1 = $this->db->select()
				->where('postjobid', $appcandidate)
				->from('appliedjobseeker')
				->get('');
	
	 return $query1->result();
	}



 public function jobsbycountrycount($jobid)
	{
		
		$query = $this->db
		->select(['id','employerid','jobtitle','discription','city','posteddate'])
		->from('post-job')
		->where('country', $jobid)
		//->join('jobcountry','jobcountry.id = '.$jobid)
		->order_by('posteddate', 'DESC')
		->get();
		return $query->num_rows();
	}

	public function jobsbycountrymodel($limit,$offset,$jobid)
	{
		
		$query = $this->db
		->select(['id','employerid','jobtitle','discription','city','posteddate','country'])
		->from('post-job')
		->where('country', $jobid)
		//->join('jobcountry','post-job.country = jobcountry.countryname')
		->limit($limit,$offset)
		->order_by('posteddate', 'DESC')
		->get();
		$result = $query->result();
				$overallres1 = array() ;
		if( count($result) ){
	
			foreach ($result as $result){
				$employerid = $result->employerid;
				$query1 = $this->db->select('companyname')
				->where('id', $employerid)
				->from('employer')
				->get();
				$rowcount = $query1->row();
				$overallres = array($rowcount,$result);
				array_push($overallres1,$overallres);
				
			}
			
		}
		return $overallres1;
		
	}


    public function jobsbyindustorycount($jobid)
	{
		
		$query = $this->db
		->select(['id','employerid','jobtitle','discription','city','posteddate'])
		->from('post-job')
		->where('jobfieldid', $jobid)
		->order_by('posteddate', 'DESC')
		->get();
		return $query->num_rows();
	}

	public function jobsbyindustorymodel($limit,$offset,$jobid)
	{
		
		$query = $this->db
		->select(['id','employerid','jobtitle','discription','city','posteddate','jobfield'])
		->from('post-job')
		->where('jobfieldid', $jobid)
		->limit($limit,$offset)
		->order_by('posteddate', 'DESC')
		->get();
		$result = $query->result();
				$overallres1 = array() ;
		if( count($result) ){
	
			foreach ($result as $result){
				$employerid = $result->employerid;
				$query1 = $this->db->select('companyname')
				->where('id', $employerid)
				->from('employer')
				->get();
				$rowcount = $query1->row();
				$overallres = array($rowcount,$result);
				array_push($overallres1,$overallres);
				
			}
			
		}
		return $overallres1;
		
	}

	public function listingpostedjobscount ()
	{
		
		$query = $this->db
		->select(['id','employerid','jobtitle','discription','city','posteddate'])
		->from('post-job')
		->order_by('posteddate', 'DESC')
		->get();
		return $query->num_rows();
	}

	public function listingpostedjobs ($limit,$offset)
	{
		
		$query = $this->db
		->select(['id','employerid','jobtitle','discription','city','posteddate'])
		->from('post-job')
		->limit($limit,$offset)
		->order_by('id', 'DESC')
		->get();
		$result = $query->result();
				$overallres1 = array() ;
		if( count($result) ){
	
			foreach ($result as $result){
				$employerid = $result->employerid;
				$query1 = $this->db->select('companyname')
				->where('id', $employerid)

				->from('employer')
				->get();
				$rowcount = $query1->row();
				$overallres = array($rowcount,$result);
				array_push($overallres1,$overallres);
				
			}
			
		}
		return $overallres1;
		
	}
		public function listingpostedjobsforloggedinuser ($limit,$offset)
	{
		
		$query = $this->db
		->select()
		->from('logeduserappliedforjobmanytomany')
		->join('post-job', 'post-job.id = logeduserappliedforjobmanytomany.postjobid', 'right')
		->limit($limit,$offset)
		->order_by('post-job.id', 'DESC')
		->get();
		$result = $query->result();
				$overallres1 = array() ;
		if( count($result) ){
	
			foreach ($result as $result){
				$employerid = $result->employerid;
				$query1 = $this->db->select('companyname')
				->where('id', $employerid)

				->from('employer')
				->get();
				$rowcount = $query1->row();
				$overallres = array($rowcount,$result);
				array_push($overallres1,$overallres);
				
			}
			
		}
		return $overallres1;
		
	}
		public function singlejobuserforregjobseeker($jobid)
	{
		$query = $this->db
		->select('post-job.id,post-job.employerid,post-job.jobtitle,post-job.email,post-job.discription,post-job.skills,post-job.noposition,post-job.jobfield,post-job.city,post-job.country,post-job.exp,post-job.currencytype,post-job.salary,post-job.dayofduaration,post-job.gender,post-job.posteddate,post-job.jobcityid,post-job. 	jobfieldid,post-job.qualification,post-job.date_updated_last,logeduserappliedforjobmanytomany.userjobseekerid,logeduserappliedforjobmanytomany.applieddate')
		->from('post-job')
		->join('logeduserappliedforjobmanytomany', 'logeduserappliedforjobmanytomany.postjobid = post-job.id', 'left')
		->where('post-job.id',$jobid)
		->get();
		return $result = $query->row();

	}
	public function easyapplymodel($data){
		$this->db->insert('logeduserappliedforjobmanytomany', $data);
		//return $this->db->inset_id();
		return $this->db->affected_rows() > 0;
	}

	public function singlejobuser($jobid)
	{
		$query = $this->db
		->select()
		->from('post-job')
		->where('id',$jobid)
		->get();
		return $result = $query->row();

	}
		public function Companyprof($jobid)
	{
		$query = $this->db
		->select()
		->from('employer')
		->join('company', 'company.employerid = employer.id', 'left')		
		->where('employer.id',$jobid)
		->get();
		return $result = $query->row();

	}
		public function Companyprofjobs($jobid)
	{
		$query = $this->db
		->select()
		->from('post-job')
		->where('employerid',$jobid)
		->get();
		return $result = $query->result();

	}
	public function applyforjob($applieddata,$singlejob,$res)
	{

		array_pop($applieddata);
		$applieddata['postjobid'] = $singlejob;
		$applieddata['cv'] = './user_cv_uploads/'. $res;


		$this->db->insert('appliedjobseeker', $applieddata);
		
		return $this->db->affected_rows() > 0;
		
	}
		public function applyforjobgetingemaildatajob($singlejob)
	{
					$q = $this->db->from('post-job')
					->select('*')
					->where('id',$singlejob)
					->get();
					return $q->row();

}
public function editjobseekerdetailsmodel($user){
$query1 = $this->db->select()
				->where('email', $user)
				->from('userjobseeker')
				->get('');
	
	 return $query1->row();
}




	public function applyforjobgetingemaildatacompany($singlejob)
	{
					$q = $this->db->from('post-job')
					->select('*')
					->where('id',$singlejob)
					->get();
					$resrow = $q->row();
					$q2 = $this->db->from('employer')
					->select('*')
					->where('id',$resrow->employerid)
					->get();
					return $q2->row();

}
	public function searchmodel($searchdata){
	
		$searchtitle = $searchdata['searchtitle'];
		$country = $searchdata['country'];
		$city = $searchdata['city'];
		$q = $this->db->from('post-job')
		->select('*')
					->like('jobtitle',$searchtitle)
					->like('country',$country)
					->like('city',$city)
					->or_like('skills',$searchtitle)
					->get();
		$result = $q->result();
	
		if( count($result) ){
			$overallres1 = array() ;
			foreach ($result as $result){
				$employerid = $result->employerid;
				$query1 = $this->db->select('companyname')
				->where('id', $employerid)
				->from('employer')
				->get();
				$rowcount = $query1->row();
				$overallres = array($rowcount,$result);
				array_push($overallres1,$overallres);
			}
			return $overallres1;
		}else{
		    
	    $overallres1 = $result ;
		return $overallres1;
		}
	}
	
	public function searchmodel2($searchdata){
	
		$searchtitle = $searchdata['searchtitle'];
		$q = $this->db->from('employer')
		->select('*')
					->like('companyname',$searchtitle)
					->get();
		$result = $q->result();
		
		if( count($result) ){
			$overallres1 = array() ;
			foreach ($result as $result){
				$employerid = $result->id;
				$query1 = $this->db->select('*')
				->where('employerid', $employerid)
				->from('post-job')
				->get();
				$rowcount = $query1->row();
				$overallres = array($rowcount,$result);
				array_push($overallres1,$overallres);
			}
			return $overallres1;
		}else{
		    
	    $overallres1 = $result ;
		return $overallres1;
		}
	}
	public function subscribentry($subscribdata){
		array_splice($subscribdata, 3, 1);
		array_splice($subscribdata, 3, 1);
		$this->db->insert('subscription',$subscribdata);
		return $this->db->affected_rows() > 0;
	}
public function unsubscribemodel($unsubscribdata){
                $this->db->where('email', $unsubscribdata);
                                   $this->db->delete('subscription');
		
	}
}

?>