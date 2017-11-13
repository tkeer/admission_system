<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uni extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		if( $this->session->userdata('id') )
			return redirect('student/dashboad');
		$this->load->model('student','stn');
	}
	public function index()
	{
		$this->load->view('uni/index');
	}
	public function pro()
	{
			
		$this->load->view('uni/program');
	}
	public function contact()
	{
		
		$this->load->view('uni/contact');
	}
	public function gal()
	{
		
		$this->load->view('uni/gallery');
	}
	public function register(){
		$no    =  $this->input->post('phonenumber');
		$fname =  $this->input->post('firstname');
		$lname =  $this->input->post('lastname');
		$email =  $this->input->post('email');
		$uname =  $this->input->post('username');
		$pass  =  $this->input->post('password');
		$gander=  $this->input->post('Color');
		
		$data = array(
                                       'fname' => $fname,
                                       'lname' => $lname,
                                       'email' => $email,
									   'uname' => $uname,
                                       'pass'  => $pass,
                                       'no'    => $no,
                                       'gander' => $gander
                                       );
		$result =   $this->stn->register($data);
			if($result){
				$this->session->set_flashdata('item', 'Registration Seccussfully');
			}else{
				$this->session->set_flashdata('item', 'Registration Faild,Please Try Again');
			}
			return redirect('uni');
	}
	public function login(){
		$email = $this->input->post('email');
		$pass  = $this->input->post('exampleInputPassword2');
			
			$result = $this->stn->login($email,$pass);
				if($result){
					$this->session->set_userdata('id',$result);
					return redirect('student');
				}else{
						$this->session->set_flashdata('item', 'Login Faild,Please Try Again');
						return redirect('uni');
				}
	}
	
	
}
