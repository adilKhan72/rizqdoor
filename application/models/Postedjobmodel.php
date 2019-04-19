<?php
class Postedjobmodel extends CI_Model
{
	public function listingpostedjobs ()
	{
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
		->select(['id','jobtitle','discription','skills','noposition','jobfield','city','country','exp','currencytype','salary','dayofduaration','gender','posteddate','qualification'])
		->from('post-job')
		->order_by('posteddate', 'DESC')
		->where('employerid',$user_id)
		->get();
		$result = $query->result();
		$overallres1 = array() ;
		if( count($result) ){
			
			foreach ($result as $result){
				$jobpostid = $result->id;
				$query1 = $this->db->select('*')
				->where('postjobid', $jobpostid)
				->from('appliedjobseeker')
				->get();
				$appcan1 = $query1->num_rows();

				$query2 = $this->db->select('*')
				->where('postjobid', $jobpostid)
				->from('logeduserappliedforjobmanytomany')
				->get();
				$appcan2 = $query2->num_rows();
	 $rowcount = $appcan1 + $appcan2;

	$overallres = array($rowcount,$result);
 array_push($overallres1,$overallres);
							}
		}
		return $overallres1;
	}

	public function deletingpostedjobs ($delete)
	{
		$query = $this->db->where('id', $delete)
		->delete('post-job');
		return $query;
	}

	public function candidateappliedjob($appcandidate)
	{
		$query1 = $this->db->select()
				->where('postjobid', $appcandidate)
				->from('appliedjobseeker')
				->get('');
	
	 return $query1->result();
	}

	public function registeredcandidateappliedjob($appcandidate)
	{
		$query1 = $this->db->select()
				->where('postjobid', $appcandidate)
				->join('userjobseeker','userjobseeker.id = logeduserappliedforjobmanytomany.userjobseekerid')
				->from('logeduserappliedforjobmanytomany')
				->get('');
	
	 return $query1->result();
	}

	public function jobofappcan($appcandidate)
	{
		$query1 = $this->db->select()
				->where('id', $appcandidate)
				->from('post-job')
				->get('');
	
	 return $query1->row();
	}
	public function editjob($editjobid)
	{
	    $query1 = $this->db->select()
				->where('id', $editjobid)
				->from('post-job')
				->get('');
	    
	 return $query1->result();
	 
	}
	public function editjobsubmit($jobpostdata)
	{
	    $this->db->set($jobpostdata);
$this->db->where('id', $jobpostdata['id']);
$this->db->update('post-job'); 
	}
}
?>