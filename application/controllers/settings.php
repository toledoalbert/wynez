<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index(){

		$userdata = $this->session->all_userdata();

		$this->load->view('settings', $userdata);		
		
	}


}