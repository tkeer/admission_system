<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model {
    public function register($data){
        $q = $this->db
            ->insert('student_registeration', $data);
        return $q;
    }

    public function login($rollNumber, $pass)
    {
        $q = $this->db
            ->where(['roll_number'=> $rollNumber,'pass'=>$pass])
            ->get('student_registeration');


        return $q->num_rows() > 0 ? $q->row()->st_id : null;

    }


    public function get_all()
    {
        $q = $this->db->get('student_registeration');
        return $q->result();
    }

    public function hold($st_id, $is_holded)
    {
        $this->db->set('is_holded', $is_holded)
            ->where('st_id', $st_id)
            ->update('student_registeration');  //r
    }

}