<?php 

class  Blogmodel extends CI_Model
{
public function index(){}

    	public function postblogsubmit($blogpostdata)
	{
	
		$this->db->insert('blog', $blogpostdata);
		//return $this->db->inset_id();
		return $this->db->affected_rows() > 0;

	}
	public function listblogs()
{
    $query1 = $this->db->select()
				->from('blog')
				->get('');
	
	 return $query1->result();
}
	public function listblogscategory($type)
{
    $query1 = $this->db->select()
				->from('blog')
				->like('blogtype',$type)
				->get('');
	
	 return $query1->result();
}
	public function singleblog($blogid)
{
    $query1 = $this->db->select()
				->from('blog')
				->where('id',$blogid)
				->get('');
	
	 return $query1->row();
}
public function loginsubmit($email,$password)
	{
		$query = $this->db->where(['email'=>$email,'password'=>$password])
		->get('admin');
		if ($query->num_rows() ) {
			return $query->row()->id;
		}else{
			return FALSE;
		}
	}
		public function listingpostedblogs ()
	{
		
		$query = $this->db
		->select()
		->from('blog')
		->order_by('id', 'DESC')
		->get();
		return $query->result();
	}
	
	
		public function deletingpostedblog ($delete)
	{
		$query = $this->db->where('id', $delete)
		->delete('blog');
		return $query;
	}
	
	
		public function editblog($editblogid)
	{
	    $query1 = $this->db->select()
				->where('id', $editblogid)
				->from('blog')
				->get();
	    
	 return $query1->row();
	 
	}
	
	
	public function editblogsubmit($blogdata)
	{
	    $this->db->set($blogdata);
$this->db->where('id', $blogdata['id']);
$this->db->update('blog'); 
	}
	
	
	
	
}