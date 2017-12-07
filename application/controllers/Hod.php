<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hod extends MY_Controller {

    /**
     * @var Admin_pro
     */
    public $pro;

	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('hod_id'))
			return redirect('login');
		$this->load->model('admin_pro','pro');
		$this->load->model('admin_login', 'login');
	}
	
	public function index(){
		$this->load->view('hod/hod');
	}


    public function req(){
        $id = $this->session->userdata('hod_id');

        $requests = $this->pro->request($id);
        $requests = $requests ? $requests : [];
        $this->load->view('hod/requests',['data'=>$requests]);
    }

    public function resp_req($i){
        $des = $this->input->post('des');
        $desrip = $this->input->post('des_data');
        $id = $this->input->post('id');

        $data = array(
            'status'     => $i,
            'ression'    => $des,
            'description' => $desrip,
            'admin_id' => $i == 4 ? 7 : -2
        );
        $result = $this->pro->req_status($data,$id);
        if($result){
            redirect('hod/req');

        }else{

            redirect('hod/req');
        }
    }


    public function logout(){
		$this->session->unset_userdata('hod_id');
			return redirect('login');
	}
	
}
