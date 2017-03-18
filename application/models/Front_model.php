<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| FRONT MODEL
| -------------------------------------------------------------------
|
| This model is use for access databases from / for admin view
|
| -------------------------------------------------------------------
| content :
| -------------------------------------------------------------------
|
| 
|
*/

class Front_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    //$this->load->database();
  }

  public function get_book_data()
  {
    $sql = "SELECT bm.*,bs.status,ct.cat_name
            FROM `book_master` AS bm 
            INNER JOIN `book_status` as bs 
            ON bm.book_status=bs.stat_id
            JOIN category as ct
            on bm.category=ct.category_id"
            ;

        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $data = $query->result_array();
            return $data;
        }
        return false;
  } //the end of function

  public function get_category_item(){
    $sql = "SELECT * FROM `category`";
    $query = $this->db->query($sql);

    if($query->num_rows()>0){
      $data = $query->result_array();
      return $data;
    } else {
      return false;
    }
  }

    public function get_book_data_by_id($book_id)
  {
    $sql = "SELECT bm.*,bs.status,ct.cat_name
            FROM `book_master` AS bm 
            INNER JOIN `book_status` as bs 
            ON bm.book_status=bs.stat_id
            JOIN category as ct
            on bm.category=ct.category_id
            where book_id ='".$book_id."'"
            ;

        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $data = $query->result_array();
            return $data;
        }
        return false;
  } //the end of function
    public function get_book_data_by_rfid($book_rfid)
  {
    $sql = "SELECT bm.*,bs.status,ct.cat_name
            FROM `book_master` AS bm 
            INNER JOIN `book_status` as bs 
            ON bm.book_status=bs.stat_id
            JOIN category as ct
            on bm.category=ct.category_id
            where id_rfid ='".$book_rfid."'"
            ;

        $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $data = $query->result_array();
            return $data;
        }
        return false;
  }
public function insert_borrow($data){

$this->db->insert('transaction_master', $data);
}

  public function insert_return($data){
      $where = "(user_id='".$data['user_id']."' AND book_id ='".$data['book_id']."')";
      $update = array('actual_date' => $data['actual_date'] );

      $this->db->where($where);
      $this->db->update('transaction_master', $update);
}

public function get_borrow($user_id){
    $sql = "SELECT tr.*, b.book_title, b.author, b.isbn FROM `transaction_master` as tr 
            join book_master as b
            on b.book_id = tr.book_id
            WHERE tr.actual_date = '0000-00-00' AND tr.user_id = '".$user_id."'";

    $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $data = $query->result_array();
            return $data;
        }
        return false;
}

public function get_user_data_by_rfid($rfid){
    $sql = "SELECT * FROM user_master WHERE id_rfid = '".$rfid."'";

    $query = $this->db->query($sql);
        if($query->num_rows()>0){
            $data = $query->row();
            return $data;
        }
        return false;
  }

}