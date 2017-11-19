<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dean extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('dean_id'))
			return redirect('login');
		$this->load->model('admin_pro','pro');
		$this->load->model('admin_login', 'login');
	}
	
	public function index(){
		$this->load->view('director/director');
	}


    public function req(){
        $id = $this->session->userdata('dean_id');

        $requests = $this->pro->request($id);
        $requests = $requests ? $requests : [];
        $this->load->view('director/requests',['data'=>$requests]);
    }

    public function resp_req($i){
        $des = $this->input->post('des');
        $st_id = $this->input->post('st_id');
        $c_id = $this->input->post('c_id');
        $desrip = $this->input->post('des_data');


        $data = array(
            'status'     => $i,
            'ression'    => $des,
            'description' => $desrip,
            'admin_id' => 1
        );

        $result = $this->pro->req_status($data,$st_id,$c_id);

        if($result){
            redirect('dean/req');

        }else{

            redirect('dean/req');
        }
    }


	
	public function logout(){
		$this->session->unset_userdata('dean_id');
			return redirect('login');
	}
}