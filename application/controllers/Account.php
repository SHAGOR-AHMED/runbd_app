<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		// if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
  //           if ($this->router->class != 'login'){                        
  //               redirect(base_url());
  //           }
  //       }
		
		$this->load->model("account_model");
		$this->load->helper('User_helper');	
	}
	
	public function index(){
		$data = array();
		$data['message'] = array();
		$data['title'] = "Run BD | Bikers Account Information";
		$data['calculation'] = $this->account_model->get_calculation();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_account', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_account(){

		$data['title'] = "Run BD | Add New Account Record";
		$data['content'] = $this->load->view('admin/page/add_account', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_account(){

		$this->form_validation->set_rules('biker_name', 'Biker Name', 'required');
		$this->form_validation->set_rules('from_date', 'From', 'required');
		$this->form_validation->set_rules('to_date', 'To', 'required'); 
		$this->form_validation->set_rules('total_payable', 'Total Payable', 'required'); 
		$this->form_validation->set_rules('total_deposite', 'Total Deposite', 'required'); 
		$this->form_validation->set_rules('total_incentive', 'Total Incentive', 'required'); 

		if($this->form_validation->run() == FALSE){

			$data['title'] = "Run BD | Add New Account Record";
			$data['content'] = $this->load->view('admin/page/add_account', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['biker_name'] = $this->input->post('biker_name');
			$data['subsciption_fees'] = $this->input->post('subsciption_fees');
			$data['from_date'] = $this->input->post('from_date');
			$data['to_date'] = $this->input->post('to_date');
			$data['total_payable'] = $this->input->post('total_payable');
			$data['total_deposite'] = $this->input->post('total_deposite');
			$data['total_incentive'] = $this->input->post('total_incentive');
			$data['loan'] = $this->input->post('loan');
			$totalPaid = $data['total_deposite'] + $data['total_incentive'];
			$totalAmount = $totalPaid - $data['loan'] - $data['subsciption_fees'];
			$data['net_amount'] = $data['total_payable'] - $totalAmount;
			//echo $totalPaid.'-------------------'.$totalAmount;
			//$this->debug($data);

			$result = $this->account_model->commonInsert('tbl_account',$data);
			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('Account/index');
			}else{
				$msg = 'Failed to Add!!!';
				$message = $this->msg($msg);
				redirect('Account/index');
			}
			
		}//if
		
	}//save_account

	public function edit_account($id=''){
		$data = array();
		$data['title'] = "Run BD | Edit Account Information";
		$data['selected_info'] = $this->account_model->edit_account_byID($id);
		$data['content'] = $this->load->view('admin/page/edit_account', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function update_account(){

		$AccountID = $this->input->post('account_id');
		$biker_name = $this->input->post('biker_name');
		$subsciption_fees = $this->input->post('subsciption_fees');
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$total_payable = $this->input->post('total_payable');
		$total_deposite = $this->input->post('total_deposite');
		$total_incentive = $this->input->post('total_incentive');
		$loan = $this->input->post('loan');
		$totalPaid = $total_deposite + $total_incentive;
		$totalAmount = $totalPaid - $loan;
		$net_amount = $total_payable - $totalAmount;

		$this->db->set('biker_name', $biker_name);
		$this->db->set('subsciption_fees', $subsciption_fees);
		$this->db->set('from_date', $from_date);
		$this->db->set('to_date', $to_date);
		$this->db->set('total_payable', $total_payable);
		$this->db->set('total_deposite', $total_deposite);
		$this->db->set('total_incentive', $total_incentive);
		$this->db->set('loan', $loan);
		$this->db->set('net_amount', $net_amount);
		
		$result = $this->account_model->update_account_byID($AccountID);

		if($result){
			$msg = 'Update successfully';
			$message = $this->msg($msg);
			redirect('Account/index');
		}else{
			$msg = $name.' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Account/index');
		}
			
	}//update_account

}//CI_Controller

?>