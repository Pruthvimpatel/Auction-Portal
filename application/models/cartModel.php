<?php 
class cartModel extends CI_Model {


	public function insertcart($data){
		$this->db->insert('cart',$data);
		return $this->db->insert_id();
	}

	public function updatecart($cartData){
		$this->db->where('cartIDPK',$cartData['cartIDPK']);
		return $this->db->update('cart',$cartData);
	}

	public function deletecart($cartIDPK){
		$this->db->where('cartIDPK',$cartIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('cart');
	}

	public function searchcart($cartIDPK){
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where(array('cartIDPK'=>$cartIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
    public function searchCartByUser($userIDFK){
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where(array('userIDFK'=>$userIDFK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showcart(){
		$this->db->select('c.*,u.userName');
		$this->db->from('cart c');
        $this->db->join('usertb u','u.userIDPK=c.userIDFK');
		$this->db->where(array('c.isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
} 
