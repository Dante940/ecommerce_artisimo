<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }
	public function checkout_order() {
		$post = $this->input->post();
		$this->order->checkout($post);
		redirect('maintest');
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */