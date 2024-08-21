<?php 
class auctionModel extends CI_Model {


	public function insertauction($data){
		$this->db->insert('auctiontb',$data);
		return $this->db->insert_id();
	}

	public function updateauction($data){
		$this->db->where('auctionIDPK',$data['auctionIDPK']);
		return $this->db->update('auctiontb',$data);
	}

	public function deleteauction($auctionIDPK){
		$this->db->where('auctionIDPK',$auctionIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('auctiontb');
	}

	public function searchauction($auctionIDPK){
		$this->db->select('*');
		$this->db->from('auctiontb');
		$this->db->where(array('auctionIDPK'=>$auctionIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showauction(){
		$this->db->select('a.*,p.productName');
		$this->db->from('auctiontb a');
		$this->db->join('producttb p','p.productIDPK=a.productIDFK');
		$this->db->where(array('a.isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
} 
