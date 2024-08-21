<?php 
class biddetailModel extends CI_Model {


	public function insertbiddetail($data){
		$this->db->insert('biddetailtb',$data);
		return $this->db->insert_id();
	}

	public function updatebiddetail($data){
		$this->db->where('biddetailIDPK',$data['biddetailIDPK']);
		return $this->db->update('biddetailtb',$data);
	}

	public function deletebiddetail($biddetailIDPK){
		$this->db->where('biddetailIDPK',$biddetailIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('biddetailtb');
	}

	public function searchbiddetail($biddetailIDPK){
		//$query = $this->db->get_where('biddetailtb',array('biddetailIDPK'=>$biddetailIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('biddetailtb');
		$this->db->where(array('biddetailIDPK'=>$biddetailIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showbiddetail(){
		
		$this->db->select('b.*');
		$this->db->from('biddetailtb b');
		$this->db->where(array('b.isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showbiddetailById($id){
		
		$this->db->select('*');
		$this->db->from('biddetailtb');
		$this->db->where(array('isActive'=>1,'bidIDFK'=>$id));
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showbiddetailUser($id){
		
		$this->db->select('*');
		$this->db->from('biddetailtb');
		$this->db->where(array('isActive'=>1,'userIDFK'=>$id));

		$query = $this->db->get();
		return $query->result_array();
	}

} 
