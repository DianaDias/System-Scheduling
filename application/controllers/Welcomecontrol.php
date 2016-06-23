<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcomecontrol extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
		//$this->novo();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
