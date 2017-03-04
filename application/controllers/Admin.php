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
  public function new_book()
  {
    $this->template->load('admin_temp','new_book');

  } //end of function index

  //login
  public function index()
  {
    $this->load->view('admin_login');
  }
  //homepage
  public function home()
  {
    $this->template->load('admin_temp','admin_homepage');
  }

  //new book
  public function book_new()
  {
    $this->template->Load('admin_temp','new_book1');
  }

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
        $key['rack'],
        $key['book_location'],
        $key['book_status'],
        '<a class="btn btn-sm btn-primary" title="Edit" onclick="edit_book('."'".$key['id_book']."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
        <a class="btn btn-sm btn-danger" title="Delete" onclick="delete_book('."'".$key['id_book']."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>',
      ));
    }
    echo json_encode(array('data'=>$data));
  } //end of function get_new_book_data

  public function book_location()
  {
    $this->template->load('admin_temp','book_location');
  }
  //get book location
  public function get_book_location()
  {
    $data_new_book=$this->admin_model->get_new_book();
    $data=array(); //inisial array for store data from databases to json encode
    $no=1; // for numbering
    //assign array of data from result query
    foreach ($data_new_book as $key)
    {
      if($key['rack']==$key['book_location'])
      {
        $info_book='<i class="text-success fa fa-check-square">Good</i>';
      }
      else
      {
        $info_book='<i class="text-danger fa fa-close">Wrong</i>';
      }
      array_push($data, array(
        $no++,
        $key['id_book'],
        $key['id_rfid'],
        $key['book_title'],
        $key['author'],
        $key['rack'],
        $key['book_location'],
        $info_book,
        "dummi",
      ));
    }
    echo json_encode(array('data'=>$data));
  }

  //view all register testpage
  public function register_tag()
  {
    $this->template->load('admin_temp','register_tag');
  }

  //get data register card
  public function get_data_register_tag()
  {
    $data=$this->admin_model->get_all_data_register_tag_model();
    $data_array=array();
    $no=1;

    foreach ($data as $key) {
      array_push($data_array, array(
        $no++,
        $key['rfid_id'],
        $key['reg_time'],
        $key['use_for'],
        '<a class="btn btn-sm btn-primary" title="Edit" onclick="edit_book('."'".$key['id']."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
        <a class="btn btn-sm btn-danger" title="Delete" onclick="delete_book('."'".$key['id']."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>',
      ));
    }
    echo json_encode(array('data'=>$data_array));
  }

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
      'rack'=>$this->input->post('rack'),
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

  //add new book from web
  public function add_book()
  {
    $this->_validate_input();
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
      'rack'=>$this->input->post('rack'),
      'book_status'=>1,
    );
    $insert=$this->admin_model->add_new_book($data);
    echo json_encode(array('status'=>TRUE,'insert'=>$insert));
  }//eof

  // validate input

  private function _validate_input()
  {
    $data=array();
    $data['input_error']=array();
    $data['warning_error']=array();
    $data['status']=TRUE;

    if($this->input->post('id_rfid')=='')
    {
      $data['input_error'][]='id_rfid';
      $data['warning_error'][]='Please Input or Scan RFID tag';
      $data['status']=FALSE;
    }
    if($this->input->post('book_title')=='')
    {
      $data['input_error'][]='book_title';
      $data['warning_error'][]='input is required';
      $data['status']=FALSE;
    }
    if($this->input->post('author')=='')
    {
      $data['input_error'][]='author';
      $data['warning_error'][]='input is required';
      $data['status']=FALSE;
    }
    if($this->input->post('publisher')=='')
    {
      $data['input_error'][]='publisher';
      $data['warning_error'][]='input is required';
      $data['status']=FALSE;
    }
    if($this->input->post('editor')=='')
    {
      $data['input_error'][]='editor';
      $data['warning_error'][]='please input editor';
      $data['status']=FALSE;
    }
    if($this->input->post('year')=='')
    {
      $data['input_error'][]='year';
      $data['warning_error'][]='plese input year';
      $data['status']=FALSE;
    }
    // if($this->input->post('description')=='')
    // {
    //   $data['input_error'][]='';
    //   $data['warning_error'][]='';
    //   $data['status']=FALSE;
    // }
    if($this->input->post('input_date')=='')
    {
      $data['input_error'][]='input_date';
      $data['warning_error'][]='this input required';
      $data['status']=FALSE;
    }
    if($this->input->post('price')=='')
    {
      $data['input_error'][]='price';
      $data['warning_error'][]='please input the price';
      $data['status']=FALSE;
    }
    // if($this->input->post('id_supplier')=='')
    // {
    //   $data['input_error'][]='';
    //   $data['warning_error'][]='';
    //   $data['status']=FALSE;
    // }
    if($this->input->post('rack')=='')
    {
      $data['input_error'][]='rack';
      $data['warning_error'][]='please input the place of book';
      $data['status']=FALSE;
    }
    if($data['status']===FALSE)
    {
      echo json_encode($data);
      exit();
    }



  }

// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
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

//add member
  public function add_new_member()
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
    //print_r($data);
    $insert=$this->admin_model->save_new_member($data);
    echo json_encode(array("status" => TRUE,"insert"=>$insert));
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
    //print_r($data);
    $insert=$this->admin_model->save_update_member(array('user_id'=>$this->input->post('user_id')),$data);
    echo json_encode(array("status" => TRUE,"insert"=>$insert));
  }//eof

  //edit member
  public function edit_member($id)
  {
    $data=$this->admin_model->get_member_by_id($id);
    echo json_encode($data);
  } //eof


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

  //get value from arduino
  public function get_value_rfid($rfid)
  {
    $data=explode("_",$rfid);
    print_r($data);
    if(!empty($data[1]))
    {
      echo $data[1];
      $insert=$this->admin_model->insert_location(array("id_rfid"=>$data[0]),array('book_location'=>$data[1]));
      echo $insert;
    }
    else {
      echo "es nulll";
    }

    $file = fopen("rfid.json", "w") or die("can't open file");
    fwrite($file, '{"helpya" : "", "rfid": '.$data[0].'}');
    fclose($file);
  }
  public function reset_json()
  {
    $file = fopen("rfid.json", "w") or die("can't open file");
    fwrite($file, '{"helpya" : "Please Scan the RFID Tag and click reload value !!!", "rfid": "0"}');
    fclose($file);
  }


}//end of class
