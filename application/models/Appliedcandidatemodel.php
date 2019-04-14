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
	
	public function removecandidatemodel($candidateid)
	{
		$query = $this->db->where('id', $candidateid)
		->delete('appliedjobseeker');
		return $query;
	}
}

