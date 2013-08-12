<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function index()
	{
		
		$this->login(null);
		
	}

	public function login($data){

		$this->load->view('head');
		$this->load->view('navbar', $data);
		$this->load->view('login', $data);
		$this->load->view('footer');
	}

	public function signup_validation(){

		$this->load->library('form_validation');

		if ($this->input->post('signupEmail') | $this->input->post('signupPassword')){

			$this->form_validation->set_rules('signupEmail', 'Email', 'required|trim|xss_clean');
			$this->form_validation->set_rules('signupPassword', 'Password', 'required|md5|trim');

			if($this->form_validation->run()){
				redirect('home');
			}
			else{
				$data['signupErrors'] = validation_errors();
				$this->login($data);
			}
		}
		else{
			redirect('landing');
		}

	}


	public function login_validation(){

		$this->load->library('form_validation');
		echo $this->input->post('submit');
		if ($this->input->post('loginEmail') | $this->input->post('loginPassword')){

			$this->form_validation->set_rules('loginEmail', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
			$this->form_validation->set_rules('loginPassword', 'Password', 'required|md5|trim');

			if($this->form_validation->run()){
				$data = array(

					'email' => $this->input->post('loginEmail'),
					'is_logged_in' => 1

					);
				$this->session->set_userdata($data);
				redirect('home');
			}
			else{
				$data['loginErrors'] = validation_errors();
				$this->login($data);
			}
		}
		else{
			redirect('landing');
		}
	}

	public function validate_credentials(){
		$this->load->model('model_users');

		if($this->model_users->can_log_in()){
			return true;
		}
		else{
			$this->form_validation->set_message('validate_credentials', 'Incorrect email/password.');
			return false;
		}
	}


}
