<?php
class Appliedcandidatemodel extends CI_Model
{
	public function listingcandidate ()
	{
	$user = $this->session->userdata('user_id');

	$query1 = $this->db->select("employer.companyname,post-job.jobtitle,appliedjobseeker.id,appliedjobseeker.name,appliedjobseeker.email,appliedjobseeker.phone,appliedjobseeker.coverletter,appliedjobseeker.cv")
				->where('employer.id', $user)
				->from('post-job')
				->order_by('appliedjobseeker.id', 'DESC')
				->join('employer','post-job.employerid = employer.id')
				->join('appliedjobseeker','post-job.id = appliedjobseeker.postjobid')
				->get('');

	return $query1->result();

	}
	public function listingcandidate2 ()
	{
	$user = $this->session->userdata('user_id');

	$query1 = $this->db->select()
				->where('employerid', $user)
				->from('post-job')	
				->join('logeduserappliedforjobmanytomany','post-job.id = logeduserappliedforjobmanytomany.postjobid')
				->get('');
				$result = $query1->result_array();
				$overallres1 = array() ;

				if( count($result) ){
					foreach ($result as $result){
						$userjobseekerid = $result['userjobseekerid'];
						$query1 = $this->db->select('*')
						->where('id', $userjobseekerid)
						->from('userjobseeker')
						->get();
						$rowcount = $query1->result_array();
						array_push($result,$rowcount);
						array_push($overallres1,$result);
					}
					
				}
				return $overallres1;


	}
	
	public function removecandidatemodel($candidateid)
	{
		$query = $this->db->where('id', $candidateid)
		->delete('appliedjobseeker');
		return $query;
	}
}

