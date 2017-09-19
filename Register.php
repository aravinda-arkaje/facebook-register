<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __controll() {
		parent::__controll();
		$this->load->model('Register_model');
	}

	public function index()
	{
		$this->load->view('facebook');
	}

	public function storedetails()
	{
		$this->load->model('Register_model');
		$firstname = $this->input->post('firstname');
		$surname = $this->input->post('surname');
		$email = $this->input->post('email');

		$password = $this->input->post('password');
		$hash = md5($password);

		$day = $this->input->post('day');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$gender = $this->input->post('gender');
		$data = array
		(
			'firstname' => $firstname,
			'surname' => $surname,
			'email' => $email,
			'password' => $hash,
			'day' => $day,
			'month' => $month,
			'year' => $year,
			'gender' => $gender	
		);

		$this->Register_model->process($data);

		redirect('register_success',$data);
	}

}

?>