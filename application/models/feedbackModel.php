<?php 
class feedbackModel extends CI_Model {


	public function insertfeedback($data){
		$this->db->insert('feedbacktb',$data);
		return $this->db->insert_id();
	}

	public function updatefeedback($data){
		$this->db->where('feedbackIDPK',$data['feedbackIDPK']);
		return $this->db->update('feedbacktb',$data);
	}

	public function deletefeedback($feedbackIDPK){
		$this->db->where('feedbackIDPK',$feedbackIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('feedbacktb');
	}

	public function searchfeedback($feedbackIDPK){
		//$query = $this->db->get_where('feedbacktb',array('feedbackIDPK'=>$feedbackIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('feedbacktb');
		$this->db->where(array('feedbackIDPK'=>$feedbackIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showfeedback(){
		//$query = $this->db->get('contacttb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('feedbacktb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function showuserFeedback($id){
		//$query = $this->db->get('producttb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('feedbacktb');
		$this->db->where(array('isActive'=>1,'feedbackIDPK'=>$id));
		$query = $this->db->get();
		return $query->row_array();
	}

	

} 
