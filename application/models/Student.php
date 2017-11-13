<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model {
	public function register($data){
		$q = $this->db
				  ->insert('student_registeration', $data);
			return $q;
	}
	
	public function login($email,$pass){
		$q = $this->db
				  ->where(['st_id'=>5,'pass'=>$pass])
				  ->get('student_registeration');
			if($q->num_rows() > 0 ) {
                return  $q->row()->st_id;
			} else {
				echo "Hello";exit;
						}
	} 
	
}