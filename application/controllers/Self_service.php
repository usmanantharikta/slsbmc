<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Self_service extends CI_Controller{

	function __construct()
	{
		parent::__construct();

		$this->load->model(array('Front_model','Admin_model'));
		
	}
	
	public function index(){

		$this->load->view('ss_home_view');
		
	}

	public function borrow(){

		$this->load->view('ss_borrow_view');
		
	}

	public function return_book(){
		$this->load->view('ss_return_view');
	}
public function get_borrow($user_id){
		$data=$this->Front_model->get_borrow($user_id);
            print_r($data);

		if($data!=false){
			foreach ($data as $key) {
				echo ' <tr>
			              <td>'.$key['book_title'].'</td>
			              <td>'.$key['author'].'</td>
			              <td>'.$key['isbn'].'</td>
			              <td>'.$key['return_date'].'</td>
			            </tr>';
			}
		} else{
			echo "No data";
		}
}
		public function insert_return(){
		$user_id = $this->input->post('user_id');
		$books = $this->input->post('books');
		$date_issue = $this->input->post('date_issue');

		 foreach ($books as $book) {
			$data = array(
			'user_id' => $user_id,
			'book_id' => $book,
			'actual_date' => $date_issue,
			);

			$this->Front_model->insert_return($data);
		 }
		//print_r($this->input->post('books'));
		
	}

	public function insert_borrow(){

		$user_id = $this->input->post('user_id');
		$books = $this->input->post('books');
		$date_issue = $this->input->post('date_issue');

		foreach ($books as $book) {
			$data = array(
			'user_id' => $user_id,
			'book_id' => $book,
			'issue_date' => $date_issue,
			'return_date' => date('Y-m-d', strtotime($date_issue. ' + 14 days'))
			);
			$this->Front_model->insert_borrow($data);
		}
		
	}

	public function add_book($book_id){
		$data=$this->Front_model->get_book_data_by_rfid($book_id);
		echo ' <tr> 	
              <td>2 <input id="book" type="hidden" name="books[]" value="'.$data[0]['book_id'].'" multiple>
              </td>
              <td>'.$data[0]['book_title'].'</td>
              <td>'.$data[0]['author'].'</td>
              <td>-</td>
              <td>'.$data[0]['isbn'].'</td>
            </tr>';
	}

	public function get_user_data_by_rfid($rfid){
		$data = $this->Front_model->get_user_data_by_rfid($rfid);
	// print_r($data );
		echo json_encode($data);
	}

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

	  //get value from arduino
  public function get_value_rfid_book($rfid)
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

    $file = fopen("rfidbook.json", "w") or die("can't open file");
    fwrite($file, '{"helpya" : "", "rfid": '.$data[0].'}');
    fclose($file);
  }
  public function reset_json_book()
  {
    $file = fopen("rfidbook.json", "w") or die("can't open file");
    fwrite($file, '{"helpya" : "Please Scan the RFID Tag and click reload value !!!", "rfid": "0"}');
    fclose($file);
  }
 public function reset_json()
  {
    $file = fopen("rfid.json", "w") or die("can't open file");
    fwrite($file, '{"helpya" : "Please Scan the RFID Tag and click reload value !!!", "rfid": "0"}');
    fclose($file);
  }

	
}