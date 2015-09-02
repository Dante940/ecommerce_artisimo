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
		$buy1 = array('item_id'=>25, 'qty'=>2);
		$buy2 = array('item_id'=>25, 'qty'=>4);
		$cart = array($buy1);
		array_push($cart, $buy2);
		foreach($cart as $item){
			echo "item: ".$item['item_id']."with quantity: ".$item['qty'];
		}
		die();
		$cart = array('items'=>[25,26], 'qty'=>[2,1]);
		$this->load->view('shopping_cart', $cart);
	}
}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */