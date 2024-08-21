<?php 
class categoryModel extends CI_Model {


	public function insertCategory($data){
		$this->db->insert('categorytb',$data);
		return $this->db->insert_id();
	}

	public function updateCategory($data){
		$this->db->where('categoryIDPK',$data['categoryIDPK']);
		return $this->db->update('categorytb',$data);
	}

	public function deleteCategory($categoryIDPK){
		$this->db->where('categoryIDPK',$categoryIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('categorytb');
	}

	public function searchCategory($categoryIDPK){
		//$query = $this->db->get_where('categorytb',array('categoryIDPK'=>$categoryIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('categorytb');
		$this->db->where(array('categoryIDPK'=>$categoryIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showCategory(){
		//$query = $this->db->get('categorytb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('categorytb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
