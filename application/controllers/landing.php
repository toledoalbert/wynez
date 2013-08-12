<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('home');
		}else{
			$this->login(null);
		}		
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

			$this->form_validation->set_rules('signupEmail', 'Email', 'required|trim|xss_clean|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('signupPassword', 'Password', 'required|md5|trim');

			$this->form_validation->set_message('is_unique', 'There is already a user registered with this email.');

			if($this->form_validation->run()){

				//generate the key
				$key = md5(uniqid());

				//load the email library
				$this->load->library('email', array('mailtype'=>'html'));
				$this->load->model('model_users');

				//send email with the link
				$this->email->from('toledoalbert@gmail.com', 'Wynez');
				$this->email->to($this->input->post('signupEmail'));
				$this->email->subject('Confirm your Wynez account');

				$message = '<p>Thank you for signing up!</p>';
				$message .= '<p><a href="'. base_url() .'landing/register_user/'.$key.'">Click here</a>to confirm your account.</p>';

				$this->email->message($message);

				if($this->model_users->add_temp_user($key)){

					if($this->email->send()){
						echo "email sent".$message."";
					}
					else{
						echo "email failed";
					}
				}else{
					echo 'user was not added to the database';
				}

				//redirect('home');
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

	public function register_user($key){

		$this->load->model('model_users');

		if($this->model_users->is_key_valid($key)){

			if($newemail = $this->model_users->add_user($key)){


				
				$data = array(

					'email' => $newemail,
					'is_logged_in' => 1

					);

				$this->session->set_userdata($data);

				redirect('home');

			}else{
				echo 'no success';
			}
		}else{
			echo 'key invalid';
		}

	}


}

?>
