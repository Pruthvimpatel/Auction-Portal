<?php 
class cartProductModel extends CI_Model {


	public function insertcartProduct($data){
		$this->db->insert('cartproduct',$data);
		return $this->db->insert_id();
	}

	public function removeProduct($cartProductIDPK){
		$this->db->where('cartIDFK',$cartProductIDPK);
		return $this->db->delete('cartproduct');
	}

	public function removecartProduct($cartProductIDPK){
		$this->db->where('cartProductIDPK',$cartProductIDPK);
		return $this->db->delete('cartproduct');
	}



	public function searchcartProduct($cartProductIDPK){
		$this->db->select('*');
		$this->db->from('cartproduct');
		$this->db->where(array('cartProductIDPK'=>$cartProductIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
    public function searchCartProductByCart($userIDFK){
		$this->db->select('*');
		$this->db->from('cartproduct');
		$this->db->where(array('cartIDFK'=>$userIDFK,'isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function showcartProduct(){
		$this->db->select('c.*,p.productName');
		$this->db->from('cartproduct c');
		$this->db->join('producttb p','p.productIDPK=c.productIDFK');
	
       $this->db->where(array('c.isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
} 
