<?php 
class imageModel extends CI_Model {


	public function insertimage($data){
		$this->db->insert('imagetb',$data);
		return $this->db->insert_id();
	}

	public function updateimage($data){
		$this->db->where('imageIDPK',$data['imageIDPK']);
		return $this->db->update('imagetb',$data);
	}

	public function deleteimage($imageIDPK){
		$this->db->where('imageIDPK',$imageIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('imagetb');
	}

	public function searchimage($imageIDPK){
		//$query = $this->db->get_where('imagetb',array('imageIDPK'=>$imageIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('imagetb');
		$this->db->where(array('imageIDPK'=>$imageIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showimage(){
		//$query = $this->db->get('imagetb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('imagetb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function showProductimage($productID){
		//$query = $this->db->get('imagetb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('imagetb');
		$this->db->where(array('productIDFK'=>$productID,'isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
