<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pro extends CI_Model {
	//start session query
	
	public function add_sec($name){
		$data = array(
			'name'=>$name
		);
		$q = $this->db
				  ->insert('fall_add', $data);
			return $q;
	}
	public function list_sess(){
		$query =	$this->db->select()
							 ->from('fall_add')
							 ->get();
				return $query->result();
	}
	public function edit_sec($id){
		$query =	$this->db->select()
							 ->from('fall_add')
							 ->where('fall_add_id',$id)
							 ->get();
				return $query->row();
	}
	public function update_sec($data, $id){
		
		$query = $this->db->set('name', $data)
				->where('fall_add_id', $id)
				->update('fall_add'); 
			return $query;
	}
	public function delete_sec($id){
		$query = $this->db->where('fall_add_id', $id)
				 ->delete('fall_add');
			return $query;
	}
	//end all session query...
	
	//start department query...
	public function add_dep($data){
		$q = $this->db
				  ->insert('depart', $data);
			return $q;
	}
	public function list_dep(){
		$query =	$this->db->select()
							 ->from('depart')
							 ->get();
				return $query->result();
	}
	public function edit_dep($id){
		$query =	$this->db->select()
							 ->from('depart')
							 ->where('dep_id',$id)
							 ->get();
				return $query->row();
	}
	public function update_dep($data, $id){
		
		$query = $this->db->set( $data)
				->where('dep_id', $id)
				->update('depart'); 
			return $query;
	}
	public function delete_dep($id){
		$query = $this->db->where('dep_id', $id)
				 ->delete('depart');
			return $query;
	}
	//end department query...
	
	//teacher queries...
	public function add_teach($data){
			$q = $this->db
				  ->insert('teacher', $data);
			return $q;
	}
	public function list_teach(){
		$query =	$this->db->select()
							 ->from('teacher')
							 ->get();
				return $query->result();
	}
	public function edit_teach($id){
		$query =	$this->db->select()
							 ->from('teacher')
							 ->where('instr_id',$id)
							 ->get();
				return $query->row();
	}
	public function update_teach($data, $id){
		$query = $this->db->set($data)
				->where('instr_id', $id)
				->update('teacher'); 
			return $query;
	}
	public function delete_teach($id){
		$query = $this->db->where('instr_id', $id)
				 ->delete('teacher');
			return $query;
	}
	public function List_room(){
		$query =	$this->db->select()
							 ->from('room')
							 ->get();
				return $query->result();
	}
	public function add_room($data){
		$q = $this->db
				  ->insert('room', $data);
			return $q;
	}
	public function edit_room($id){
		$query =	$this->db->select()
							 ->from('room')
							 ->where('id',$id)
							 ->get();
				return $query->row();
	}
	public function update_room($data,$id){
		$query = $this->db->set($data)
				->where('id', $id)
				->update('room'); 
			return $query;
	}
	public function delete_room($id){
		$query = $this->db->where('id', $id)
				 ->delete('room');
			return $query;
	}
	public function add_sub($data){
		$q = $this->db
				  ->insert('course_list', $data);
			return $q;
	}
	public function list_sub(){
		$query =	$this->db->select()
							 ->from('course_list')
							 ->join('depart', 'depart.dep_id = course_list.dep_id', 'left')
							 ->join('fall_add', 'fall_add.fall_add_id = course_list.fall_add_id', 'left')
							 ->join('room', 'room.id = course_list.id', 'left')
							 ->join('teacher', 'teacher.instr_id = course_list.instr_id', 'left')
							 ->get();
				return $query->result();
	}
	public function edit_sub($id){
		$query =	$this->db->select()
							 ->from('course_list')
							 ->where('course_id',$id)
							 ->join('depart', 'depart.dep_id = course_list.dep_id', 'left')
							 ->join('fall_add', 'fall_add.fall_add_id = course_list.fall_add_id', 'left')
							 ->join('room', 'room.id = course_list.id', 'left')
							 ->join('teacher', 'teacher.instr_id = course_list.instr_id', 'left')
							 ->get();
				return $query->row();
	}
	public function update_sub($data, $id){
		$query = $this->db->set($data)
				->where('course_id', $id)
				->update('course_list'); 
			return $query;
	}
	public function delete_sub($id){
		$query = $this->db->where('course_id', $id)
				 ->delete('course_list');
			return $query;
	}
	
	public function update_status($id){
		$data = array('status'=>$id);
		$query = $this->db->set($data)
				->where('fall_add_id', 2)
				->update('fall_add'); 
			return $query;
	}
	
	public function check_status(){
		$qry = $this->db->select('status')
					->where('fall_add_id', 2)
					->get('fall_add');
			return $qry->row();
	}
	
	public function check_response($id){
		$qry = $this->db
					->select('status')
					->where('st_id',$id)
					->get('course_request');
			if($qry){
				$q = $this->db->set('status',0)
					->where(['st_id'=>$id])
					->update('course_request');
			}
			return $qry->row();
	}
	
	public function request($id){
		$qry = $this->db
					->select()
					->where('admin_id',$id)
					->get('course_request');
			return $qry->result();
	}
	public function req_status($data,$st_id,$c_id){
		$qry = $this->db->set($data)
					->where(['st_id'=>$st_id,'course_id'=>$c_id])
					->update('course_request');
					
				$req = array(
			'course_id'   =>   $c_id,
			'admin_id'    =>   5,
			'description' =>   $data['description'],
			'st_id'       =>   $st_id
		);
		$qry = $this->db->insert('course_request',$req);
		
	}
	
}