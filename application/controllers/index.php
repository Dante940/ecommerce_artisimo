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

	public function admin_page(){
		$this->load->view('admin');
	}

	public function cart()
	{
		// $item = $this->item->get_item_info(25);
		// $buy1 = array('item_id'=>$item['id'], 'name'=>$item['name'], 'price'=>$item['price'], 'qty'=>2);
		// if(!$this->session->userdata('cart')){
		// 	$test = array($buy1);
		// 	$this->session->set_userdata('cart',$test);
		// }
		// $cart = $this->session->userdata('cart');
		// $item = $this->item->get_item_info(26);
		// $buy2 = array('item_id'=>$item['id'], 'name'=>$item['name'], 'price'=>$item['price'], 'qty'=>4);
		// array_push($cart, $buy2);
		// $this->session->set_userdata('cart',$cart);
		$session_cart = $this->session->userdata('cart');
		// $cart = $this->order->get_cart_display();
		// foreach($cart as $item){
		// 	echo "<p>item: ".$item['item_id']." with quantity: ".$item['qty']."</p>";
		// }
		$this->load->view('shopping_cart', array('cart'=>$session_cart));
	}

	public function test_admin(){
		for($i = 29; $i<129; $i++){
			$query = "INSERT INTO categories_has_merchandise (category_id, merchandise_id, created_at, updated_at) 
			VALUES (?, ?, NOW(), NOW());";
			$values = array(1, $i);
			$this->db->query($query, $values);
		}
	}


}

/* End of file logins.php */
/* Location: ./application/controllers/logins.php */