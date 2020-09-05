<?php

class Account_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	public function get_calculation(){

		$query = $this->db->select('*')->select('tbl_members.member_name')->from('tbl_account')->join('tbl_members', 'tbl_members.member_id = tbl_account.biker_name')->order_by('account_id','DESC')->get()->result();
		return $query;
	}

	public function edit_account_byID($id = ''){

		$query = $this->db->select('*')->from('tbl_account')->where('account_id', $id)->get()->row();
		return $query;
	}

	public function update_account_byID($AccountID){

		$result = $this->db->where('account_id', $AccountID)->update('tbl_account');
		return $result;
	}
	

}//End CI_Model

?>