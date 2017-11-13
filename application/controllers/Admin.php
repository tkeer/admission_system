<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		if( ! $this->session->userdata('admin_id'))
			return redirect('login');
		$this->load->model('admin_pro','pro');
		$this->load->model('admin_login', 'login');
	}
	public function index(){
		$this->load->view('admin/home');
	}
	public function pass(){
		$id = $this->session->userdata('admin_id');
		$result = $this->login->pass($id);
			if($result){
				$this->load->view('admin/password', ['result'=>$result]);
			}else{
				$this->session->set_flashdata('add_session', 'Query faild please try again !');
			return redirect('admin');
			}
	}
	public function update_pass(){
		$pass = $this->input->post_get('password');
		$id = $this->input->post_get('id');
		$data = array(
			'pass' => $pass
		);
		$result = $this->login->update_pass($data,$id);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully updated password');
			return redirect('admin');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin');
			}
	}
	public function Add_session(){
		$this->load->view('admin/add');
	}
	public function session(){
		$session = $this->input->post_get('sec_name');
		$result = $this->pro->add_sec($session);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully Added the New Session.');
			return redirect('admin/List_session');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_session');
			}
	}
	public function List_session(){
		$result = $this->pro->list_sess();
			if($result){
				$this->load->view('admin/list_sec', ['result'=>$result]);
			}else{
				echo "not";
			}
	}
	public function Edit_sec($id){
		$result = $this->pro->edit_sec($id);
		if($result){
			$this->load->view('admin/edit_sec', ['result'=>$result]);
		}else{
			return redirect('admin/List_session');
		}
	}
	public function update_sec(){
		$session = $this->input->post_get('sec_name');
		$id = $this->input->post_get('id');
		$result = $this->pro->update_sec($session, $id);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully Updated Session.');
			return redirect('admin/List_session');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_session');
			}
		
	}
	public function Delete_sec($id){
		$result = $this->pro->delete_sec($id);
		if($result){
			$this->session->set_flashdata('add_session', 'You have successfully Deleted the Session.');
			return redirect('admin/List_session');
		}else{
			$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
			return redirect('admin/List_session');
		}
	}
	// department query handling  start
	public function add_view(){
		$this->load->view('admin/add_dep');
	}
	public function List_dep(){
		$result = $this->pro->list_dep();
			if($result){
				$this->load->view('admin/list_dep', ['result'=>$result]);
			}else{
				echo "not";
			}
	}
	public function dep(){
		$id = $this->input->post_get('phonenumber');
		$dep_name = $this->input->post_get('firstname');
		$data = array(
			'dep_id'      =>  $id ,
			'dp_name'	  =>  $dep_name 
		);
		$result = $this->pro->add_dep($data);
			if($result){
				$this->session->set_flashdata('add_dep', 'You have successfully Added the New Department.');
			return redirect('admin/List_dep');
			}else{
				$this->session->set_flashdata('faild_dep', 'Query faild, please try Again !');
				return redirect('admin');
			}
	}
	
	public function Edit_dep($id){
		$result = $this->pro->edit_dep($id);
		if($result){
			$this->load->view('admin/edit_dep', ['result'=>$result]);
		}else{
			return redirect('admin/List_dep');
		}
	}
	public function update_dep(){
		$name = $this->input->post_get('firstname');
		$dp_id = $this->input->post_get('dp_id');
		$id = $this->input->post_get('phonenumber');
		$data = array(
			'dep_id'		=>   $id,
			'dp_name'		=>	$name	
		);
		$result = $this->pro->update_dep($data, $dp_id);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully Updated Department.');
			return redirect('admin/List_dep');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_dep');
			}
	}
	public function Delete_dep($id){
		$result = $this->pro->delete_dep($id);
		if($result){
			$this->session->set_flashdata('add_session', 'You have successfully Deleted the Department.');
			return redirect('admin/List_dep');
		}else{
			$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
			return redirect('admin/List_dep');
		}
	}
	// end department query handling...
	
	//teacher handling code...
	public function teach(){
		$this->load->view('admin/add_teach');
	}
	public function List_teach(){
		$result = $this->pro->list_teach();
			if($result){
				$this->load->view('admin/list_teach', ['result'=>$result]);
			}else{
				echo "not";
			}
		
	}
	public function add_teach(){
		$pass = $this->input->post_get('exampleInputPassword2');
		$name = $this->input->post_get('firstname');
		$data = array(
			'teach_name'      =>  $name ,
			'pass'	  =>  $pass 
		);
		$result = $this->pro->add_teach($data);
			if($result){
				$this->session->set_flashdata('add_dep', 'You have successfully Added the New Department.');
			return redirect('admin/List_teach');
			}else{
				$this->session->set_flashdata('faild_dep', 'Query faild, please try Again !');
				return redirect('admin/List_teach');
			}
		
	}
	public function Edit_teach($id){
		$result = $this->pro->edit_teach($id);
		if($result){
			$this->load->view('admin/edit_teach', ['result'=>$result]);
		}else{
			return redirect('admin/List_teach');
		}
	}
	public function update_teach(){
		$name = $this->input->post_get('firstname');
		$id = $this->input->post_get('dp_id');
		$pass = $this->input->post_get('exampleInputPassword2');
		$data = array(
			'teach_name'		=>   $name,
			'pass'		=>	$pass	
		);
		$result = $this->pro->update_teach($data, $id);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully Updated Record.');
			return redirect('admin/List_teach');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_teach');
			}
	}
	public function Delete_teach($id){
		$result = $this->pro->delete_teach($id);
		if($result){
			$this->session->set_flashdata('add_session', 'You have successfully Deleted the Record.');
			return redirect('admin/List_teach');
		}else{
			$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
			return redirect('admin/List_teach');
		}
	}
	public function room(){
		$this->load->view('admin/add_room');
	}
	public function List_room(){
		$result = $this->pro->list_room();
			if($result){
				$this->load->view('admin/list_room', ['result'=>$result]);
			}else{
				echo "not";
			}
	}
	public function add_room(){
		$id = $this->input->post_get('phonenumber');
		$data = array(
			'room_no'      =>  $id
		);
		$result = $this->pro->add_room($data);
			if($result){
				$this->session->set_flashdata('add_dep', 'You have successfully Added the New Department.');
			return redirect('admin/List_room');
			}else{
				$this->session->set_flashdata('faild_dep', 'Query faild, please try Again !');
			return redirect('admin/List_room');}
	}
	public function Edit_room($id){
		$result = $this->pro->edit_room($id);
		if($result){
			$this->load->view('admin/edit_room', ['result'=>$result]);
		}else{
			return redirect('admin/List_room');
		}
	}
	public function update_room(){
		$id_room = $this->input->post_get('phonenumber');
		$id = $this->input->post_get('id');
		$data = array(
			'room_no'		=>   $id_room
		);
		$result = $this->pro->update_room($data, $id);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully Updated Record.');
			return redirect('admin/List_room');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_room');
			}
	}
	public function delete_room($id){
		$result = $this->pro->delete_room($id);
		if($result){
			$this->session->set_flashdata('add_session', 'You have successfully Deleted the Record.');
			return redirect('admin/List_room');
		}else{
			$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
			return redirect('admin/List_room');
		}
	}
	public function sub(){
		$sec = $this->pro->list_sess();
		$dep = $this->pro->list_dep();
		$teach = $this->pro->list_teach();
		$room = $this->pro->list_room();
		$this->load->view('admin/add_subject', ['department'=>$dep, 'sec'=>$sec, 'teach'=>$teach, 'room'=>$room]);
	}
	public function add_sub(){
		$course_id = $this->input->post_get('phonenumber');
		$course_name = $this->input->post_get('course');
		
		$dp_id = $this->input->post_get('dp_id');
		$t_id = $this->input->post_get('term_id');
		$cr = $this->input->post_get('cr');
		$r_id = $this->input->post_get('r_id');
		$date = $this->input->post_get('date');
		$s_t = $this->input->post_get('start');
		$e_t = $this->input->post_get('end');
		$cons_id = $this->input->post_get('ins_id');
		$comment = $this->input->post_get('comment');
		$days = serialize($this->input->post('hobbies[]'));
	// days received 	
		
	
		$data = array(
			'courses_id'    =>  $course_id,
			'course_name'   =>  $course_name,
			'dep_id'        =>  $dp_id,
			'fall_add_id'   =>  $t_id,
			'cr'            =>  $cr,
			'id'            =>  $r_id,
			'start_date'    =>  $date,
			'start_time'    =>  $s_t,
			'end_time'      =>  $e_t,
			'instr_id'      =>  $cons_id,
			'des' 			=> $comment,
			'day'           => $days,
			'avail'         =>35
		);
		$result = $this->pro->add_sub($data);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully Deleted the Record.');
			return redirect('admin/List_sub');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_sub');
				}
	}
	public function List_sub(){
		$result = $this->pro->list_sub();
			if($result){
				$this->load->view('admin/list_subject', ['result'=>$result]);
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_sub');
			}
	}
	public function Edit_sub($id){
		$sec = $this->pro->list_sess();
		$dep = $this->pro->list_dep();
		$teach = $this->pro->list_teach();
		$room = $this->pro->list_room();
		$result = $this->pro->edit_sub($id);
	    $days = $result->day;
		if($result){
			$this->load->view('admin/edit_sub', ['department'=>$dep,
				'day'=>$days, 'sec'=>$sec, 'teach'=>$teach, 'room'=>$room, 'result'=>$result]);
		}else{
			return redirect('admin/List_room');
		}
	}
	public function update_sub(){
		
		$id = $this->input->post_get('id');
		$course_id = $this->input->post_get('phonenumber');
		$course_name = $this->input->post_get('course');
		
		$dp_id = $this->input->post_get('dp_id');
		$t_id = $this->input->post_get('term_id');
		 $cr = $this->input->post_get('cr');
		$r_id = $this->input->post_get('r_id');
		$date = $this->input->post_get('date');
		$s_t = $this->input->post_get('start');
		$e_t = $this->input->post_get('end');
		$cons_id = $this->input->post_get('ins_id');
		$comment = $this->input->post_get('comment');
		$days = serialize($this->input->post('hobbies[]'));
	// days received 	
		$data = array(
			'courses_id'       =>  $course_id,
			'course_name'      =>  $course_name,
			
			'dep_id'     	   =>  $dp_id,
			'fall_add_id'      =>  $t_id,
			'cr'               =>  $cr,
			'id'               =>  $r_id,
			'start_date'       =>  $date,
			'start_time'       =>  $s_t,
			'end_time'         =>  $e_t,
			'instr_id'         =>  $cons_id,
			'des' 			   => $comment,
			'day'           => $days
		);
		$result = $this->pro->update_sub($data,$id);
			if($result){
				$this->session->set_flashdata('add_session', 'You have successfully Deleted the Record.');
			return redirect('admin/List_sub');
			}else{
				$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
				return redirect('admin/List_sub');
				}
	}
	public function Delete_sub($id){
		$result = $this->pro->delete_sub($id);
		if($result){
			$this->session->set_flashdata('add_session', 'You have successfully Deleted the Record.');
			return redirect('admin/List_sub');
		}else{
			$this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
			return redirect('admin/List_sub');
		}
	}
	
	public function ad_open($i){
		$status = $this->pro->update_status($i);
		if($status){
			$this->session->set_flashdata('add_session', 'Admition Successfully SET');
			return redirect('admin');
		}
	}
	
	public function ad_close($i){
		$status = $this->pro->update_status($i);
		if($status){
			$this->session->set_flashdata('add_session', 'Admition Successfully CLOSE');
			return redirect('admin');
		}
	}
	
	public function logout(){
			$this->session->unset_userdata('admin_id');
			return redirect('login');
		}
}