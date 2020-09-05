<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		
		$this->load->model("payment_model");
		$this->load->helper('User_helper');	
	}
	

	public function index(){
		$data = array();
		$data['message'] = array();
		$data['title'] = "Run BD | All Payment List";
		$data['all_payment'] = $this->payment_model->get_payment();
		$data['cash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('payment_method', 1)->get()->row();
		$data['bkash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('payment_method', 2)->get()->row();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_payment', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_payment(){

		$data['title'] = "Run BD | Add Daily Payment";
		$data['content'] = $this->load->view('admin/page/add_payment', '', true);
		$this->load->view('admin/index',$data);
		
	}

	public function save_payment(){

		$this->form_validation->set_rules('biker_name', 'Biker Name', 'required');
		$this->form_validation->set_rules('payment_date', 'Payment Date', 'required'); 
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('payment_method', 'Payment Method', 'required');

		if($this->form_validation->run() == FALSE){

			$data['content'] = $this->load->view('admin/page/add_payment', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['biker_name'] = $this->input->post('biker_name');
			$data['payment_date'] = $this->input->post('payment_date');
			$data['amount'] = $this->input->post('amount');
			$data['payment_method'] = $this->input->post('payment_method');

			$result = $this->payment_model->commonInsert('tbl_daily_payment',$data);
			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('Payment/index');
			}else{
				$msg = 'Failed to Add!!';
				$message = $this->msg($msg);
				redirect('Payment/index');
			}
			
		}//if
		
	}//save_payment

	public function edit_payment($id=''){
		
		$data['title'] = "Run BD | Edit Payment";
		$data['selected_info'] = $this->payment_model->edit_payment_byID($id);
		$data['content'] = $this->load->view('admin/page/edit_payment', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function update_payment(){

		$PaymentID = $this->input->post('payment_id');
		$biker_name = $this->input->post('biker_name');
		$payment_date = $this->input->post('payment_date');
		$amount = $this->input->post('amount');
		$payment_method = $this->input->post('payment_method');

		$this->db->set('biker_name', $biker_name);
		$this->db->set('payment_date', $payment_date);
		$this->db->set('amount', $amount);
		$this->db->set('payment_method', $payment_method);
		
		$result = $this->payment_model->update_payment_byID($PaymentID);

		if($result){
			$msg = 'Update successfully';
			$message = $this->msg($msg);
			redirect('Payment/index');

		}else{
			$msg = $name.' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Payment/index');
		}
			
	}//update_payment

    public function delete_payment($Id=''){

		$result = $this->payment_model->delete_payment_byID($Id);
		
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('Payment/index');	
		}else{
			$message = 'Failed to Delete';
			$this->session->set_flashdata('message', $message);
			redirect('Payment/index');
		}
	}

//========================== search ============================//

	public function search(){

		$data = array();
		$data['title'] = "Run BD | Search Result";
		$from = $this->input->post('from_date');
		$to = $this->input->post('to_date');
		$data['search_result'] = $this->payment_model->searchResult($from, $to);

		$data['cash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('payment_date >=', $from)->where('payment_date <=', $to)->where('payment_method', 1)->get()->row();
		$data['bkash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('payment_date >=', $from)->where('payment_date <=', $to)->where('payment_method', 2)->get()->row();
		//$this->debug($data);
		$data['content'] = $this->load->view('admin/page/view_payment', $data, true);
		$this->load->view('admin/index',$data);
	}

//========================== search by member name with date ============================//

	public function searchIndividual(){

		$data = array();
		$data['title'] = "Run BD | Search Result";
		$data['content'] = $this->load->view('admin/page/search_details', '', true);
		$this->load->view('admin/index',$data);
	}

	public function getSearchResult(){

		$data = array();
		$data['title'] = "Run BD | Search Result";
		$biker_name = $this->input->post('biker_name');
		$from = $this->input->post('from_date');
		$to = $this->input->post('to_date');
		$data['search_result'] = $this->payment_model->specificSearchResult($biker_name, $from, $to);

		$data['cash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('biker_name', $biker_name)->where('payment_date >=', $from)->where('payment_date <=', $to)->where('payment_method', 1)->get()->row();

		$data['bkash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('biker_name', $biker_name)->where('payment_date >=', $from)->where('payment_date <=', $to)->where('payment_method', 2)->get()->row();

		//$this->debug($data);
		$data['content'] = $this->load->view('admin/page/search_details', $data, true);
		$this->load->view('admin/index',$data);
	}

}//CI_Controller

?>