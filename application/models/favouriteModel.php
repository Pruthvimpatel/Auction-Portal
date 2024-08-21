<?php 
class auctionModel extends CI_Model {


	public function insertfavouritr($data){
		$this->db->insert('favouritetb',$data);
		return $this->db->insert_id();
	}

	public function updatefavourite($data){
		$this->db->where('favouriteIDPK',$data['favouriteIDPK']);
		return $this->db->update('favouritetb',$data);
	}

	public function deletefavourite($favouriteIDPK){
		$this->db->where('favouriteIDPK',$favouriteIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('favouritetb');
	}

	public function searchfavourite($favouriteIDPK){
		$this->db->select('*');
		$this->db->from('favouritetb');
		$this->db->where(array('favouriteIDPK'=>$favouriteIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showfavourite(){
		$this->db->select('f.*,p.productName');
		$this->db->from('favouritetb f');
		$this->db->join('producttb p','p.productIDPK=f.productIDFK');
        $this->db->join('usertb u','u.userIDPK=f.userIDFK');
		$this->db->where(array('f.isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}
} 
