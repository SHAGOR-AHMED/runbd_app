<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BikeDistribution extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
                   
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		
		$this->load->model("bikedistribution_model");
		$this->load->helper('User_helper');
	}
	
	public function index(){

		$data['message'] = array();
		$data['title'] = "Run BD | All Bikers List";
		$data['all_biker'] = $this->bikedistribution_model->get_biker();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_biker', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_BikeDistribution(){

		$data['title'] = "Run BD | Add New Biker";
		$data['content'] = $this->load->view('admin/page/add_biker', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_biker(){

		$this->form_validation->set_rules('biker_name', 'Biker Name', 'required');
		$this->form_validation->set_rules('bike_name', 'Bike Name', 'required');
		$this->form_validation->set_rules('bike_no', 'Bike No', 'required');
		$this->form_validation->set_rules('distribution_date', 'Distribution Date', 'required'); 
		$this->form_validation->set_rules('kilometer', 'Kilometer', 'required');  

		if($this->form_validation->run() == FALSE){

			$data['content'] = $this->load->view('admin/page/add_biker', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['biker_name'] = $this->input->post('biker_name');
			$data['bike_name'] = $this->input->post('bike_name');
			$data['bike_no'] = $this->input->post('bike_no');
			$data['distribution_date'] = $this->input->post('distribution_date');
			$data['kilometer'] = $this->input->post('kilometer');
			$data['security_money'] = $this->input->post('security_money');
			//$this->debug($data);

			$result = $this->bikedistribution_model->commonInsert('tbl_bikers',$data);

			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('BikeDistribution/index');
			}else{
				$msg = 'Failed to Added!!';
				$message = $this->msg($msg);
				redirect('BikeDistribution/index');
			}
			
		}//if
		
	}//save_biker

	public function edit_BikeDistribution($id=''){
		
		$data['title'] = "Run BD | Edit Biker Information";
		$data['selected_info'] = $this->bikedistribution_model->biker_edit_byID($id);
		$data['content'] = $this->load->view('admin/page/edit_biker', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function update_biker(){

		$BikerID = $this->input->post('biker_id');
		$biker_name = $this->input->post('biker_name');
		$bike_name = $this->input->post('bike_name');
		$bike_no = $this->input->post('bike_no');
		$distribution_date = $this->input->post('distribution_date');
		$kilometer = $this->input->post('kilometer');
		$security_money = $this->input->post('security_money');

		$this->db->set('biker_name', $biker_name);
		$this->db->set('bike_name', $bike_name);
		$this->db->set('bike_no', $bike_no);
		$this->db->set('distribution_date', $distribution_date);
		$this->db->set('kilometer', $kilometer);
		$this->db->set('security_money', $security_money);
		
		$result = $this->bikedistribution_model->update_biker_byID($BikerID);

		if($result){
			$msg = 'Update successfully';
			$message = $this->msg($msg);
			redirect('BikeDistribution/index');

		}else{
			$msg = $name.' Failed to update!!';
			$message = $this->msg($msg);
			redirect('BikeDistribution/index');
		}
			
	}//update_biker

    public function delete_BikeDistribution($Id=''){

		$result = $this->bikedistribution_model->delete_biker_byID($Id);
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('BikeDistribution/index');	
		}else{
			$message = 'Failed to Delete';
			$this->session->set_flashdata('message', $message);
			redirect('BikeDistribution/index');
		}
	}

//=========================== do return & riding ================================//

	public function do_return($ID = ''){

		$result = $this->bikedistribution_model->returnBike_byID($ID);
		if($result){
			$message = 'Bike Returned !!!';
			$this->session->set_flashdata('message', $message);
			redirect('BikeDistribution/index');	
		}else{
			$message = 'Failed to return bike !!!';
			$this->session->set_flashdata('message', $message);
			redirect('BikeDistribution/index');
		}
	}

	public function do_riding($ID = ''){

		$result = $this->bikedistribution_model->ridingBike_byID($ID);
		if($result){
			$message = 'Bike Riding !!!';
			$this->session->set_flashdata('message', $message);
			redirect('BikeDistribution/index');	
		}else{
			$message = 'Failed !!!';
			$this->session->set_flashdata('message', $message);
			redirect('BikeDistribution/index');
		}
	}

}//CI_Controller

?>