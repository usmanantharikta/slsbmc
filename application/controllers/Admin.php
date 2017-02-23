<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// * this controller is for admin view on the SLS
// * the fiture of this controller is :
// * 1. this controller is display of the homepage of admin view
// * 2. display data from databases
// * 3. insert edit and delete from / to databases
// * 4. manage book
// * 5. manage member

class Admin extends CI_Controller
{
  // load componen will use (library, help, model , or other)
  public function __construct()
  {
   parent::__construct();
    $this->load->model('admin_model');
  }

  //homepage
  public function index()
  {
    $this->template->load('admin_temp','new_book');

  } //end of function index

  public  function testpage()
  {
    $this->template->load('admin_temp','testpage');
  }

  //get data for plot to table new book
  public function get_new_book_data()
  {
    $data_new_book=$this->admin_model->get_new_book();
    $data=array(); //inisial array for store data from databases to json encode
    $no=1; // for numbering
    //assign array of data from result query
    foreach ($data_new_book as $key)
    {
      array_push($data, array(
        $no++,
        $key['id_book'],
        $key['id_rfid'],
        $key['book_title'],
        $key['author'],
        $key['publisher'],
        $key['editor'],
        $key['year'],
        $key['description'],
        $key['input_date'],
        $key['price'],
        $key['id_supplier'],
        $key['id_publisher'],
        $key['book_status'],
        '<a class="btn btn-sm btn-primary" title="Edit" onclick="edit_book('."'".$key['id_book']."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
        <a class="btn btn-sm btn-danger" title="Delete" onclick="delete_book('."'".$key['id_book']."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>',
      ));
    }
    echo json_encode(array('data'=>$data));
  } //end of function get_new_book_data

  //edit new book
  public function edit_new_book($id)
  {
    $data=$this->admin_model->get_data_new_book_by_id($id);
    echo json_encode($data);
  }//end of function

  //update new book
  public function update_book()
  {
    $data=array(
      'id_rfid'=>$this->input->post('id_rfid'),
      'book_title'=>$this->input->post('book_title'),
      'author'=>$this->input->post('author'),
      'publisher'=>$this->input->post('publisher'),
      'editor'=>$this->input->post('editor'),
      'year'=>$this->input->post('year'),
      'description'=>$this->input->post('description'),
      'input_date'=>$this->input->post('input_date'),
      'price'=>$this->input->post('price'),
      'id_supplier'=>$this->input->post('id_supplier'),
      'id_publisher'=>$this->input->post('id_publisher'),
      'book_status'=>1,
    );
    $insert = $this->admin_model->save_update_book(array('id_book' => $this->input->post('id_book')), $data);
    echo json_encode(array("status" => TRUE));
  }//eof update book

  //delete book from database
  public function delete_book($id)
  {
    $this->admin_model->delete_book_by_id($id);
    echo json_encode(array("status" => TRUE));
  } //eof

  //show page member
  public function member()
  {
    $this->template->load("admin_temp",'member');
  }

  //get data member for table member on view using ajax with data json_encode
  public function get_data_member_all()
  {
    $data_all_member=$this->admin_model->get_all_member();
    $data=array();
    $no=1;

    foreach ($data_all_member as $key ) {
      array_push($data, array(
        $no++,
        $key['user_id'],
        $key['id_rfid'],
        $key['username'],
        $key['email'],
        $key['password'],
        $key['first_name']." ".$key['last_name'] ,
        $key['phone'],
        $key['address'],
        $key['group_'],
        $key['gender'],
        $key['birthday'],
        $key['register_date'],
        '<a class="btn btn-sm btn-primary" title="Edit" onclick="edit_member('."'".$key['user_id']."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
        <a class="btn btn-sm btn-danger" title="Delete" onclick="delete_member('."'".$key['user_id']."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>',
      ));
    }
    echo json_encode(array('data'=>$data));
  } //eof get_data_member_all

  //edit member
  public function edit_member($id)
  {
    $data=$this->admin_model->get_member_by_id($id);
    echo json_encode($data);
  } //eof

  //update member
  public function update_member()
  {
    $data=array(
      'user_id'=>$this->input->post('user_id'),
      'id_rfid'=>$this->input->post('id_rfid'),
      'username'=>$this->input->post('username'),
      'email'=>$this->input->post('email'),
      'password'=>$this->input->post('password'),
      'first_name'=>$this->input->post('first_name'),
      'last_name'=>$this->input->post('last_name'),
      'phone'=>$this->input->post('phone'),
      'address'=>$this->input->post('address'),
      'group_'=>$this->input->post('group_'),
      'gender'=>$this->input->post('gender'),
      'birthday'=>$this->input->post('birthday'),
      'register_date'=>$this->input->post('register_date'),
    );
    $insert=$this->admin_model->save_update_member(array('user_id',$this->input->post('user_id')),$data);
    echo json_encode(array("status" => TRUE));
  }//eof

  //DELETE MEMBER BY ID
  public function delete_member($id)
  {
    $this->admin_model->delete_member_by_id($id);
    echo json_encode(array('status' => TRUE));
  }

  //view page log visitor
  public function table_visitor()
  {
    $this->template->load('admin_temp','log_visitor');
  }

  //get data all visitor
  public function get_data_visitor()
  {
    $data_visitor=$this->admin_model->get_all_data_visitor();
    $data=array();
    $no=1;

    foreach ($data_visitor as $key) {
      array_push($data, array(
      $no++,
      $key['user_id'],
      $key['id_rfid'],
      $key['username'],
      $key['first_name']." ".$key['last_name'] ,
      $key['log_time'],
      // '<a class="btn btn-sm btn-primary" title="Edit" onclick="edit_member('."'".$key['user_id']."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
      // <a class="btn btn-sm btn-danger" title="Delete" onclick="delete_member('."'".$key['user_id']."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>',
    ));
    }
    echo  json_encode(array('data'=>$data));
  } //eof


}//end of class
