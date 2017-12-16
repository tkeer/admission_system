<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends MY_Controller {

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

        $requests = $this->pro->teacher_request($id);

        $requests = $requests ? $requests : [];

        $processed_requests = $this->pro->teacher_processed_request($id);

        $processed_requests = $processed_requests ? $processed_requests : [];

        $this->load->view('teacher/requests',['data'=>$requests, 'processed_requests' => $processed_requests]);
    }

    public function resp_req($i){
        $des = $this->input->post('des');
        $st_id = $this->input->post('st_id');
        $c_id = $this->input->post('c_id');
        $desrip = $this->input->post('des_data');
        $id = $this->input->post('id');


        $data = array(
            'status'     => $i,
            'ression'    => $des,
            'description' => $desrip,
            'teacher_processed' => 1,
            'admin_id' => $i == 1 ? -1 : 5
        );
        $result = $this->pro->req_status($data,$id);
        if($result){
            redirect('teacher/req');

        }else{

            redirect('teacher/req');
        }
    }

    public function edit_pass(){
        $this->load->view('teacher/pass');
    }

    public function update_pass(){
        $id = $this->session->userdata('teacher_id');
        $pass = $this->input->post_get('password');
        $data = array(
            'pass' => $pass
        );
        $result = $this->login->update_pass_teacher($data,$id);

        if($result){
            $this->session->set_flashdata('item', 'You have successfully updated password');
            return redirect('teacher');
        }else{
            $this->session->set_flashdata('item', 'Query faild, please try Again !');
            return redirect('teacher');
        }
    }

    public function logout(){
        $this->session->unset_userdata('teacher_id');
        return redirect('login');
    }
}
