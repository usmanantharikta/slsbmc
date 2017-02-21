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
  //get all data user/member
  public function get_all_member()
  {
    $this->db->select('*');
    $this->db->from('user_member');
    $query=$this->db->get();
    return $query->result_array();
  } //eof

} //the end of the class
