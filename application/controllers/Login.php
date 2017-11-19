<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    /**
     * @var Admin_login
     */
    public $login;

    public function __construct(){
        parent::__construct();
//		if(  $this->session->userdata('admin_id')){
//		return redirect('admin');
//		}if($this->session->userdata('teacher_id')){
//		return redirect('Teacher');
//		}
        $this->load->model('admin_login','login');
    }
    public function index(){
        $this->load->view('admin/login');
    }

    public function user_login(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('inputEmail', 'Username', 'required');
        $this->form_validation->set_rules('inputPassword', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if(! $this->form_validation->run() )
        {
            $this->session->set_flashdata('login_field', 'Login faild Please try again');
            return redirect('login');
        }

        $email = $this->input->post('inputEmail');
        $pass = $this->input->post('inputPassword');
        $result = $this->login->login( $email, $pass );
        if($result){
            if($result->name == "admin"){
                $this->session->set_userdata('admin_id',$result->admin_id);
                return redirect('admin');
            }else if( $result->name == "hod" ){
                $this->session->set_userdata('hod_id',$result->admin_id);
                return redirect('Hod');
            }else if($result->name == "director"){
                $this->session->set_userdata('dean_id',$result->admin_id);
                return redirect('Dean');
            }
        }

        $teacher = $this->login->teacher_login($email, $pass);

        if($teacher)
        {
            $this->session->set_userdata('teacher_id', $teacher->instr_id);
            return redirect('teacher');
        }

        $this->session->set_flashdata('login_field', 'Login faild Please try again');
        return redirect('login');

    }
}
