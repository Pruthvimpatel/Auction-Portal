<?php 
class stateModel extends CI_Model {


	public function insertstate($data){
		$this->db->insert('statetb',$data);
		return $this->db->insert_id();
	}

	public function updatestate($data){
		$this->db->where('stateIDPK',$data['stateIDPK']);
		return $this->db->update('statetb',$data);
	}

	public function deletestate($stateIDPK){
		$this->db->where('stateIDPK',$stateIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('statetb');
	}

	public function searchstate($stateIDPK){
		//$query = $this->db->get_where('statetb',array('stateIDPK'=>$stateIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('statetb');
		$this->db->where(array('stateIDPK'=>$stateIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showstate(){
	//	$query = $this->db->get('statetb');
	//	return $query->result_array();
	$this->db->select('*');
		$this->db->from('statetb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
