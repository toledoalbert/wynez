<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function index()
	{
		
		$this->login();
		
	}

	public function login(){

		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function signup_validation(){

		//redirect('home');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

		if($this->form_validation->run()){
			redirect('home');
		}
		else{
			$this->login();
		}
	}

	public function login_validation(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

		if($this->form_validation->run()){
			redirect('home');
		}
		else{
			$this->login();
		}
	}


}
