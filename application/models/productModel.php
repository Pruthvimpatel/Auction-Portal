<?php 
class productModel extends CI_Model {


	public function insertproduct($data){
		$this->db->insert('producttb',$data);
		return $this->db->insert_id();
	}

	public function updateProduct($data){
		$this->db->where('productIDPK',$data['productIDPK']);
		return $this->db->update('producttb',$data);
	}

	public function deleteproduct($productIDPK){
		$this->db->where('productIDPK',$productIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('producttb');
	}

	public function searchproduct($productIDPK){
		$this->db->select('*');
		$this->db->from('producttb');
		$this->db->where(array('productIDPK'=>$productIDPK));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function searchproductAdmin($productIDPK){
		$this->db->select('*');
		$this->db->from('producttb');
		$this->db->where(array('productIDPK'=>$productIDPK));
		$query = $this->db->get();
		return $query->row_array();
	}

	public function searchproductBid($productIDPK){
		$this->db->select('*');
		$this->db->from('producttb');
		$this->db->where(array('productIDPK'=>$productIDPK,'isActive'=>1));
		
		$query = $this->db->get();
		return $query->row_array();
	}

	public function showproduct(){
		$this->db->select('p.*,c.categoryName,s.subCategoryName');
		$this->db->from('producttb p');
		$this->db->join('categorytb c','c.categoryIDPK=p.categoryIDFK');
		$this->db->join('subcategorytb s','s.subcategoryIDPK=p.subcategoryIDFK');
		$this->db->where('StartDate <=',date('Y-m-d'));
		$this->db->where('EndDate >=',date('Y-m-d'));
		
		$this->db->where(array('p.isActive'=>1));
		
		$query = $this->db->get();
		return $query->result_array();
	}


	public function showproductByDate(){
		$this->db->select('p.*,c.categoryName,s.subCategoryName');
		$this->db->from('producttb p');
		$this->db->join('categorytb c','c.categoryIDPK=p.categoryIDFK');
		$this->db->join('subcategorytb s','s.subcategoryIDPK=p.subcategoryIDFK');
		$this->db->where('StartDate <=',date('Y-m-d'));
		$this->db->where('EndDate >=',date('Y-m-d'));
		$this->db->where(array('p.isActive'=>1,));
		
		$query = $this->db->get();
	//	echo $this->db->last_query();die;	
		return $query->result_array();
	}

	public function showproductByCategory($id){
		$this->db->select('*');
		$this->db->from('producttb');
		$this->db->where(array('isActive'=>1,'categoryIDFK'=>$id));
		$this->db->where('StartDate <=',date('Y-m-d'));
		$this->db->where('EndDate >=',date('Y-m-d'));
		
		$query = $this->db->get();
		return $query->result_array();
	}
      
	public function showproductBysubCategory($id){
		$this->db->select('*');
		$this->db->from('producttb');
		$this->db->where(array('isActive'=>1,'subcategoryIDFK'=>$id));
		$this->db->where('StartDate <=',date('Y-m-d'));
		$this->db->where('EndDate >=',date('Y-m-d'));
		$query = $this->db->get();
		return $query->result_array();
	}
 
	public function showproductsDetail($id){
		$this->db->select('*');
		$this->db->from('producttb');
		$this->db->where(array('isActive'=>1,'productIDPK'=>$id));
		$query = $this->db->get();
		return $query->row_array();
	}

	


	public function showPopularProduct(){
		
		$this->db->select('*');
		$this->db->from('producttb');
		$this->db->where('StartDate <=',date('Y-m-d'));
		$this->db->where('EndDate >=',date('Y-m-d'));
		$this->db->where(array('isActive'=>1));
		$this->db->order_by('productIDPK','DESC');
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result_array();
	}
} 