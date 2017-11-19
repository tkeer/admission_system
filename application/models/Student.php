<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model {
    public function register($data){
        $q = $this->db
            ->insert('student_registeration', $data);
        return $q;
    }

    public function login($email,$pass)
    {
        $q = $this->db
            ->where(['st_id'=> $email,'pass'=>$pass])
            ->get('student_registeration');
        if($q->num_rows() > 0 ) {
            return  $q->row()->st_id;
        } else {
            echo "Hello";exit;
        }
    }


    public function get_all()
    {
        $q = $this->db->get('student_registeration');
        return $q->result();
    }

}