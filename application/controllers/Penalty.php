<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penalty extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		// if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
  //           if ($this->router->class != 'login'){                        
  //               redirect(base_url());
  //           }
  //       }
		
		$this->load->model("penalty_model");
		$this->load->helper('User_helper');	
	}
	

	public function index(){

		$data['message'] = array();
		$data['title'] = "Run BD | All Penalty List";
		$data['all_penalty'] = $this->penalty_model->get_penalty();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_penalty', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_penalty(){

		$data['title'] = "Run BD | Add Penalty";
		$data['content'] = $this->load->view('admin/page/add_penalty', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_penalty(){

		$this->form_validation->set_rules('biker_name', 'Biker Name', 'required');
		$this->form_validation->set_rules('joining_date', 'Joining Date', 'required'); 
		$this->form_validation->set_rules('release_date', 'Release Date', 'required'); 
		$this->form_validation->set_rules('total_deposite', 'Total Deposite', 'required');
		$this->form_validation->set_rules('late_deposite', 'Late Deposite', 'required');
		$this->form_validation->set_rules('depreciation', 'Depreciation', 'required');
		$this->form_validation->set_rules('purpose', 'Purpose of Release', 'required');

		if($this->form_validation->run() == FALSE){

			$data['content'] = $this->load->view('admin/page/add_penalty', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['biker_name'] = $this->input->post('biker_name');
			$data['joining_date'] = $this->input->post('joining_date');
			$data['release_date'] = $this->input->post('release_date');

			$date1      = date_create($data['joining_date']);
			$date2      = date_create($data['release_date']);
			$diff       = date_diff($date1,$date2);
			$days       = $diff->format("%a")+1;

			$data['working_days'] = $days;
			$data['total_deposite'] = $this->input->post('total_deposite');
			$data['late_deposite'] = $this->input->post('late_deposite');
			$data['depreciation'] = $this->input->post('depreciation');
			$data['total_fine'] = $data['late_deposite'] + $data['depreciation'];
			$data['purpose'] = $this->input->post('purpose');
			//$this->debug($data);

			$result = $this->penalty_model->commonInsert('tbl_penalty',$data);

			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('Penalty/index');
			}else{
				$msg = 'Failed to Add!!';
				$message = $this->msg($msg);
				redirect('Penalty/index');
			}
			
		}//if
		
	}//save_Penalty

	public function edit_penalty($id=''){
		
		$data['title'] = "Run BD | Edit Penalty";
		$data['selected_info'] = $this->penalty_model->edit_Penalty_byID($id);
		$data['content'] = $this->load->view('admin/page/edit_penalty', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function update_penalty(){

		$PenaltyID = $this->input->post('penalty_id');
		$biker_name = $this->input->post('biker_name');
		$joining_date = $this->input->post('joining_date');
		$release_date = $this->input->post('release_date');
		$total_deposite = $this->input->post('total_deposite');
		$late_deposite = $this->input->post('late_deposite');
		$depreciation = $this->input->post('depreciation');
		$total_fine = $late_deposite + $depreciation;
		$purpose = $this->input->post('purpose');

		$this->db->set('biker_name', $biker_name);
		$this->db->set('joining_date', $joining_date);
		$this->db->set('release_date', $release_date);
		$this->db->set('total_deposite', $total_deposite);
		$this->db->set('late_deposite', $late_deposite);
		$this->db->set('depreciation', $depreciation);
		$this->db->set('total_fine', $total_fine);
		$this->db->set('purpose', $purpose);
		
		$result = $this->penalty_model->update_Penalty_byID($PenaltyID);

		if($result){
			$msg = 'Update successfully';
			$message = $this->msg($msg);
			redirect('Penalty/index');

		}else{
			$msg = $name.' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Penalty/index');
		}
			
	}//update_Penalty

    public function delete_penalty($Id=''){

		$result = $this->penalty_model->delete_Penalty_byID($Id);
		
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('Penalty/index');	
		}else{
			$message = 'Failed to Delete';
			$this->session->set_flashdata('message', $message);
			redirect('Penalty/index');
		}
	}


}//CI_Controller

?>