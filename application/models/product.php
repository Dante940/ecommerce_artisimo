<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function get_product_info() {
		$query = "SELECT * FROM merchandise WHERE id = 6";
		$product = $this->db->query($query)->row_array();
		return $this->db->query($query)->row_array();
	}
}

/* End of file product.php */
/* Location: ./application/controllers/product.php */