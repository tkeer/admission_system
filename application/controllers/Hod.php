<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hod extends MY_Controller {

    /**
     * @var Admin_pro
     */
    public $pro;

    /**
     * @var Admin_login
     */
    public $login;

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

    public function edit_pass(){
        $this->load->view('hod/pass');
    }

    public function update_pass(){
        $id = $this->session->userdata('hod_id');
        $pass = $this->input->post_get('password');
        $data = array(
            'pass' => $pass
        );
        $result = $this->login->update_pass($data,$id);

        if($result){
            $this->session->set_flashdata('item', 'You have successfully updated password');
            return redirect('hod');
        }else{
            $this->session->set_flashdata('item', 'Query faild, please try Again !');
            return redirect('hod');
        }
    }

    public function logout(){
		$this->session->unset_userdata('hod_id');
			return redirect('login');
	}
	
}
