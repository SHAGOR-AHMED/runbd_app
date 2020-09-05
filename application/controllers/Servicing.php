<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicing extends Base_Controller {

	public function __construct(){
		parent:: __construct();	

		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		$this->load->model("servicing_model");
		$this->load->helper('User_helper');	
	}
	
	public function index(){

		$data = array();
		$data['message'] = array();
		$data['title'] = "Run BD | Check Servicing Date here";
		$biker_name = $this->input->post('biker_name');
		$data['servicing'] = $this->servicing_model->get_servicing_info($biker_name);
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/check_servicing', $data, true);
		$this->load->view('admin/index',$data);
	}

	// public function searchServicingInfo(){
	// 	$biker_name = $this->input->post('biker_name');
	// 	$data['servicing'] = $this->servicing_model->get_servicing_info($biker_name);
	// }

	public function DoneServicing($ServicingID=''){

		$result = $this->servicing_model->servicing_done($ServicingID);
		if($result){
			$msg = 'Servicing status has been updated';
			$message = $this->msg($msg);
			redirect('Servicing/index');
		}else{
			$msg = 'Failed to updated!!';
			$message = $this->msg($msg);
			redirect('Servicing/index');
		}
	}
	
	public function viewServicingStatus(){

		$data['message'] = array();
		$data['title'] = "Run BD | Check Servicing Date here";
		//$data['servicing'] = $this->servicing_model->get_servicing_info();
		$data['servicing_done'] = $this->servicing_model->get_DoneServicing_info();
		$data['servicing_Notdone'] = $this->servicing_model->get_NotDoneServicing_info();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_servicing_info', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_servicing(){

		$data['title'] = "Run BD | Add New Servicing Date";
		$data['content'] = $this->load->view('admin/page/add_servicing', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_servicing(){

		$this->form_validation->set_rules('biker_name', 'Biker Name', 'required');
		$this->form_validation->set_rules('bike_no', 'Bike No', 'required');
		$this->form_validation->set_rules('next_servicing_date', 'Next Servicing Date', 'required'); 
		$this->form_validation->set_rules('next_km', 'Next KM For Servicing', 'required'); 

		if($this->form_validation->run() == FALSE){

			$data['content'] = $this->load->view('admin/page/add_servicing', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['biker_name'] = $this->input->post('biker_name');
			$data['bike_no'] = $this->input->post('bike_no');
			$data['next_servicing_date'] = $this->input->post('next_servicing_date');
			$data['next_km'] = $this->input->post('next_km');
			//$this->debug($data);

			$result = $this->servicing_model->commonInsert('tbl_servicing',$data);

			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('Servicing/index');
			}else{
				$msg = 'Failed to Added!!';
				$message = $this->msg($msg);
				redirect('Servicing/index');
			}
			
		}//if
		
	}//save_servicing

	// public function edit_bike($id=''){
		
	// 	$data['title'] = "Run BD | Edit Bike";
	// 	$data['selected_info'] = $this->servicing_model->bike_edit($id);
	// 	$data['content'] = $this->load->view('admin/page/edit_bike', $data, true);
	// 	$this->load->view('admin/index',$data);
			
	// }

	// public function update_bike(){

	// 	$BikeID = $this->input->post('bike_id');
	// 	$bike_category = $this->input->post('bike_category');
	// 	$bike_name = $this->input->post('bike_name');
	// 	$bike_no = $this->input->post('bike_no');
	// 	$stored_date = $this->input->post('stored_date');

	// 	$this->db->set('bike_category', $bike_category);
	// 	$this->db->set('bike_name', $bike_name);
	// 	$this->db->set('bike_no', $bike_no);
	// 	$this->db->set('stored_date', $stored_date);

	// 	if(isset($BikeID) && $BikeID != ''){

	// 		$data = array('bike_id' => $BikeID);
	// 		$prev_info = $this->db->get_where("tbl_bikes",$data)->row();
	// 		if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] != '')){
	// 			unlink($prev_info->img);
	// 		}
	// 	}

	// 	if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] != '')){

	// 		$img = $this->updatePhoto();
	// 	}
		
	// 	$result = $this->servicing_model->update_bike_byID($BikeID);

	// 	if($result){
	// 		$msg = 'Update successfully';
	// 		$message = $this->msg($msg);
	// 		redirect('Bike/index');

	// 	}else{
	// 		$msg = $name.' Failed to update!!';
	// 		$message = $this->msg($msg);
	// 		redirect('Bike/index');
	// 	}
			
	// }//update_bike

 //    public function delete_bike($Id=''){

	// 	$result = $this->servicing_model->delete_bike_byID($Id);
	// 	if($result){
	// 		$message = 'Deleted successfully';
	// 		$this->session->set_flashdata('message', $message);
	// 		redirect('Bike/index');	
	// 	}else{
	// 		$message = 'Failed to Delete';
	// 		$this->session->set_flashdata('message', $message);
	// 		redirect('Bike/index');
	// 	}
	// }


}//CI_Controller

?>