<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{

		$userdata = $this->session->all_userdata();

		if($this->session->userdata('is_logged_in')){
			$this->load->view('home', $userdata);
		}
		else{
			redirect('landing');
		}
		
	}

}
