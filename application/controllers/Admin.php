<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent:: __construct();	
		if ($this->session->userdata('user_id') == null || $this->session->userdata('user_id') < 1) {
            if ($this->router->class != 'login'){                        
                redirect(base_url());
            }
        }
		$this->load->model("bike_model");
		$this->load->model("bikedistribution_model");
		$this->load->model("member_model");
	}

	public function index(){
		$data = array();
		$data['title'] = "Run Bangladesh";
		$data['bikes'] = $this->bike_model->get_bikes();
		$data['all_biker'] = $this->bikedistribution_model->get_biker();
		$data['all_members'] = $this->member_model->get_members();
		$data['content'] = $this->load->view('admin/page/body', $data, true);
		$this->load->view('admin/index',$data);
	}

}//Admin

?>