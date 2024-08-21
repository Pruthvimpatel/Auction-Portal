<?php 
class orderModel extends CI_Model {


	public function insertorder($data){
		$this->db->insert('ordertb',$data);
		return $this->db->insert_id();
	}

    public function insertOrderProduct($data){
		$this->db->insert('orderproduct',$data);
		return $this->db->insert_id();
	}

	public function updateorder($orderData){
		$this->db->where('orderIDPK',$orderData['orderIDPK']);
		return $this->db->update('ordertb',$orderData);
	}

	public function deleteorder($orderIDPK){
		$this->db->where('orderIDPK',$orderIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('order');
	}

	public function searchorder($orderIDPK){
		$this->db->select('*');
		$this->db->from('ordertb');
		$this->db->where(array('orderIDPK'=>$orderIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
    public function searchOrderByUser($userIDFK){
		$this->db->select('*');
		$this->db->from('ordertb');
		$this->db->where(array('userIDFK'=>$userIDFK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showcart(){
		$this->db->select('c.*');
		$this->db->from('ordertb c');
        	$this->db->where(array('c.isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function showorder(){
		$this->db->select('*');
		$this->db->from('ordertb');
		
        $this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function showreadorder(){
		$this->db->select('*');
		$this->db->from('ordertb');
		$this->db->where(array('isActive'=>1));	
		$this->db->where(array('isread'=>1));	
		$query = $this->db->get();
		return $query->result_array();
	}
} 
