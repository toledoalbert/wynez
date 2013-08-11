<?php class MY_Form_validation extends CI_Form_validation {

	public function __construct()
	{
		parent::__construct();

		$this->_error_prefix = '<div  class=" text-center alert alert-error"><button type="button" class="close" data-dismiss="alert">x</button>';
		$this->_error_suffix = '</div>';
	}
}

?>