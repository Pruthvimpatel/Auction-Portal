<?php 
class cityModel extends CI_Model {


	public function insertcity($data){
		$this->db->insert('citytb',$data);
		return $this->db->insert_id();
	}

	public function updatecity($data){
		$this->db->where('cityIDPK',$data['cityIDPK']);
		return $this->db->update('citytb',$data);
	}

	public function deletecity($cityIDPK){
		$this->db->where('cityIDPK',$cityIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('citytb');
	}

	public function searchcity($cityIDPK){
		//$query = $this->db->get_where('citytb',array('cityIDPK'=>$cityIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('citytb');
		$this->db->where(array('cityIDPK'=>$cityIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showcity(){
		// $query = $this->db->get('citytb');
		// return $query->result_array();
		$this->db->select('*');
		$this->db->from('citytb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showcityByState(){
		$this->db->select('*');
		$this->db->from('citytb');
		$this->db->where(array('stateIDFK'=>$stateIDFK,'isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
