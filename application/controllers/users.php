<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

<<<<<<< HEAD
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }
=======
>>>>>>> 4c5455b5515499e1535c2816dd088487c5390e7c
	public function index() {
		// This function was causing the site to redirect to login page despite
		// routing changes
		if($this->session->userdata('id')){
			$this->load->view('main');
		}
		else{
		$this->load->view('loginpage');
		}
	}
	public function login_user() {
		if($this->user->login_user($this->input->post())){
			// redirect('/addmerch');
			// $this->index->main_page();

			$this->load->view('main');
		} 
		else {
			redirect('/');
		}
	}
	public function register_user() {
		// $this->load->model('user');
		$this->user->register_user($this->input->post());
		redirect('/');
	}
	public function logout_user() {
		$this->session->sess_destroy();
		redirect('/');
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */