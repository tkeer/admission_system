<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Model {

    public function login($email,$pass){

        $query =	$this->db->select()
            ->from('admin')
            ->where(['email'=>$email,'pass'=>$pass])
            ->join('role', 'role.role_id = admin.role_id', 'left')
            ->get();

        if($query->num_rows() > 0 ) {
            return $query->row();
        } else {
            return FALSE;
        }

    }

    public function teacher_login($email, $pass)
    {
        $query = $this->db->select()
            ->from('teacher')
            ->where(['teach_name'=>$email,'pass'=>$pass])
            ->get();

        if($query->num_rows() > 0 ) {
            return $query->row();
        } else {
            return FALSE;
        }

    }

    public function pass($id){
        $query =	$this->db->select()
            ->from('admin')
            ->where('admin_id',$id)
            ->get();
        return $query->row();
    }
    public function st_pass($id){
        $query =	$this->db->select()
            ->from('student_registeration')
            ->where('st_id',$id)
            ->get();
        return $query->row();
    }
    public function update_pass($data,$id){
        $query = $this->db->set($data)
            ->where('admin_id', $id)
            ->update('admin');
        return $query;
    }
    public function update_pass_st($data,$id){
        $query = $this->db->set($data)
            ->where('st_id', $id)
            ->update('student_registeration');
        return $query;
    }

    public function req_sub_teach($req){
        $q = $this->db->insert('course_request',$req);
        return $q;
    }




}