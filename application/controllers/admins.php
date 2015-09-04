<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }
	public function admin_page() {
		$this->load->view('admin_main');
	}
	public function view_orders() {
		$orders = $this->admin->get_orders();
		$this->load->view('admin_orders', array("orders" => $orders));

	}
	
}
/* End of file logins.php */
/* Location: ./application/controllers/logins.php */