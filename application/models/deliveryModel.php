<?php 
class deliveryModel extends CI_Model {


	public function insertdelivery($data){
		$this->db->insert('deliverytb',$data);
		return $this->db->insert_id();
	}

	public function updatedelivery($data){
		$this->db->where('deliveryIDPK',$data['deliveryIDPK']);
		return $this->db->update('deliverytb',$data);
	}

	public function deletedelivery($deliveryIDPK){
		$this->db->where('deliveryIDPK',$deliveryIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('deliverytb');
	}

	public function searchdelivery($deliveryIDPK){
		//$query = $this->db->get_where('deliverytb',array('deliveryIDPK'=>$deliveryIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('deliverytb');
		$this->db->where(array('deliveryIDPK'=>$deliveryIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showdelivery(){
		//$query = $this->db->get('deliverytb');
		//return $query->result_array();\
		$this->db->select('*');
		$this->db->from('deliverytb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
