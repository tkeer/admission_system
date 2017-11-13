<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hod extends MY_Controller {
	
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
	
	public function logout(){
		$this->session->unset_userdata('hod_id');
			return redirect('login');
	}
	
}
