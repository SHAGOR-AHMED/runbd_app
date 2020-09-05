<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		$this->load->model("member_model");
		$this->load->helper('user_helper');	
	}
	
	public function index(){
		$data = array();
		$data['message'] = array();
		$data['title'] = "Run BD | All Members List";
		$data['all_members'] = $this->member_model->get_members();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_member', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function add_member(){

		$data['title'] = "Run BD | Add New Member";
		$data['content'] = $this->load->view('admin/page/add_member', '', true);
		$this->load->view('admin/index',$data);
	}


	// public function ViewMemberDetails(){

 //        $MemID = $this->input->post('id');
 //        $data['MemberDesc'] = $this->member_model->MembersDetails($MemID);
 //        $this->load->view('backend/member_detail', $data);

	// }

	public function save_member(){

		// start form validation
		$this->form_validation->set_rules('member_name', 'Member Name', 'required');
		$this->form_validation->set_rules('official_number', 'Official Number', 'required|max_length[11]');
		$this->form_validation->set_rules('personal_number', 'Personal Number', 'required|max_length[11]');
		$this->form_validation->set_rules('joining_date', 'Joining Date', 'required');
		$this->form_validation->set_rules('father_mobile', 'Father Mobile No', 'required|max_length[11]');
		$this->form_validation->set_rules('mother_mobile', 'Mother Mobile No', 'required|max_length[11]');

		if($this->form_validation->run() == FALSE){

			$data['title'] = "Run BD | Add New Member";
			$data['content'] = $this->load->view('admin/page/add_member', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['member_name'] = $this->input->post('member_name');
			$data['official_number'] = $this->input->post('official_number');
			$data['personal_number'] = $this->input->post('personal_number');
			$data['joining_date'] = $this->input->post('joining_date');
			$data['father_mobile'] = $this->input->post('father_mobile');
			$data['mother_mobile'] = $this->input->post('mother_mobile');
			$data['img'] = $this->uploadPhoto();

			$result = $this->member_model->commonInsert('tbl_members',$data);

			if($result){
				$msg = 'Member has been created successfully';
				$message = $this->msg($msg);
				redirect('member/index');
			}else{
				$msg = 'Failed to Add Member';
				$message = $this->msg($msg);
				redirect('member/index');
			}

		}//if

	}//save_member

	public function edit_member($MemberId=''){

		$data = array();
		$data['title'] = "Run BD | Edit Member Information";				
		$data['member_info'] = $this->member_model->Select_Member_byID($MemberId);
		$data['content'] = $this->load->view('admin/page/edit_member', $data, true);
		$this->load->view('admin/index',$data);
			
	}

	public function update_member(){

		$member_id = $this->input->post('member_id');
		$member_name = $this->input->post('member_name');
		$official_number = $this->input->post('official_number');
		$personal_number = $this->input->post('personal_number');
		$joining_date = $this->input->post('joining_date');
		$father_mobile = $this->input->post('father_mobile');
		$mother_mobile = $this->input->post('mother_mobile');

		$this->db->set('member_name', $member_name);
		$this->db->set('official_number', $official_number);
		$this->db->set('personal_number', $personal_number);
		$this->db->set('joining_date', $joining_date);
		$this->db->set('father_mobile', $father_mobile);
		$this->db->set('mother_mobile', $mother_mobile);

		if(isset($member_id) && $member_id != ''){

			$data = array('member_id' => $member_id);
			$prev_info = $this->db->get_where("tbl_members",$data)->row();
			if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] != '')){
				unlink($prev_info->img);
			}
		}

		if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] != '')){

			$photo = $this->updatePhoto();
		}

		//$this->debug($data);

		$result = $this->member_model->Update_Member_byID($member_id);
		
		if($result){
			$message = 'Updated Successfully';
			$this->session->set_flashdata('message', $message);
			redirect('member/index');	
		}else{
			$message = 'Failed to Update';
			$this->session->set_flashdata('message', $message);
			redirect('member/index');
		}

	}//Update_Member

	public function delete_member($MemberId=''){

		$result = $this->member_model->Delete_Member($MemberId);
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('member/index');	
		}else{
			$message = 'Failed to Deleted';
			$this->session->set_flashdata('message', $message);
			redirect('member/index');
		}
	}


//============================= membership fees ========================//

	public function MerbershipFees(){
		$data = array();
		$data['message'] = array();
		$data['title'] = "Run BD | Membership Fees";
		$data['membership_fees'] = $this->member_model->getMembershipFees();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_membership_fees', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function add_membershipFees(){
		$data = array();
		$data['title'] = "Run BD | Add Membership Fees";
		$data['content'] = $this->load->view('admin/page/add_membership_fees', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_MembershipFees(){

		// start form validation
		$this->form_validation->set_rules('member_id', 'Member Name', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');

		if($this->form_validation->run() == FALSE){
			$data = array();
			$data['title'] = "Run BD | Add Membership Fees";
			$data['content'] = $this->load->view('admin/page/add_membership_fees', '', true);
			$this->load->view('admin/index',$data);
			return false;
		}else{

			$data['member_id'] = $this->input->post('member_id');
			$data['amount'] = $this->input->post('amount');

			$result = $this->member_model->commonInsert('tbl_membership_fees',$data);

			if($result){
				$msg = 'Membership Fees created successfully';
				$message = $this->msg($msg);
				redirect('member/MerbershipFees');
			}else{
				$msg = 'Failed to Add';
				$message = $this->msg($msg);
				redirect('member/MerbershipFees');
			}

		}//if

	}//save_MembershipFees

	public function Edit_MembershipFees($FeesId = ''){
		$data = array();
		$data['title'] = "Run BD | Edit Membership Fees";				
		$data['selected_info'] = $this->member_model->Select_MembershipFees_byID($FeesId);
		$data['content'] = $this->load->view('admin/page/edit_membership_fees', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function update_MembershipFees(){

		$FeesID = $this->input->post('fees_id');
		$member_id = $this->input->post('member_id');
		$amount = $this->input->post('amount');

		$this->db->set('member_id', $member_id);
		$this->db->set('amount', $amount);
		//$this->debug($data);

		$result = $this->member_model->Update_MembershipFees_byID($FeesID);
		
		if($result){
			$message = 'Updated Successfully';
			$this->session->set_flashdata('message', $message);
			redirect('member/MerbershipFees');	
		}else{
			$message = 'Failed to Update';
			$this->session->set_flashdata('message', $message);
			redirect('member/MerbershipFees');
		}

	}//update_MembershipFees

	public function Delete_MembershipFees($FeesId = ''){

		$result = $this->member_model->Delete_MembershipFees($FeesId);
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('member/MerbershipFees');	
		}else{
			$message = 'Failed to Delete';
			$this->session->set_flashdata('message', $message);
			redirect('member/MerbershipFees');
		}
	}

//====================================================================//

	public function display_bike_no($val = null){

		$data = $this->db->select('biker_id,bike_no')->from('tbl_bikers')->where('biker_name', $val)->get()->row();

        $BikeNo = $data->bike_no;

        echo $BikeNo;exit;

        if ($data) {
            echo $BikeNo;
        } else {
            echo 0;
        }

	}//display_bike_no

	public function display_subscription_fees($val = null){

		$data = $this->db->select('*')->from('tbl_membership_fees')->where('member_id', $val)->get()->row();

        $SubscriptionFees = $data->amount;

        if ($data) {
            echo $SubscriptionFees;
        } else {
            echo 0;
        }

	}//display_subscription_fees


//============== Change Password ==================//

	public function change_password($userID=''){

		$data['user_id'] =  $userID;
		$data['notices'] = $this->dashboard_model->get_current_notice();
		$data['message'] = $this->session->flashdata('message');
		$data['title'] = "LOTUS | Change Password";
		$this->load->view('backend/template_header', $data);
		$this->load->view('backend/template_left');
		$this->load->view('backend/password_change');
		$this->load->view('backend/template_footer');
	}

	public function password_change(){
		
		$userID = $this->input->post('id');
    	$old_pass = md5($this->input->post('old_password'));
    	$new_pass = md5($this->input->post('new_password'));
    	$login_type = $this->session->userdata('login_type');

    	if($login_type == 1){

    		$pre_info = $this->db->select('*')->from('user')->where('id', $userID)->get()->row();

	    	$pre_pass = $pre_info->password;

	  		if($pre_pass == $old_pass){

				$result = $this->member_model->update_password($userID,$new_pass);

				if($result){

					$this->session->sess_destroy();
			        $msg = '<font color=red>Password has been changed successfully.</font><br />';
                	$this->index($msg);
                	redirect("login");

				}else{

					$msg = "Fail to update password.!!!";
					$message = $this->msg($msg);
					redirect('user/change_password/'.$userID);
				}

	  		}else{

				$msg = "Old Password doesn't Match.!!!";
				$message = $this->msg($msg);
				redirect('user/change_password/'.$userID);
	  			
	  		}
    	}
		
	}//password_change


	public function do_logout(){

    	$this->session->sess_destroy();
        $message = 'You have Logged Out!';
		$msg = $this->msg($message);
        redirect("login");
    }
	
}//CI_Controller

?>