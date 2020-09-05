<?php

class Servicing_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	// public function get_servicing_info(){

	// 	$this->db->select('tbl_servicing.*');
	// 	$this->db->select('tbl_members.member_name');
	// 	$this->db->select('tbl_bikes.bike_no');
	// 	$this->db->from('tbl_servicing');
	// 	$this->db->join('tbl_members', 'tbl_members.member_id = tbl_servicing.biker_name');
	// 	$this->db->join('tbl_bikes', 'tbl_bikes.bike_id = tbl_servicing.bike_no');
	// 	$get = $this->db->get();
	// 	$query = $get->result();
	// 	return $query;
	// }

	public function get_servicing_info($biker_name=''){

		$this->db->select('tbl_servicing.*');
		$this->db->select('tbl_members.member_name');
		$this->db->select('tbl_bikes.bike_no');
		$this->db->from('tbl_servicing');
		$this->db->join('tbl_members', 'tbl_members.member_id = tbl_servicing.biker_name');
		$this->db->join('tbl_bikes', 'tbl_bikes.bike_id = tbl_servicing.bike_no');
		$this->db->where('biker_name', $biker_name);
		$this->db->order_by('servicing_id', 'DESC');
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}

	public function servicing_done($ServicingID = ''){

		$result = $this->db->set('status',1)->where('servicing_id', $ServicingID)->update('tbl_servicing');
		return $result;
	}

	public function get_DoneServicing_info(){

		$this->db->select('tbl_servicing.*');
		$this->db->select('tbl_members.member_name');
		$this->db->select('tbl_bikes.bike_no');
		$this->db->from('tbl_servicing');
		$this->db->join('tbl_members', 'tbl_members.member_id = tbl_servicing.biker_name');
		$this->db->join('tbl_bikes', 'tbl_bikes.bike_id = tbl_servicing.bike_no');
		$this->db->where('status', 1);
		$this->db->order_by('servicing_id', 'DESC');
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}

	public function get_NotDoneServicing_info(){

		$this->db->select('tbl_servicing.*');
		$this->db->select('tbl_members.member_name');
		$this->db->select('tbl_bikes.bike_no');
		$this->db->from('tbl_servicing');
		$this->db->join('tbl_members', 'tbl_members.member_id = tbl_servicing.biker_name');
		$this->db->join('tbl_bikes', 'tbl_bikes.bike_id = tbl_servicing.bike_no');
		$this->db->where('status', 0);
		$this->db->order_by('servicing_id', 'DESC');
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}
	
}//End CI_Model
?>