<?php

class Penalty_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	public function get_penalty(){

		$query = $this->db->select('tbl_penalty.*')->select('tbl_members.member_name')->from('tbl_penalty')->join('tbl_members','tbl_members.member_id=tbl_penalty.biker_name')->order_by('penalty_id','DESC')->get()->result();
		return $query;
	}

//SELECT *, FROM_UNIXTIME(timestamp) FROM `tbl_daily_payment` WHERE timestamp >= DATE_FORMAT(NOW(), '%Y-%m-01');

	public function edit_Penalty_byID($id = ''){

		$query = $this->db->select('*')->from('tbl_penalty')->where('penalty_id', $id)->get()->row();
		return $query;
	}

	public function update_Penalty_byID($PenaltyID = ''){

		$result = $this->db->where('penalty_id', $PenaltyID)->update('tbl_penalty');
		return $result;
	}

	public function delete_Penalty_byID($Id){

		$result = $this->db->where('penalty_id',$Id)->delete('tbl_penalty');
		return $result;
	}
	
}//End CI_Model

?>