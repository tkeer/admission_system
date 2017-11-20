<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends MY_Controller {

    /**
     * @var Course
     *
     */
    public $course;

    /**
     * @var Admin_pro
     */
    public $pro;

    public function __construct()
    {
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

        if(! $response)
        {
            $this->load->view('students/dashboard');
            return;
        }

        $resp = $response->status;

        if($resp==0){
            $this->load->view('students/dashboard');
        }

        if($resp==1){
            $this->session->set_flashdata('item', 'Your Request rejected by Teacher !');
        }if($resp==2){
            $this->session->set_flashdata('item', 'Your Request accepted by Teacher and forword to HOD!');
        }if($resp==3){
            $this->session->set_flashdata('item', 'Your Request rejected by HOD !');
        }if($resp==4){
            $this->session->set_flashdata('item', 'Your Request accepted by HOD and forword to Dean!');
        }if($resp==5){
            $this->session->set_flashdata('item', 'Your Request rejected by Dean !');
        }if($resp==6){
            $this->session->set_flashdata('item', 'Your Request accept successfully! enjoy this course');
        }if($resp==7){
            $this->session->set_flashdata('item', 'Your have been enrolled in request course.');
        }

        return $this->load->view('students/dashboard');

    }
    public function dashboad(){
        $result = $this->course->dep_list();
        $status = $this->pro->check_status();
        $status =  $status->status;
        $this->load->view('students/home', ['result' => $result,'status'=>$status]);
    }

    public function add_course($course_id){

        $st_id = $this->session->userdata('id');
        //get student selected course to add
        $course_to_add = $this->course->check_date($course_id);

//        echo '<pre>';
//        print_r($course_to_add);
//        die;

        $strt_time = $course_to_add->start_time;
        // this code is for time check...  you can remove this if you want to check other conditions like five course
        // and already selected or not...etc
        $selected_course_results = $this->course->course_list($st_id); //already selected course in list of student...


//        echo '<pre>';
//        print_r($selected_course_results);
//        die;


        if($selected_course_results){



            $day  =  unserialize($course_to_add->day);

            foreach($selected_course_results as $selected_course_result):
                $days = unserialize($selected_course_result->days);
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

                            if(($selected_course_result->start_time < $course_to_add->end_time)
                                && ($course_to_add->start_time < $selected_course_result->end_time))
                            {
                                $this->session->set_flashdata('item', 'Please Select another Course, Time Clash Error with ' . $selected_course_result->course_name);
                                return redirect('student/dashboad');

                            }

//
//                            $created = $selected_course_result->time.'<br>';
//                            list($firstMinutes, $firstSeconds) = explode(':', $created);
//                            $firstSeconds += ($firstMinutes * 60);
//
//                            list($secondMinutes, $secondSeconds) = explode(':', $strt_time);
//                            $secondSeconds += ($secondMinutes * 60);
//                            $diff = $secondSeconds - $firstSeconds;
//                            if($diff == 0){
//                                $this->session->set_flashdata('item', 'Please Select another Course Time Clash Error');
//                                return redirect('student/dashboad');
//                            }

                        }
                    }

                }
            endforeach;
        }  // remove this for checking condition

        $id = $this->session->userdata('id');

        $data = array(
            'course_id'    => 	$course_id,
            'st_id' 	   => 	$id,
            'time'         =>   $course_to_add->start_time,
            'days'         =>   $course_to_add->day
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

        $res = array_map(function ($res){
            $res->start_time = (new DateTime($res->start_time))->format('H:i');
            $res->end_time = (new DateTime($res->end_time))->format('H:i');
            $res->time_key = $res->start_time . '-' . $res->end_time;
            return $res;
        }, $result);


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

        $stdCourses = $this->course->selected_subjects($id);

        $stdCourses = array_map(function ($course) {
            $course->days = implode(":", unserialize($course->days));
            $course->start_time = (new DateTime($course->start_time))->format('H:i');
            $course->end_time = (new DateTime($course->end_time))->format('H:i');
            $course->time_key = $course->start_time . '-' . $course->end_time;
            return $course;
        }, $stdCourses);

        $this->load->view('students/semesterSchedules', [
            'result'=>$result,
            'courses' => $stdCourses,
        ]);
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

        $st_id = $this->session->userdata('id');
        $is_requested = $this->course->is_requested($id, $st_id);

        if(! $is_requested)
        {
            return $this->load->view('students/req',['id'=>$id]);
        }


        $this->session->set_flashdata('item', 'You have already requested this course.');
        redirect($_SERVER['HTTP_REFERER']);

    }

    public function req_sub($id){

        $st_id = $this->session->userdata('id');
        $des =  $this->input->post('des');
        $course = $this->course->get_by_id($id);

        //teacher session id is used 3
        $teacher_id = $course->instr_id;

        $req = array(
            'course_id'   =>   $id,
            'admin_id'    =>   $teacher_id,
            'description' =>   $des,
            'st_id'       =>   $st_id,
            'teacher_id' => $teacher_id
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
            . '<th>Course ID</th>'
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

            $ifFull = $province->avail <= 0;

            $days = unserialize($province->day);
            $day = implode(",", $days);
            $result .='<tr>';
            $addAttributes = ['class'=>'btn btn-primary'];
            $reqAttributes = ['class'=>'btn btn-primary'];

            if($ifFull)
            {
                $addAttributes['disabled'] = 'disabled';
            }
            else
            {
                $reqAttributes['disabled'] = 'disabled';
            }

            $province->start_time = (new DateTime($province->start_time))->format('H:i');
            $province->end_time = (new DateTime($province->end_time))->format('H:i');
            $province->time_key = $province->start_time . '-' . $province->end_time;


            $result .= '<td>'.anchor("student/add_course/{$province->course_id}",'Add', $addAttributes).'</td>';
            $result .= '<td>'.anchor("student/req_course/{$province->course_id}",'REQ', $reqAttributes).'</td>';
            $result .= '<td>'.$province->name.'</td>'
                . '<td>'.$province->dp_name.'</td>'
                . '<td>'.$province->course_name.'</td>'
                . '<td>'.$province->courses_id.'</td>'
                . '<td>'.$province->cr.'</td>'
                . '<td>'.$province->room_no.'</td>'
                . '<td>'.$province->start_date.'</td>'
                . '<td>'.$day.'</td>'
                . '<td>'.$province->time_key.'</td>'
                . '<td>'.$province->teach_name.'</td>'
                . '<td>35</td>'
                . '<td>'.$province->avail.'</td>'
                .'</tr>';
        }
        $result .='</table>';
        echo json_encode($result);
    }

    public function transcript()
    {
        $st_id = $this->session->userdata('id');
        $transcript = $this->course->transcript($st_id);


        $transcript = array_map(function ($courses) {

            return array_map(function ($course){

                $course['days'] = implode(":", unserialize($course['days']));
                $course['start_time'] = (new DateTime($course['start_time']))->format('H:i');
                $course['end_time'] = (new DateTime($course['end_time']))->format('H:i');
                $course['time_key'] = $course['start_time'] . '-' . $course['end_time'];
                return $course;


            }, $courses);

        }, $transcript);


//        echo '<pre>';
//        print_r($transcript);
//        die;


        $this->load->view('students/transcript', [
            'result' => $transcript,
        ]);
    }

}