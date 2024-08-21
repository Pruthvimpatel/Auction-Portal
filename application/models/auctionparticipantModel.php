<?php 
class auctionparticipantModel extends CI_Model {


	public function insertauctionparticipant($data){
		$this->db->insert('auctionparticipanttb',$data);
		return $this->db->insert_id();
	}

	public function updateauctionparticipant($data){
		$this->db->where('aparticipantIDPK',$data['aparticipantIDPK']);
		return $this->db->update('auctionparticipanttb',$data);
	}

	public function deleteauctionparticipant($aparticipantIDPK){
		$this->db->where('aparticipantIDPK',$aparticipantIDPK);
		$this->db->set('isActive',0);
		return $this->db->update('auctionparticipanttb');
	}

	public function searchauctionparticipant($aparticipantIDPK){
		//$query = $this->db->get_where('auctionparticipanttb',array('aparticipantIDPK'=>$aparticipantIDPK));
		//return $query->row_array();
		$this->db->select('*');
		$this->db->from('auctionparticipanttb');
		$this->db->where(array('aparticipantIDPK'=>$aparticipantIDPK,'isActive'=>1));
		$query = $this->db->get();
		return $query->row_array();
	}
	public function showauctionparticipant(){
		//$query = $this->db->get('auctionparticipanttb');
		//return $query->result_array();
		$this->db->select('*');
		$this->db->from('auctionparticipanttb');
		$this->db->where(array('isActive'=>1));
		$query = $this->db->get();
		return $query->result_array();
	}

} 
