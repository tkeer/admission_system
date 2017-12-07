<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    /**
     * @var Course
     */
    public $course;

    /**
     * @var Admin_pro
     */
    public $pro;

    /**
     * @var Student
     */
    public $student;

    public function __construct(){
        parent::__construct();
        if( ! $this->session->userdata('admin_id'))
            return redirect('login');
        $this->load->model('admin_pro','pro');
        $this->load->model('admin_login', 'login');
        $this->load->model('course');
        $this->load->model('student');
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
            $this->load->view('admin/List_teach', ['result'=>$result]);
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
            $this->load->view('admin/List_room', ['result'=>$result]);
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
        $sections = $this->pro->list_section();
        $room = $this->pro->list_room();
        $this->load->view('admin/add_subject', ['department'=>$dep, 'sec'=>$sec, 'teach'=>$teach, 'room'=>$room, 'sections' => $sections]);
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
        $section = $this->input->post_get('section');


        $days = serialize($this->input->post('hobbies[]'));

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
            'avail'         => 10,
            'section'       => $section
        );

        $result = $this->pro->add_sub($data);
        if($result){
            $this->session->set_flashdata('add_session', 'A new course has been added successfully!');
            return redirect('admin/List_sub');
        }else{
            $this->session->set_flashdata('faild_session', 'Query faild, please try Again !');
            return redirect('admin/List_sub');
        }
    }
    public function List_sub(){
        $result = $this->pro->list_sub();
        if($result){


            $result = array_map(function ($course) {
                $course->start_time = (new DateTime($course->start_time))->format('H:i');
                $course->end_time = (new DateTime($course->end_time))->format('H:i');
                $course->time_key = $course->start_time . '-' . $course->end_time;
                return $course;
            }, $result);


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

        $sections = $this->pro->list_section();
        $days = $result->day;
        if($result){
            $this->load->view('admin/edit_sub', ['department'=>$dep,
                'day'=>$days, 'sec'=>$sec, 'teach'=>$teach, 'room'=>$room, 'result'=>$result, 'sections' => $sections]);
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
        $section = $this->input->post_get('section');
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
            'day'           => $days,
            'section'       => $section
        );
        $result = $this->pro->update_sub($data,$id);
        if($result){
            $this->session->set_flashdata('add_session', 'Course has been updated successfully!');
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

    public function req(){
        $id = $this->session->userdata('admin_id');

        $requests = $this->pro->request($id);
        $requests = $requests ? $requests : [];
        $this->load->view('admin/requests',['data'=>$requests]);
    }

    public function resp_req($i){
        $st_id = $this->input->post('st_id');
        $c_id = $this->input->post('c_id');
        $id = $this->input->post('id');


        $request_status = array(
            'status'     => $i,
            'admin_id' => 0
        );

        $course = $this->course->get_by_id($c_id);


        $data = array(
            'course_id'    => 	$c_id,
            'st_id' 	   => 	$st_id,
            'time'         =>   $course->start_time,
            'days'         =>   $course->day
        );
        $result = $this->course->insert_course($data, true);

        if($result == 1)
        {
            $request_status['status'] = 8;
            $this->session->set_flashdata('faild_session', 'Student already has been enrolled in this course!');
        }
        else if($result == 2)
        {
            $this->session->set_flashdata('add_session', 'Student add to course successfully!');
        }
        else if($result == 0)
        {
            $request_status['status'] = 9;
            $this->session->set_flashdata('faild_session', 'Maximum enrolled course limit of the student already reached!');
        }

        $result = $this->pro->req_status($request_status, $id);
        redirect('admin/req');
    }

    public function add_student()
    {
        return $this->load->view('admin/add_student');
    }
    public function hold_student()
    {
        $st_id = $this->input->post('st_id');
        $is_holded = $this->input->post('is_holded');

        $this->student->hold($st_id, $is_holded == 'true' ? 1 : 0);
    }

    public function add_student_post()
    {

        $no    =  $this->input->post('no');
        $fname =  $this->input->post('fname');
        $lname =  $this->input->post('lname');
        $email =  $this->input->post('email');
        $uname =  $this->input->post('fname');
        $rollnumber =  $this->input->post('roll_number');
        $pass  =  $this->input->post('password');

        $data = array(
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'uname' => $uname,
            'pass'  => $pass,
            'no'    => $no,
            'roll_number' => $rollnumber
        );

        $result =   $this->student->register($data);

        if($result){
            $this->session->set_flashdata('add_session', 'Registration completed Seccussfully');
        }else{
            $this->session->set_flashdata('faild_session', 'Registration Faild,Please Try Again');
        }

        return redirect('admin/add_student');
    }

    public function list_students()
    {
        $students = $this->student->get_all();

        return $this->load->view('admin/list_students', ['students' => $students]);
    }

    public function add_section()
    {
        return $this->load->view('admin/add_section');
    }

    public function add_section_post()
    {

        $name    =  $this->input->post('name');

        $data = array(
            'name' => $name,
        );

        $result =   $this->course->add_section($data);

        if($result){
            $this->session->set_flashdata('add_session', 'Section added Seccussfully');
        }else{
            $this->session->set_flashdata('faild_session', 'Section adding Faild,Please Try Again');
        }

        return redirect('admin/add_section');
    }

    public function list_sections()
    {
        $sections = $this->course->list_sections();

        return $this->load->view('admin/list_sections', ['sections' => $sections]);
    }

    public function ad_open($i){
        $status = $this->pro->update_status($i);
        if($status){
            $this->session->set_flashdata('add_session', 'Registration Successfully Open');
            return redirect('admin');
        }
    }

    public function ad_close($i){
        $status = $this->pro->update_status($i);
        if($status){
            $this->session->set_flashdata('add_session', 'Registration Successfully CLOSE');
            return redirect('admin');
        }
    }

    public function logout(){
        $this->session->unset_userdata('admin_id');
        return redirect('login');
    }
}