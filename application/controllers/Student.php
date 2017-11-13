<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends MY_Controller {
	
	public function __construct(){
		parent:: __construct();
		if( ! $this->session->userdata('id'))
			return redirect('uni');
		$this->load->model('course');
		$this->load->model('admin_pro','pro');
		$this->load->model('admin_login', 'login');
	}
	public function index(){
		$id = $this->session->userdata('id');
		$response = $this->pro->check_response($id);
		  $resp = $response->status;
			if($resp==0){
				$this->load->view('students/dashboard');
			}
			if($resp==1){
				$this->session->set_flashdata('item', 'Your Request rejected by Teacher !');
					$this->load->view('students/dashboard');
			}if($resp==2){
				$this->session->set_flashdata('item', 'Your Request accepted by Teacher and forword to HOD!');
					$this->load->view('students/dashboard');
			}if($resp==3){
				$this->session->set_flashdata('item', 'Your Request rejected by HOD !');
					$this->load->view('students/dashboard');
			}if($resp==4){
				$this->session->set_flashdata('item', 'Your Request accepted by HOD and forword to Dean!');
					$this->load->view('students/dashboard');
			}if($resp==5){
				$this->session->set_flashdata('item', 'Your Request rejected by Dean !');
					$this->load->view('students/dashboard');
			}if($resp==6){
				$this->session->set_flashdata('item', 'Your Request accept successfully! enjoy this course');
					$this->load->view('students/dashboard');
			}
				echo 'not set';
	}
	public function dashboad(){
		$result = $this->course->dep_list();
		$status = $this->pro->check_status();
		$status =  $status->status;
		$this->load->view('students/home', ['result' => $result,'status'=>$status]);
	}
	
	public function add_course($course_id){
		
		$select_course_time = $this->course->check_date($course_id); 
		$strt_time = $select_course_time->start_time;
			// this code is for time check...  you can remove this if you want to check other conditions like five course
			// and already selected or not...etc
		 $selected_course_result = $this->course->course_list(); //already selected course in list of student...
		if($selected_course_result){
		$day  =  unserialize($select_course_time->day);
		
			foreach( $selected_course_result as $result_time ):
				$days = unserialize($result_time->days);
					if(sizeof($day) < sizeof($days)){
						$select_day = $day;
						$select_days = $days;
						
					}else{
						$select_day = $days;
						$select_days = $day;
					}
				for($i=0;$i < sizeof($select_day); $i++){
					
					for($j=0;$j<sizeof($select_days);$j++){
						
						if($select_day[$i] == $select_days[$j]){
							
							$created = $result_time->time.'<br>'; 
						   list($firstMinutes, $firstSeconds) = explode(':', $created);
						    $firstSeconds += ($firstMinutes * 60);
						   
						   list($secondMinutes, $secondSeconds) = explode(':', $strt_time);
						   $secondSeconds += ($secondMinutes * 60);
						   $diff = $secondSeconds - $firstSeconds;
						   if($diff == 0){
								$this->session->set_flashdata('item', 'Please Select another Course Time Clash Error');
								return redirect('student/dashboad');
						   }
							
						}
					}	
						  
				}
			endforeach; 
		}  // remove this for checking condition 
		$id = $this->session->userdata('id');
		$data = array(
			'course_id'    => 	$course_id,
			'st_id' 	   => 	$id,
			'time'         =>   $select_course_time->start_time,
			'days'         =>   $select_course_time->day
		);
		$result = $this->course->insert_course($data);
		if($result == 1){
			$this->session->set_flashdata('item', 'You have Already selected this course.');
			return redirect('student/dashboad');
		}else if($result ==2 ){
			$this->session->set_flashdata('insert_item', 'You have Successfully selected this course.');
			return redirect('student/dashboad');
		}
		else if($result ==3 ){
			$this->session->set_flashdata('seats', 'seats are Full if you want to choose this subject then you must contact with the admin');
			return redirect('student/dashboad');
		}else{
			$this->session->set_flashdata('subject_error', 'You have Already selected Five courses.');
			return redirect('student/dashboad');
		}
	}
	public function subjects(){
		$id = $this->session->userdata('id');
		$result = $this->course->selected_subjects($id);
		if($result){
			$this->load->view('students/subjects', ['sub'=>$result]);
		}else{
			$this->session->set_flashdata('subject', 'No Selected Subjects, Please select your subjects');
			$this->load->view('students/subjects', ['sub'=>$result]);
		}
	}
	public function drop($course_id){
		$st_id =  $this->session->userdata('id');
		$result = $this->course->drop_sub($course_id, $st_id);
		if($result){
			$this->session->set_flashdata('subject_drop', 'You have successfully drop this subject.');
			return redirect('student/subjects');
		}else{
			$this->session->set_flashdata('subject_drop', 'Query Fiald, Please try again.');
			return redirect('student/subjects');
		}
	}
	
	public function edit_pass(){
		$id = $this->session->userdata('id');
		$result = $this->login->st_pass($id);
		$this->load->view('students/pass',['result'=>$result]);
	}

	public function semesterSchedules(){
		$id = $this->session->userdata('id');
		$result = $this->login->st_pass($id);
		$this->load->view('students/semesterSchedules',['result'=>$result]);
	}
	
	public function update_pass(){
		$pass = $this->input->post_get('password');
		$id = $this->input->post_get('id');
		$data = array(
			'pass' => $pass
		);
		$result = $this->login->update_pass_st($data,$id);
			if($result){
				$this->session->set_flashdata('item', 'You have successfully updated password');
			return redirect('student');
			}else{
				$this->session->set_flashdata('item', 'Query faild, please try Again !');
				return redirect('student');
			}
	}
	
	public function req_course($id){
		$this->load->view('students/req',['id'=>$id]);
	}
	
	public function req_sub($id){
		echo $id;exit;
		$st_id = $this->session->userdata('id');
		$des =  $this->input->post('des');
		
		$req = array(
			'course_id'   =>   $id,
			'admin_id'    =>   3,
			'description' =>   $des,
			'st_id'       =>   $st_id
		);
		
		$result = $this->login->req_sub_teach($req);
		if($result){
				$this->session->set_flashdata('item', 'You have successfully Submit the Request');
					return redirect('student');
				}else{
						$this->session->set_flashdata('item', 'Not submited Try Again  !');
						return redirect('student');
				}
	}
	
	public function logout(){
			$this->session->unset_userdata('id');
			return redirect('uni');
		}
		
		public function test_time(){
			$day = array('M','TH','F');
			$days = array('W','T','F');
				if(sizeof($day) < sizeof($days)){
						$select_day = $day;
						$select_days = $days;
						
					}else{
						$select_day = $days;
						$select_days = $day;
					}
				for($i=0;$i < sizeof($select_day); $i++){
					
					for($j=0;$j<sizeof($select_days);$j++){
						
						if($select_day[$i] == $select_days[$j]){
							
							echo 'match';exit;
						}
					}
							echo 'not match<br>';
				}
			
		}
		 public function get_province(){  
		$country_id = $this->input->post('country_id');
                
                
                $this->load->model('course','dep_model');
				
				$provinces = $this->dep_model->list_files($country_id);
                $result ='';    
                $result .='<table class="table">'
                            . '<tr>'
							.'<th></th>'
							.'<th></th>'
                            . '<th>Term</th>'
                            . '<th>Department</th>'
                            . '<th>Course</th>'
							. '<th>Cr</th>'
							. '<th>Room</th>'
							. '<th>Start Date</th>'
							. '<th>Day</th>'
							. '<th>Time</th>'
							. '<th>Instructor</th>'
							. '<th>Total Seats</th>'
							. '<th>Availabe</th>'
                            . '</tr>';
                            foreach ($provinces as $province) {
								$days = unserialize($province->day);
								$day = implode(",", $days);
								$result .='<tr>'
							.'<td>'.anchor("student/add_course/{$province->course_id}",'Add',['class'=>'btn btn-primary ']).'</td>'
							.'<td>'.anchor("student/req_course/{$province->course_id}",'REQ',['class'=>'btn btn-primary ']).'</td>'
                            . '<td>'.$province->name.'</td>'
                            . '<td>'.$province->dp_name.'</td>'
							. '<td>'.$province->course_name.'</td>'
							. '<td>'.$province->cr.'</td>'
							. '<td>'.$province->room_no.'</td>'
							. '<td>'.$province->start_date.'</td>'
							. '<td>'.$day.'</td>'
							. '<td>'.$province->start_time.'</td>'
							. '<td>'.$province->teach_name.'</td>'
							. '<td>35</td>'
							. '<td>'.$province->avail.'</td>'
                            .'</tr>';
                                }
                            $result .='</table>';
                            echo json_encode($result);
		}
		
}