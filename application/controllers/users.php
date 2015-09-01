<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index() {
		$this->load->view('loginpage');
	}
	public function login_user() {
		if($this->user->login_user($this->input->post())){
			redirect('/addmerch');
		} else {
			redirect('/');
		}
	}
	public function register_user() {
		// $this->load->model('user');
		$this->user->register_user($this->input->post());
		redirect('/');
	}
	public function logoff_user() {
		$this->session->sess_destroy();
		redirect('/');
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */