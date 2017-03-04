<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	function cek_mail($email)
	{
		$this->db->select('username');
		$wherecondition = array('username'=>$email);
		$this->db->where($wherecondition);
		$this->db->from("admin_master");
		$query=$this->db->get();
		$flag=$query->num_rows();
		if($flag){
			$row = $query->row();
			$email = $row->username;
			// $this->session->set_userdata('email',$email);
		}
		else
		{
			$this->db->select('username');
			$wherecondition = array('id_rfid'=>$email);
			$this->db->where($wherecondition);
			$this->db->from("admin_master");
			$query=$this->db->get();
			$flag=$query->num_rows();
			if($flag){
				$row = $query->row();
				$email = $row->username;
				// $this->session->set_userdata('email',$email);
			}
		}
		return $flag;
}

	function cek_pass($email, $password){
			$this->db->select('*');
			$wherecondition = $array = array('username'=>$email,'password'=>$password);
			$this->db->where($wherecondition);
			$this->db->from("admin_master");
			$query=$this->db->get();
			$flag=$query->num_rows();
		if($flag){
			$row = $query->row();
			$username = $row->username;
			$level= $row->level;
			$this->session->set_userdata('user',$username);
			$this->session->set_userdata('level',$level);
		}
		else
		{
				$this->db->select('*');
				$wherecondition = $array = array('id_rfid'=>$email,'password'=>$password);
				$this->db->where($wherecondition);
				$this->db->from("admin_master");
				$query=$this->db->get();
				$flag=$query->num_rows();
			if($flag){
				$row = $query->row();
				$username = $row->username;
				$level= $row->level;
				$this->session->set_userdata('user',$username);
				$this->session->set_userdata('level',$level);
			}
		}
			return $flag;
	}
	function datalog($data)
	{
			$this->db->insert('datalog', $data);
			return $this->db->insert_id();
	}

	function save_signup($data)
	{
		$this->db->insert('account',$data);
		return $this->db->insert_id();
	}

}
