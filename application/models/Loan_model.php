<?php

class Loan_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	public function get_loan(){

		$query = $this->db->select('tbl_loan.*')->select('tbl_members.member_name')->from('tbl_loan')->join('tbl_members','tbl_members.member_id=tbl_loan.biker_name')->order_by('loan_id','DESC')->get()->result();
		return $query;
	}

	public function edit_loan_byID($id = ''){

		$query = $this->db->select('*')->from('tbl_loan')->where('loan_id', $id)->get()->row();
		return $query;
	}

	public function update_loan_byID($LoanID = ''){

		$result = $this->db->where('loan_id', $LoanID)->update('tbl_loan');
		return $result;
	}

	public function delete_loan_byID($Id){

		$result = $this->db->where('loan_id',$Id)->delete('tbl_loan');
		return $result;
	}
	
}//End CI_Model

?>