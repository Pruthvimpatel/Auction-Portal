<?php 
class contactModel extends CI_Model {


	public function insertcontact($data){
		$this->db->insert('contacttb',$data);
		return $this->db->insert_id();
	}

	public function updatecontact($data){
		$this->db->where('contactIDPK',$data['contactIDPK']);
		return $this->db->update('contacttb',$data);
	}

	public function deletecontact($contactIDPK){
		$this->db->where('contactIDPK',$contactIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('contacttb');
	}

	public function searchcontact($contactIDPK){
		//$query = $this->db->get_where('contacttb',array('contactIDPK'=>$contactIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('contacttb');
		$this->db->where(array('contactIDPK'=>$contactIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showcontact(){
		//$query = $this->db->get('contacttb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('contacttb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
