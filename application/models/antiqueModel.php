<?php 
class antiqueModel extends CI_Model {


	public function showantique(){
	//	$this->db->select('a.*,p.productName');
	//	$this->db->from('auctiontb a');
	//	$this->db->join('producttb p','p.productIDPK=a.productIDFK');
        $this->db->select('*');
        $this->db->from('subcategorytb');
		$this->db->where(array('a.isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
} 
