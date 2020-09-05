<?php

class Member_model extends Base_Model {
	
	public function __construct(){
		parent::__construct();
	}//Function
	
	public function get_members(){

		$query = $this->db->select('*')->from('tbl_members')->order_by('member_id','DESC')->get()->result();
		return $query;
	}

    // public function MembersDetails($MemID){

    //     $query = $this->db->select('*')->from('tbl_members')->where('member_id',$MemID)->get()->row();
    //     return $query;
    // }

	public function Select_Member_byID($MemberId){

		$query = $this->db->select('*')->from('tbl_members')->where('member_id', $MemberId)->get()->row();
		return $query;
	}

	public function Update_Member_byID($member_id){

		$result = $this->db->where('member_id',$member_id)->update('tbl_members');
		return $result;
	}

	public function Delete_Member($MemberId){

		$data = array('member_id'=>$MemberId);
		$photo = $this->db->get_where('tbl_members',$data)->row();
		unlink($photo->img);
		$result = $this->db->where('member_id',$MemberId)->delete('tbl_members');
		return true;
	}

//==================== Membership Fees =============================//

	public function getMembershipFees(){

		$query = $this->db->select('*')->select('tbl_members.member_name')->from('tbl_membership_fees')->join('tbl_members', 'tbl_members.member_id = tbl_membership_fees.member_id')->order_by('fees_id','DESC')->get()->result();
		return $query;
	}

	public function Select_MembershipFees_byID($FeesId){

		$query = $this->db->select('*')->from('tbl_membership_fees')->where('fees_id', $FeesId)->get()->row();
		return $query;
	}

	public function Update_MembershipFees_byID($FeesID){

		$result = $this->db->where('fees_id',$FeesID)->update('tbl_membership_fees');
		return $result;
	}

	public function Delete_MembershipFees($FeesId){

		$result = $this->db->where('fees_id',$FeesId)->delete('tbl_membership_fees');
		return $result;
	}
	
}//End CI_Model

?>