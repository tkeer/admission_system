<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Model {

    public function dep_list(){
        $q = $this->db->get('depart');
        return $q->result();

    }
    public function course_list($st_id){

        $query = $this->db->select()
            ->from('course')
            ->join('course_list', 'course_list.course_id = course.course_id', 'left')
            ->where('st_id', $st_id)
            ->get();

        return $query->result();
    }
    public function check_date($course_id){
        $query = $this->db
            ->where('course_id',$course_id)
            ->get('course_list');
        return $query->row();
    }

    public function insert_course($data, $isForcefully = false){

        $co_id	= $data['course_id'];
        $s_id	= $data['st_id'];
        $query = $this->db
            ->where('st_id',$s_id)
            ->get('course');
        $query->num_rows(); // get subjects list
        $query_seats = $this->db
            ->where('course_id', $data['course_id'])
            ->get('course_seats'); // get seats number

        $seats = $query_seats->num_rows();
        $q = $query->result();	 // get record for student
        $seat_data = array(
            'course_id'			=>  $data['course_id'],
            'st_id'             =>  $s_id
        );

        if($query->num_rows() <= 4 ){
            foreach($q as $q): // if student applied before
                if( $data['course_id'] == $q->course_id ){
                    return 1;
                }
            endforeach;
            if( $seats >= 10 && ! $isForcefully ){ //check for seats
                return 3;
            }	echo $seats.'<br>';
            $seats =$seats + 1;
            $remaining = 10 - $seats;

            if($remaining < 0)
            {
                $remaining = 0;
            }

            $seat = array('avail'=>$remaining);

            $this->db->set($seat)
                ->where('course_id', $co_id)
                ->update('course_list');  //r

            $this->db
                ->insert('course', $data);
            $this->db
                ->insert('course_seats', $seat_data);

            return 2;
        }
        else {
            return 0;
        }
    }

    public function selected_subjects($id){
        $query =	$this->db->select()
            ->from('course')
            ->where('st_id', $id)
            ->join('course_list', 'course_list.course_id = course.course_id', 'left')
            ->join('teacher', 'course_list.instr_id = teacher.instr_id', 'left')
            ->join('room', 'course_list.id = room.id', 'left')
            ->order_by('course_list.course_name')
            ->get();
        return $query->result();
    }
    public function drop_sub($course_id,$st_id){

        $qry = $this->db
            ->where(['st_id'=>$st_id,'course_id'=>$course_id])
            ->delete('course');
        if($qry){
            $q = $this->db
                ->where(['course_id'=>$course_id,'st_id'=>$st_id])
                ->delete('course_seats');
        }
        if($q){
            $query = $this->db
                ->where('course_id',$course_id)
                ->get('course_list');
            $remain_seats=$query->row()->avail;
            $remaining = $remain_seats+1;

            $seat = array('avail'=>$remaining);
            $this->db->set($seat)
                ->where('course_id', $course_id)
                ->update('course_list');  //r
            return true;
        }else{
            return false;
        }
    }
    public function list_files($id, $term_id){

        $query =	$this->db->select()
            ->from('course_list')
            ->where('course_list.dep_id', $id)
            ->where('fall_add.fall_add_id', $term_id)
            ->join('depart', 'depart.dep_id = course_list.dep_id', 'left')
            ->join('fall_add', 'fall_add.fall_add_id = course_list.fall_add_id', 'left')
            ->join('room', 'room.id = course_list.id', 'left')
            ->join('teacher', 'teacher.instr_id = course_list.instr_id', 'left')
            ->get();
        return $query->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->select()
            ->from('course_list')
            ->where('course_id', $id)
            ->get();

        $result = $query->result();

        return isset($result[0]) ? $result[0] : [];
    }

    public function transcript($st_id)
    {
        $query = $this->db->select()
            ->from('course_list')
            ->join('course', 'course_list.course_id = course.course_id')
            ->join('fall_add', 'course_list.fall_add_id = fall_add.fall_add_id')
            ->where('st_id', $st_id)
            ->get();

        $arr = $query->result_array();

        $result = array();

        foreach ($arr as $data) {
            $id = $data['name'];
            if (isset($result[$id])) {
                $result[$id][] = $data;
            } else {
                $result[$id] = array($data);
            }
        }

        return $result;
    }

    public function is_requested($course_id, $st_id)
    {
        $query = $this->db
            ->where('course_id',$course_id)
            ->where('st_id',$st_id)
            ->get('course_request');
        return $query->row();

    }

    public function add_section($data)
    {
        $this->db
            ->insert('sections', $data);

        return true;
    }

    public function list_sections()
    {
        $query =	$this->db->select()
            ->from('sections')
            ->get();
        return $query->result();
    }
}







