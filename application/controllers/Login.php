<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
		$this->load->model("login_model");
    }
    
	public function index($msg= ''){
        $data = array();
        $data['msg']=$msg;
		$this->load->view('admin/page/login',$data);
    }
    
    public function process(){

        $login_type = $this->input->post('login_type');
        
        if($login_type == 1){

            $user_email = $this->input->post('user_email');
            $passwords = $this->input->post('password');
            $password = md5($passwords);

            $result = $this->login_model->validate($user_email,$password);

            if(! $result){

                $msg = '<font color=red>Invalid Username/Password.</font><br />';
                $this->index($msg);

            }else{

                $data = array(
                    'login_type' => $login_type,
                    'user_id' => $result->user_id,
                    'user_name' => $result->user_name
                    );
                $this->session->set_userdata($data);
                redirect('Admin');
            }

        }elseif($login_type == 2){

            $user_name = $this->input->post('user_name');
            $passwords = $this->input->post('password');
            $password = md5($passwords);

            $result = $this->login_model->check_member_login($user_name,$password);

            if(! $result){

                $msg = '<font color=red>Invalid Username/Password.</font><br />';
                $this->index($msg);

            }else{

                $data = array(
                    'login_type' => $login_type,
                    'user_id' => $result->user_id,
                    'user_name' => $result->user_name
                    );
                $this->session->set_userdata($data);
                redirect('Admin/member_dashboard');
            }

        }//if

    }//process
	
	//checking login
	function is_logged_in(){
		$this->session->userdata('is_logged_in');
		if(is_logged_in == true){
			redirect('dashboard');
		}
    }

    public function do_logout(){

        $this->session->sess_destroy();
        $msg = 'You have Logged Out!';
        $this->session->set_userdata($msg);
        redirect("login");
    }
	
}//Login

?>