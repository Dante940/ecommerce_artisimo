<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }
	public function main_page(){
		$this->load->view('main');
	}

	public function load_header(){
		$this->load->view('partials/header');
	}

	public function cart()
	{
		$this->load->view('shopping_cart');
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */