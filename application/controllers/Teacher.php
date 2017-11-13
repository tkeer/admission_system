<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('teacher_id'))
			return redirect('login');
		$this->load->model('admin_pro','pro');
		$this->load->model('admin_login', 'login');
	}
	public function index(){
		$this->load->view('teacher/teacher_view');
	}
	
	public function req(){
		$id = $this->session->userdata('teacher_id');
		$requests = $this->pro->request($id);
		if($requests){
			$this->load->view('teacher/requests',['data'=>$requests]);
		}
	}
	
	public function resp_req($i){
	    $des = $this->input->post('des');
		$st_id = $this->input->post('st_id');
	    $c_id = $this->input->post('c_id');
		$desrip = $this->input->post('des_data');
		
		
		$data = array(
			'status'     =>$i,
			'ression'    =>$des,
			'description'=>$desrip
		);
		$result = $this->pro->req_status($data,$st_id,$c_id);
		if($result){
			
			return redirect('teacher');
		}else{
				
			return redirect('teacher');
		}
	}
	public function logout(){
		$this->session->unset_userdata('teacher_id');
			return redirect('login');
	}
}
