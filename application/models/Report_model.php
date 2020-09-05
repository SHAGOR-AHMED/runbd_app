<?php

class Report_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	public function get_payment(){

		$query = $this->db->select('tbl_daily_payment.*')->select('tbl_members.member_name')->from('tbl_daily_payment')->join('tbl_members','tbl_members.member_id=tbl_daily_payment.biker_name')->order_by('payment_id','DESC')->get()->result();
		return $query;
	}

	public function searchResult($from, $to){

		$this->db->select('tbl_daily_payment.*');
		$this->db->select('tbl_members.member_name');
		$this->db->from('tbl_daily_payment');
		$this->db->join('tbl_members','tbl_members.member_id=tbl_daily_payment.biker_name');
		$this->db->where('payment_date >=', $from);
		$this->db->where('payment_date <=', $to);
		$get = $this->db->get();
		$query = $get->result();
		return $query;
		//$query="select * from table where date_column between "2001-01-05" and "2001-01-10";
	}
	

}//End CI_Model

?>