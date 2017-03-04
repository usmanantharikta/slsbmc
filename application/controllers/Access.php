<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('access_model');
		$this->load->library('session');
		$this->base = $this->config->item('base_url');
	}
	public function login()
	{
	  $data = array(
	    'email'=>$this->input->post('email', true),
	    'date'=>date("Y-m-d H:i:s"),
	  );

		// hash('sha256',$this->input->post('password', true));
		$this->_autentication();
		$email=$this->input->post('email', true);
		//$insert = $this->access_model->datalog($data);
	  echo json_encode(array("status" => TRUE));
	}

	private function _autentication()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		$data['flag']=array();
		$data['flag1']=array();


				$password=hash('sha256',$this->input->post('password',true));
				$email=$this->input->post('email', true);
				if($this->access_model->cek_mail($email)!=1) {
					$data['inputerror'][] = 'email';
					$data['error_string'][] = 'Email Salah';
					$data['status'] = FALSE;
					$data['flag']=$this->access_model->cek_mail($email);
				}
				if($this->access_model->cek_pass($email, $password)!=1) {
					$data['inputerror'][] = 'password';
					$data['error_string'][] = 'Password salah';
					$data['status'] = FALSE;
					$data['flag1']=$this->access_model->cek_pass($email, $password);
				}

				if($data['status'] === FALSE)
				{
					echo json_encode($data);
					exit();
				}

	}

	function logout(){
			$this->load->library('session');
			$this->session->set_userdata('user',"");
			$this->session->set_userdata('level',"");
			$this->session->sess_destroy();
			redirect(site_url('admin'), 'refresh');
	}


	public function signup()
	{
		$this->_validate();
		$data = array(
				'firstname' => $this->input->post('firstName'),
				'lastname' => $this->input->post('lastName'),
				'email'=>$this->input->post('email-signup'),
				'password'=>hash('sha256',$this->input->post('password-signup',true)),
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'avatar'=>"avatar.png",
			);
		$insert = $this->access_model->save_signup($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('firstName') == '')
		{
			$data['inputerror'][] = 'firstName';
			$data['error_string'][] = 'First name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('lastName') == '')
		{
			$data['inputerror'][] = 'lastName';
			$data['error_string'][] = 'Last name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('dob') == '')
		{
			// $data['inputerror'][] = 'dob';
			$data['error_string'][] = 'Date of Birth is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('gender') == '')
		{
			// $data['inputerror'][] = 'gender';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
		}

		if($this->input->post('email-signup') == '')
		{
			$data['inputerror'][] = 'email-signup';
			$data['error_string'][] = 'Email is required';
			$data['status'] = FALSE;
		}
		if($this->input->post('password-signup') == '')
		{
			$data['inputerror'][] = 'password-signup';
			$data['error_string'][] = 'Password is required';
			$data['status'] = FALSE;
		}
		if($this->input->post('repeat-password-signup') == '')
		{
			$data['inputerror'][] = 'repeat-password-signup';
			$data['error_string'][] = 'Password is required';
			$data['status'] = FALSE;
		}
		if($this->input->post('repeat-password-signup') != $this->input->post('password-signup'))
		{
			$data['inputerror'][] = 'repeat-password-signup';
			$data['error_string'][] = 'Password is not same';
			$data['status'] = FALSE;
		}

		$email=$this->input->post('email-signup', true);
		if($this->access_model->cek_mail($email)==1) {
			$data['inputerror'][] = 'email-signup';
			$data['error_string'][] = 'Email is alredy use';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
