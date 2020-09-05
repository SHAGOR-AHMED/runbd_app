<?php

class BikeDistribution_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	public function get_biker(){

		//$query = $this->db->select('*')->from('tbl_bikers')->get()->result();
		$this->db->select('tbl_bikers.*');
		$this->db->select('tbl_members.member_name');
		$this->db->select('tbl_bikes.bike_no');
		$this->db->from('tbl_bikers');
		$this->db->join('tbl_members', 'tbl_members.member_id = tbl_bikers.biker_name');
		$this->db->join('tbl_bikes', 'tbl_bikes.bike_id = tbl_bikers.bike_no');
		$this->db->order_by('biker_id', 'DESC');
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}

	public function biker_edit_byID($id = ''){

		$query = $this->db->select('*')->from('tbl_bikers')->where('biker_id', $id)->get()->row();
		return $query;
	}

	public function update_biker_byID($BikerID = ''){

		$result = $this->db->where('biker_id', $BikerID)->update('tbl_bikers');
		return $result;
	}

	public function delete_biker_byID($Id){

		$result = $this->db->where('biker_id', $Id)->delete('tbl_bikers');
		return $result;
	}

//================ do return ==================//

	public function returnBike_byID($ID = ''){

		$result = $this->db->set('status',0)->where('biker_id', $ID)->update('tbl_bikers');
		return $result;
	}

	public function ridingBike_byID($ID = ''){

		$result = $this->db->set('status',1)->where('biker_id', $ID)->update('tbl_bikers');
		return $result;
	}
	
}//End CI_Model

?>