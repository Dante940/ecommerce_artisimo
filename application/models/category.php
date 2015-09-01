<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {

	public function get_all_cats() {
		$query = "SELECT categories.id, categories.name FROM categories;";
		return $this->db->query($query)->result_array();	
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */