<?php 
class userModel extends CI_Model {


	public function insertuser($data){
		$this->db->insert('usertb',$data);
		return $this->db->insert_id();
	}

	public function updateuser($data){
		$this->db->where('userIDPK',$data['userIDPK']);
		return $this->db->update('usertb',$data);
	}

	public function deleteuser($userIDPK){
		$this->db->where('userIDPK',$userIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('usertb');
	}

	public function searchuser($userIDPK){
		//$query = $this->db->get_where('usertb',array('userIDPK'=>$userIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('usertb');
		$this->db->where(array('userIDPK'=>$userIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showuser(){
		$this->db->select('*');
		$this->db->from('usertb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
   

	public function showuserCount(){
		$this->db->select('*');
		$this->db->from('usertb');
		$this->db->where(array('isActive'=>1,'userType'=>"client"));
		$query = $this->db->get();
		return $query->result_array();
	}


	public function showuserAdmin(){
		
		$this->db->select('*');
		$this->db->from('usertb');
		
		$this->db->where(array('isActive'=>1,'userType'=>"client"));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showuserAdminsite(){
		$this->db->select('p.*,c.state,c.city');
		$this->db->from('usertb p');
		$this->db->join('addresstb c','c.addressIDPK=p.addressIDFK');
		
		$this->db->where(array('p.isActive'=>1));
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function login($data){
		
		$this->db->select('*');
		$this->db->from('usertb');
		$this->db->where(array('email'=>$data['email'],'password'=>$data['password'],'userType'=>$data['userType'],'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showuserFeedback($id){
		
		$this->db->select('*');
		$this->db->from('feedbacktb');
		$this->db->where(array('isActive'=>1,'feedbackIDPK'=>$id));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function showuserContact($id){
		
		$this->db->select('*');
		$this->db->from('contacttb');
		$this->db->where(array('isActive'=>1,'contactIDPK'=>$id));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showbidDetail($id){
		$this->db->select('*');
		$this->db->from('usertb');
		$this->db->where(array('isActive'=>1,'userIDPK'=>$id));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function showuserProfile($id){
		$this->db->select('u.*');
		$this->db->from('usertb u');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showTotalUser($id){
		
		$this->db->select('*');
		$this->db->from('usertb');
		$this->db->where(array('isActive'=>1,'userIDFK'=>$id));

		$query = $this->db->get();
		return $query->result_array();
	}

} 