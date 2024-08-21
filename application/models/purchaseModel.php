<?php 
class purchaseModel extends CI_Model {


	public function insertpurchase($data){
		$this->db->insert('purchasetb',$data);
		return $this->db->insert_id();
	}

	public function updatepurchase($data){
		$this->db->where('purchaseIDPK',$data['purchaseIDPK']);
		return $this->db->update('purchasetb',$data);
	}

	public function deletepurchase($purchaseIDPK){
		$this->db->where('purchaseIDPK',$purchaseIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('purchasetb');
	}

	public function searchpurchase($purchaseIDPK){
		//$query = $this->db->get_where('purchasetb',array('purchaseIDPK'=>$purchaseIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('purchasetb');
		$this->db->where(array('purchaseIDPK'=>$purchaseIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showpurchase(){
		//$query = $this->db->get('purchasetb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('purchasetb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
