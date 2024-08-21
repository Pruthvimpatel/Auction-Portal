<?php 
class subcategoryModel extends CI_Model {


	public function insertsubcategory($data){
		$this->db->insert('subcategorytb',$data);
		return $this->db->insert_id();
	}

	public function updatesubcategory($data){
		$this->db->where('subcategoryIDPK',$data['subcategoryIDPK']);
		return $this->db->update('subcategorytb',$data);
	}

	public function deletesubcategory($subcategoryIDPK){
		$this->db->where('subcategoryIDPK',$subcategoryIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('subcategorytb');
	}

	public function searchsubcategory($subcategoryIDPK){
		//$query = $this->db->get_where('subcategorytb',array('subcategoryIDPK'=>$subcategoryIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('subcategorytb');
		$this->db->where(array('subcategoryIDPK'=>$subcategoryIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showsubcategory(){
		//$query = $this->db->get('subcategorytb');
		//return $query->result_array();
		$this->db->select('s.*,c.categoryName');
		$this->db->from('subcategorytb s');
		$this->db->join('categorytb c','c.categoryIDPK=s.categoryIDFK');
		
		$this->db->where(array('s.isActive'=>1));
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showsubcategorybyID($categoryIDFK){
		//$query = $this->db->get('subcategorytb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('subcategorytb');
		$this->db->where(array('categoryIDFK'=>$categoryIDFK,'isActive'=>1));
	//	$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
