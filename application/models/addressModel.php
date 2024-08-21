<?php 
class addressModel extends CI_Model {


	public function insertaddress($data){
		$this->db->insert('addresstb',$data);
		return $this->db->insert_id();
	}

	public function updateaddress($data){
		$this->db->where('addressIDPK',$data['addressIDPK']);
		return $this->db->update('addresstb',$data);
	}

	public function deleteaddress($addressIDPK){
		$this->db->where('addressIDPK',$addressIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('addresstb');
	}

	public function searchaddress($addressIDPK){
		$this->db->select('*');
		$this->db->from('addresstb');
		$this->db->where(array('addressIDPK'=>$addressIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showaddress($userID){
		$this->db->select('*');
		$this->db->from('addresstb');
		$this->db->where(array('userIDFK'=>$userID));
		$query = $this->db->get();
		return $query->result_array();
	}
} 
