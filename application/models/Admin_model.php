<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| ADMIN MODEL
| -------------------------------------------------------------------
|
| This model is use for access databases from / for admin view
|
| -------------------------------------------------------------------
| contenct :
| -------------------------------------------------------------------
|
| These are something to accsess databases:
| 1. load data book from table book_master when book_status = 0, this mean the book is new and need to edit for complete the data
| 2. get data book by id fro edit from
| 3. Update data book by id
| 4. delete data book by id
| 5. add new book
| 5. Load all data member from table user_member
|
*/

class Admin_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    //$this->load->database();
  }

  //get data of new book from table book_master when book_status = 0 (new book )
  public function get_new_book()
  {
    $this->db->select('*');
    $this->db->from('book_master');
  //  $this->db->where('book_status','0');
    $this->db->order_by('id_book','DESC');
    $query=$this->db->get();
    return $query->result_array();
  } //the end of function

  //get data book by id
  public function get_data_new_book_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('book_master');
    $this->db->where('id_book',$id);
    $query=$this->db->get();
    return $query->row();
  }

  //update book to databases
  public function save_update_book($where, $data)
	{
		$this->db->update('book_master', $data, $where);
		return $this->db->affected_rows();
	}

  //delete book by id
  public function delete_book_by_id($id)
  {
    $this->db->where('id_book',$id);
    $this->db->delete('book_master');
  }

  //add new book
  public function add_new_book($data)
  {
    $this->db->insert('book_master',$data);
    return $this->db->insert_id();
  }

  //get all data user/member
  public function get_all_member()
  {
    $this->db->select('*');
    $this->db->from('user_master');
    $query=$this->db->get();
    return $query->result_array();
  } //eof

  //get all data visitor
  public function get_all_data_visitor()
  {
    $this->db->select('um.user_id, um.id_rfid, um.username, um.first_name, um.last_name, lv.log_time');
    $this->db->from('user_master um');
    $this->db->join('log_visitor lv', 'um.id_rfid = lv.rfid');
    $query=$this->db->get();
    return $query->result_array();
  }// eof

  // get data member by id
  public function get_member_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('user_master');
    $this->db->where('user_id',$id);
    $query=$this->db->get();
    return $query->row();
  }//eof

  //update member by id
  public function save_update_member($where, $data)
  {
    $this->db->update('user_master',$data, $where);
    return $this->db->affected_rows();
  } //eof

  //delete member by id
  public function delete_member_by_id($id)
  {
    $this->db->where('user_id',$id);
    $this->db->delete('user_master');
  } //eof


} //the end of the class
