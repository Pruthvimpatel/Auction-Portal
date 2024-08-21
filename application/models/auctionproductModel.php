<?php 
class auctionproductModel extends CI_Model {


	public function insertauctionproduct($data){
		$this->db->insert('auctionproducttb',$data);
		return $this->db->insert_id();
	}

	public function updateauctionproduct($data){
		$this->db->where('auctionproductIDPK',$data['auctionproductIDPK']);
		return $this->db->update('auctionproducttb',$data);
	}

	public function deleteauctionproduct($auctionproductIDPK){
		$this->db->where('auctionproductIDPK',$auctionproductIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('auctionproducttb');
	}

	public function searchauctionproduct($auctionproductIDPK){
		//$query = $this->db->get_where('auctionproducttb',array('auctionproductIDPK'=>$auctionproductIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('auctionproducttb');
		$this->db->where(array('auctionproductIDPK'=>$auctionproductIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showauctionproduct(){
		//$query = $this->db->get('auctionproducttb');
		//return $query->result_array();
		$this->db->select('p.*,t.productName,a.auctionName');
		$this->db->from('auctionproducttb p');
		$this->db->join('auctiontb a','a.auctionIDPK=p.auctionIDFK');
		$this->db->join('producttb t','t.productIDPK=p.productIDFK');
		$this->db->where(array('p.isActive'=>1));
		
		$query = $this->db->get();
		return $query->result_array();
	}

} 
