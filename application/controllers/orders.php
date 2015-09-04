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

	public function add_to_cart(){
		$add = $this->input->post();
		$this->order->update_cart($add);
	}

	public function cart_delete($cart_id){
		// var_dump($cart_id);
		// die();
		$this->order->remove_from_cart($cart_id);
		redirect('/shopping_cart');
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */