<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();

		$this->load->model(array('Front_model','Admin_model'));
		
	}
	
	public function index(){

		$data['book_data']=$this->Front_model->get_book_data();
		$data['book_count']=sizeof($data['book_data']);
		$data['category']=$this->Front_model->get_category_item();
		//$data['book_title']=$book_data['book_title'];
		$this->load->view('home_view.php',$data);
	}

	public function self_service(){
		$this->load->view('ss_home_view');
	}


	
}