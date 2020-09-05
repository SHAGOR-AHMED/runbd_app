<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bike extends Base_Controller {

	public function __construct(){
		parent:: __construct();	
		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		
		$this->load->model("bike_model");
		$this->load->helper('User_helper');	
		$this->load->library('pdfgenerator');
	}

	public function index(){
		$data = array();
		$data['message'] = array();
		$data['title'] = "Run BD | All Bikes List";
		$data['bikes'] = $this->bike_model->get_bikes();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_bike', $data, true);
		$this->load->view('admin/index',$data);
	}
	
	public function add_bike(){

		$data['title'] = "Run BD | Add New Bike";
		$data['content'] = $this->load->view('admin/page/add_bike', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_bike(){

		$this->form_validation->set_rules('bike_no', 'Bike Number', 'required');
		$this->form_validation->set_rules('stored_date', 'Stored Date', 'required'); 

		if($this->form_validation->run() == FALSE){

			$data['title'] = "Run BD | Error Found";
			$data['content'] = $this->load->view('admin/page/add_bike', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['bike_category'] = $this->input->post('bike_category');
			$data['bike_no'] = $this->input->post('bike_no');
			$data['chasis_no'] = $this->input->post('chasis_no');
			$data['engine_no'] = $this->input->post('engine_no');
			$data['stored_date'] = $this->input->post('stored_date');
			$data['img'] = $this->uploadPhoto();

			//$this->debug($data);

			$result = $this->bike_model->commonInsert('tbl_bikes',$data);
			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('Bike/index');
			}else{
				$msg = 'Failed to Add Visitor!!';
				$message = $this->msg($msg);
				redirect('Bike/index');
			}
			
		}//if
		
	}//save_bike

	public function edit_bike($id=''){

		$data = array();
		$data['title'] = "Run BD | Edit Bike";
		$data['selected_info'] = $this->bike_model->bike_edit($id);
		$data['content'] = $this->load->view('admin/page/edit_bike', $data, true);
		$this->load->view('admin/index',$data);	
	}

	public function update_bike(){

		$BikeID = $this->input->post('bike_id');
		$bike_category = $this->input->post('bike_category');
		$bike_no = $this->input->post('bike_no');
		$chasis_no = $this->input->post('chasis_no');
		$engine_no = $this->input->post('engine_no');
		$stored_date = $this->input->post('stored_date');

		$this->db->set('bike_category', $bike_category);
		$this->db->set('bike_no', $bike_no);
		$this->db->set('chasis_no', $chasis_no);
		$this->db->set('engine_no', $engine_no);
		$this->db->set('stored_date', $stored_date);

		if(isset($BikeID) && $BikeID != ''){

			$data = array('bike_id' => $BikeID);
			$prev_info = $this->db->get_where("tbl_bikes",$data)->row();
			if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] != '')){
				unlink($prev_info->img);
			}
		}

		if(isset($_FILES['img']['name']) && ($_FILES['img']['name'] != '')){

			$img = $this->updatePhoto();
		}
		
		$result = $this->bike_model->update_bike_byID($BikeID);

		if($result){
			$msg = 'Update successfully';
			$message = $this->msg($msg);
			redirect('Bike/index');

		}else{
			$msg = $name.' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Bike/index');
		}
			
	}//update_bike

    public function delete_bike($Id=''){

		$result = $this->bike_model->delete_bike_byID($Id);
		if($result){
			$message = 'Deleted successfully';
			$this->session->set_flashdata('message', $message);
			redirect('Bike/index');	
		}else{
			$message = 'Failed to Delete';
			$this->session->set_flashdata('message', $message);
			redirect('Bike/index');
		}
	}

//===================== return bike ==========================//

	public function ReturnBike(){
		
		$data = array();
		$data['title'] = "Run BD | Return Bike";
		$data['return_bike'] = $this->bike_model->returnBike();
		$data['message'] = $this->session->flashdata('message');
		$data['content'] = $this->load->view('admin/page/view_return_bike', $data, true);
		$this->load->view('admin/index',$data);
	}

	public function add_returnBike(){

		$data['title'] = "Run BD | Add Return Bike Record";
		$data['content'] = $this->load->view('admin/page/add_return_bike', '', true);
		$this->load->view('admin/index',$data);
	}

	public function save_returnBike(){

		$this->form_validation->set_rules('biker_name', 'Biker Name', 'required');
		$this->form_validation->set_rules('bike_no', 'Bike No', 'required');
		$this->form_validation->set_rules('last_kilometer', 'Last Kilometer', 'required'); 
		$this->form_validation->set_rules('distribution_date', 'Distribution Date', 'required'); 
		$this->form_validation->set_rules('return_date', 'Return Date', 'required'); 
		$this->form_validation->set_rules('purpose', 'Purpose of Return', 'required'); 

		if($this->form_validation->run() == FALSE){
			$data = array();
			$data['title'] = "Run BD | Error Found";
			$data['content'] = $this->load->view('admin/page/add_return_bike', '', true);
			$this->load->view('admin/index',$data);
			return false;

		}else{

			$data['biker_name'] = $this->input->post('biker_name');
			$data['bike_no'] = $this->input->post('bike_no');
			$data['last_kilometer'] = $this->input->post('last_kilometer');
			$data['distribution_date'] = $this->input->post('distribution_date');
			$data['return_date'] = $this->input->post('return_date');

			$date1 = date_create($data['distribution_date']);
			$date2 = date_create($data['return_date']);
			$diff  = date_diff($date1,$date2);
			$days  = $diff->format("%a")+1;

			$data['total_days'] = $days;
			$data['purpose'] = $this->input->post('purpose');
			//$this->debug($data);

			$result = $this->bike_model->commonInsert('tbl_return_bikes',$data);

			if($result){
				$msg = 'New record has been created successfully';
				$message = $this->msg($msg);
				redirect('Bike/ReturnBike');
			}else{
				$msg = 'Failed to Added !!!';
				$message = $this->msg($msg);
				redirect('Bike/ReturnBike');
			}
			
		}//if
		
	}//save_returnBike

	public function edit_returnBike($id=''){

		$data = array();
		$data['title'] = "Run BD | Edit Return Bike";
		$data['selected_info'] = $this->bike_model->edit_returnBike_byID($id);
		$data['content'] = $this->load->view('admin/page/edit_return_bike', $data, true);
		$this->load->view('admin/index',$data);	
	}

	public function update_returnBike(){

		$ReturnID = $this->input->post('return_id');
		$biker_name = $this->input->post('biker_name');
		$bike_no = $this->input->post('bike_no');
		$last_kilometer = $this->input->post('last_kilometer');
		$distribution_date = $this->input->post('distribution_date');
		$return_date = $this->input->post('return_date');
		$purpose = $this->input->post('purpose');

		$date1 = date_create($distribution_date);
		$date2 = date_create($return_date);
		$diff  = date_diff($date1,$date2);
		$days  = $diff->format("%a")+1;

		$total_days = $days;

		$this->db->set('biker_name', $biker_name);
		$this->db->set('bike_no', $bike_no);
		$this->db->set('last_kilometer', $last_kilometer);
		$this->db->set('distribution_date', $distribution_date);
		$this->db->set('return_date', $return_date);
		$this->db->set('total_days', $total_days);
		$this->db->set('purpose', $purpose);
		
		$result = $this->bike_model->update_returnBike_byID($ReturnID);

		if($result){
			$msg = 'Updated successfully';
			$message = $this->msg($msg);
			redirect('Bike/ReturnBike');

		}else{
			$msg = $name.' Failed to update!!';
			$message = $this->msg($msg);
			redirect('Bike/ReturnBike');
		}
			
	}//update_returnBike

//====================== bike details ======================//

	public function viewBike_history($bikeID = ''){

		$data = array();
		$data['title'] = "Run BD | Bike Details";
		//$data['selected_info'] = $this->bike_model->getBike_details($bikeID);
		$data['bike_info'] = $this->bike_model->get_BikeInfo_byID($bikeID);
		$data['biker_info'] = $this->bike_model->get_BikerInfo_byID($bikeID);
		$data['returnBike_info'] = $this->bike_model->get_returnBikeInfo_byID($bikeID);
		//$this->debug($data);
		$data['content'] = $this->load->view('admin/page/view_bike_history', $data, true);
		$this->load->view('admin/index',$data);	
	}

//====================== Bike_reportPDF ======================//

	public function Bike_reportPDF($bikeID = ''){

		$data = array();
		$data['title'] = "Run BD | Bike Report";
		$data['bike_info'] = $this->bike_model->get_BikeInfo_byID($bikeID);
		$data['biker_info'] = $this->bike_model->get_BikerInfo_byID($bikeID);
		$data['returnBike_info'] = $this->bike_model->get_returnBikeInfo_byID($bikeID);
		$view_file = $this->load->view('admin/page/pdf_bike_report', $data, true);
		$filename = 'Bike-Report-of-'.$data['bike_info']->bike_no;
		$this->pdfgenerator->generate($view_file, $filename, true, 'A4', 'portrait'); 
	}


}//CI_Controller

?>