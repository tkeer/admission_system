<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dean extends MY_Controller {

    /**
     * @var Admin_pro
     */
    public $pro;

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
        $desrip = $this->input->post('des_data');
        $id = $this->input->post('id');


        $data = array(
            'status'     => $i,
            'ression'    => $des,
            'description' => $desrip,
            'admin_id' => $i == 6 ? 1 : -3
        );

        $result = $this->pro->req_status($data,$id);

        if($result){
            redirect('dean/req');

        }else{

            redirect('dean/req');
        }
    }

    public function edit_pass(){
        $this->load->view('director/pass');
    }

    public function update_pass(){
        $id = $this->session->userdata('dean_id');
        $pass = $this->input->post_get('password');
        $data = array(
            'pass' => $pass
        );
        $result = $this->login->update_pass($data, $id);

        if($result){
            $this->session->set_flashdata('item', 'You have successfully updated password');
            return redirect('dean');
        }else{
            $this->session->set_flashdata('item', 'Query faild, please try Again !');
            return redirect('dean');
        }
    }

	
	public function logout(){
		$this->session->unset_userdata('dean_id');
			return redirect('login');
	}
}