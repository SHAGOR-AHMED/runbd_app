<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		
		$this->load->model("payment_model");
		$this->load->helper('User_helper');	
		$this->load->library('pdfgenerator');
	}
	
	public function index(){
		$data = array();
		$data['title'] = "Run BD | Search Result";
		$data['content'] = $this->load->view('admin/page/daily_payment_report', '', true);
		$this->load->view('admin/index',$data);
	}

	public function getPDFReport(){

		$data = array();
		$data['title'] = "Run BD | Daily Payment Report";
		$from = $this->input->post('from_date');
		$to = $this->input->post('to_date');
		$data['from'] = $this->input->post('from_date');
		$data['to'] = $this->input->post('to_date');
		$data['search_result'] = $this->payment_model->searchResult($from, $to);

		$data['cash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('payment_date >=', $from)->where('payment_date <=', $to)->where('payment_method', 1)->get()->row();
		$data['bkash_payment'] = $this->db->select_sum('amount')->from('tbl_daily_payment')->where('payment_date >=', $from)->where('payment_date <=', $to)->where('payment_method', 2)->get()->row();
		//$this->debug($data);
		$view_file = $this->load->view('admin/page/dailyPayment_pdfreport', $data, true);
		$filename = 'Daily-Payment-Report-'.$from.'---'.$to;
		$this->pdfgenerator->generate($view_file, $filename, true, 'A4', 'portrait'); 
	}


}//CI_Controller

?>