<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expense extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		// if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
  //           if ($this->router->class != 'login'){                        
  //               redirect(base_url());
  //           }
  //       }
		
		$this->load->model("expense_model");
		$this->load->helper('User_helper');	
	}
	

	public function index(){

		$data = array();
		$data['message'] = array();
		$data['title'] = "Run BD | All Daily Expense List";
		$data['all_expense'] = $this->expense_model->get_daily_expense();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_expense', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_expense(){

		$data = array();
		$data['title'] = "Run BD | Add Daily Expense";
		$data['content'] = $this->load->view('admin/page/add_expense', '', true);
		$this->load->view('admin/index',$data);
	}
	
	public function save_expense(){

		$this->form_validation->set_rules('expense_date', 'Expense Date', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('purpose', 'Purpose', 'required'); 

		if($this->form_validation->run() == FALSE){

			$data = array();
			$data['title'] = "Run BD | Add Daily Expense";
			$data['content'] = $this->load->view('admin/page/add_expense', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['expense_date'] = $this->input->post('expense_date');
			$data['amount'] = $this->input->post('amount');
			$data['purpose'] = $this->input->post('purpose');

			$result = $this->expense_model->commonInsert('tbl_expense',$data);
			if($result){
				$msg = 'New Record has been created successfully!!!';
				$message = $this->msg($msg);
				redirect('Expense/index');
			}else{
				$msg = 'Failed to save!!!';
				$message = $this->msg($msg);
				redirect('Expense/index');
			}
			
		}//if
		
	}//save_expense

	public function Edit_Expense($id=''){
		
		$data = array();
		$data['title'] = "Run BD | Update Daily Expense";
		$data['selected_info'] = $this->expense_model->edit_daily_expense($id);
		$data['content'] = $this->load->view('admin/page/edit_expense', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function update_expense(){

		$ExpenseID = $this->input->post('expense_id');
		$expense_date = $this->input->post('expense_date');
		$amount = $this->input->post('amount');
		$purpose = $this->input->post('purpose');

		$this->db->set('expense_date', $expense_date);
		$this->db->set('amount', $amount);
		$this->db->set('purpose', $purpose);
		
		$result = $this->expense_model->Update_Expense($ExpenseID);

		if($result){
			$msg = 'Updated successfully';
			$message = $this->msg($msg);
			redirect('Expense/index');

		}else{
			$msg = ' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Expense/index');
		}
			
	}//update_expense

    public function DeleteExpense($Id=''){

		$result = $this->expense_model->Delete_DailyExpense($Id);
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('Expense/index');	
		}else{
			$message = 'Failed to Deleted';
			$this->session->set_flashdata('message', $message);
			redirect('Expense/index');
		}
	}


}//CI_Controller

?>