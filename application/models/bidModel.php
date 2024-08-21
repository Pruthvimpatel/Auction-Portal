<?php 
class bidModel extends CI_Model {


	public function insertbid($data){
		$this->db->insert('bidtb',$data);
		return $this->db->insert_id();
	}

	public function updatebid($data){
		$this->db->where('bidIDPK',$data['bidIDPK']);
		return $this->db->update('bidtb',$data);
	}

	public function deletebid($bidIDPK){
		$this->db->where('bidIDPK',$bidIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('bidtb');
	}

	public function searchbid($bidIDPK){
		$this->db->select('*');
		$this->db->from('bidtb');
		$this->db->where(array('bidIDPK'=>$bidIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function searchbidAdmin($bidIDPK){
		$this->db->select('*');
		$this->db->from('bidtb');
		$this->db->where(array('bidIDPK'=>$bidIDPK,'isActive'=>0));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function showbid(){
		$this->db->select('*');
		$this->db->from('bidtb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showbidById($id){
		
		$this->db->select('*');
		$this->db->from('bidtb');
		$this->db->where(array('isActive'=>1,'productIDFK'=>$id));
		$this->db->order_by('bidIDPK','DESC');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function showbidByProduct($id){
		
		$this->db->select('*');
		$this->db->from('bidtb');
		$this->db->where(array('isActive'=>1,'productIDFK'=>$id));

		$query = $this->db->get();
		return $query->result_array();
	}

	public function showbidUser($id){
		
		$this->db->select('*,max(price) as price');
		$this->db->from('bidtb');
		$this->db->where(array('isActive'=>1,'userIDFK'=>$id));
		$this->db->group_by('productIDFK');
		$query = $this->db->get();
		//echo $this->db->last_query();die;
		return $query->result_array();
	}
} 
