<?php

class Bike_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	public function get_bikes(){

		$query = $this->db->select('*')->from('tbl_bikes')->get()->result();
		return $query;
	}

	public function bike_edit($id = ''){

		$query = $this->db->select('*')->from('tbl_bikes')->where('bike_id', $id)->get()->row();
		return $query;
	}

	public function update_bike_byID($BikeID = ''){

		$result = $this->db->where('bike_id', $BikeID)->update('tbl_bikes');
		return $result;
	}

	public function delete_bike_byID($Id){

		$data = array('bike_id' => $Id);
		$photo = $this->db->get_where('tbl_bikes',$data)->row();
		unlink($photo->img);
		$result = $this->db->where('bike_id',$Id)->delete('tbl_bikes');
		return $result;
	}

//===================== return bike ==========================//

	public function returnBike(){

		$this->db->select('tbl_return_bikes.*');
		$this->db->select('tbl_members.member_name');
		$this->db->select('tbl_bikes.bike_no');
		$this->db->from('tbl_return_bikes');
		$this->db->join('tbl_members', 'tbl_members.member_id = tbl_return_bikes.biker_name');
		$this->db->join('tbl_bikes', 'tbl_bikes.bike_id = tbl_return_bikes.bike_no');
		$this->db->order_by('return_id', 'DESC');
		$get = $this->db->get();
		$query = $get->result();
		return $query;
	}

	public function edit_returnBike_byID($id = ''){

		$query = $this->db->select('*')->from('tbl_return_bikes')->where('return_id', $id)->get()->row();
		return $query;
	}

	public function update_returnBike_byID($ReturnID = ''){

		$result = $this->db->where('return_id', $ReturnID)->update('tbl_return_bikes');
		return $result;
	}

//===================== bike details ==================//

	// public function getBike_details($bikeID){

	// 	$this->db->select('tbl_bikers.*');
	// 	$this->db->select('tbl_bikes.*');
	// 	$this->db->select('tbl_return_bikes.*');
	// 	$this->db->select('tbl_members.member_name');
	// 	$this->db->from('tbl_bikers');
	// 	$this->db->join('tbl_members', 'tbl_members.member_id = tbl_bikers.biker_name');
	// 	$this->db->join('tbl_bikes', 'tbl_bikes.bike_id = tbl_bikers.bike_no');
	// 	$this->db->join('tbl_return_bikes', 'tbl_return_bikes.bike_no = tbl_bikers.bike_no');
	// 	$get = $this->db->get();
	// 	$query = $get->row();
	// 	return $query;
	// }

	public function get_BikeInfo_byID($bikeID){

		$query = $this->db->select('*')->from('tbl_bikes')->where('bike_id', $bikeID)->get()->row();
		return $query;
	}

	public function get_BikerInfo_byID($bikeID){

		$query = $this->db->select('*')->select('tbl_members.member_name')->from('tbl_bikers')->join('tbl_members', 'tbl_members.member_id = tbl_bikers.biker_name')->where('bike_no', $bikeID)->get()->result();
		return $query;
	}

	public function get_returnBikeInfo_byID($bikeID){

		$query = $this->db->select('*')->select('tbl_members.member_name')->from('tbl_return_bikes')->join('tbl_members', 'tbl_members.member_id = tbl_return_bikes.biker_name')->where('bike_no', $bikeID)->get()->result();
		return $query;

		// $query = $this->db->select('*')->select('tbl_members.member_name')->select('tbl_bikers.kilometer')->from('tbl_return_bikes')->join('tbl_members', 'tbl_members.member_id = tbl_return_bikes.biker_name')->join('tbl_bikers', 'tbl_bikers.bike_no = tbl_return_bikes.bike_no')->where('bike_no', $bikeID)->get()->result();
		// return $query;
	}
	
}//End CI_Model

?>