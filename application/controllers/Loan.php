<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loan extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		// if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
  //           if ($this->router->class != 'login'){                        
  //               redirect(base_url());
  //           }
  //       }
		
		$this->load->model("loan_model");
		$this->load->helper('User_helper');	
	}
	

	public function index(){

		$data['message'] = array();
		$data['title'] = "Run BD | All Loan List";
		$data['all_loan'] = $this->loan_model->get_loan();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_loan', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_loan(){

		$data['title'] = "Run BD | Add Daily Payment";
		$data['content'] = $this->load->view('admin/page/add_loan', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_loan(){

		$this->form_validation->set_rules('biker_name', 'Biker Name', 'required');
		$this->form_validation->set_rules('payment_date', 'Payment Date', 'required'); 
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('payment_method', 'Payment Method', 'required');
		$this->form_validation->set_rules('purpose', 'Purpose', 'required');

		if($this->form_validation->run() == FALSE){

			$data['content'] = $this->load->view('admin/page/add_payment', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['biker_name'] = $this->input->post('biker_name');
			$data['payment_date'] = $this->input->post('payment_date');
			$data['amount'] = $this->input->post('amount');
			$data['payment_method'] = $this->input->post('payment_method');
			$data['purpose'] = $this->input->post('purpose');

			$result = $this->loan_model->commonInsert('tbl_loan',$data);
			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('Loan/index');
			}else{
				$msg = 'Failed to Add!!';
				$message = $this->msg($msg);
				redirect('Loan/index');
			}
			
		}//if
		
	}//save_loan

	public function edit_loan($id=''){
		
		$data['title'] = "Run BD | Edit Loan";
		$data['selected_info'] = $this->loan_model->edit_loan_byID($id);
		$data['content'] = $this->load->view('admin/page/edit_loan', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function update_loan(){

		$LoanID = $this->input->post('loan_id');
		$biker_name = $this->input->post('biker_name');
		$payment_date = $this->input->post('payment_date');
		$amount = $this->input->post('amount');
		$payment_method = $this->input->post('payment_method');
		$purpose = $this->input->post('purpose');

		$this->db->set('biker_name', $biker_name);
		$this->db->set('payment_date', $payment_date);
		$this->db->set('amount', $amount);
		$this->db->set('payment_method', $payment_method);
		$this->db->set('purpose', $purpose);
		
		$result = $this->loan_model->update_loan_byID($LoanID);

		if($result){
			$msg = 'Update successfully';
			$message = $this->msg($msg);
			redirect('Loan/index');

		}else{
			$msg = $name.' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Loan/index');
		}
			
	}//update_loan

    public function delete_loan($Id=''){

		$result = $this->loan_model->delete_loan_byID($Id);
		
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('Loan/index');	
		}else{
			$message = 'Failed to Delete';
			$this->session->set_flashdata('message', $message);
			redirect('Loan/index');
		}
	}


}//CI_Controller

?>