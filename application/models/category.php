<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {

	public function get_all_cats() {
		$query = "SELECT categories.id, categories.name FROM categories;";
		return $this->db->query($query)->result_array();	
	}
	public function get_all_products() {
		$query = "SELECT * from merchandise";
		return $this->db->query($query)->result_array();	
	}
	public function get_some_products($POST) {
		$query = "SELECT merchandise.name as name from merchandise 
left join categories_has_merchandise on merchandise.id=categories_has_merchandise.merchandise_id
left join categories on categories_has_merchandise.category_id =categories.id
where categories.name=('" . $POST . "')"
	;
		return $this->db->query($query)->result_array();	
	}
	public function product_count($INPUT) {
		$query = "SELECT merchandise.name as name from merchandise 
left join categories_has_merchandise on merchandise.id=categories_has_merchandise.merchandise_id
left join categories on categories_has_merchandise.category_id =categories.id
where categories.name='" . $INPUT . "'"
	;
		return $this->db->query($query)->result_array();	
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */