<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	$this->output->enable_profiler();
	// }
	public function index() {
		$product = $this->product->get_product_info();
		$this->load->view("product_view", array("product" => $product));
	}
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */