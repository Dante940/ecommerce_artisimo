<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Model {

	public function create($post) {
		// Create new item
		$query = "INSERT INTO merchandise (name, description, price, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW());";
		$values = array($post['name'], $post['description'], $post['price']);
		$this->db->query($query, $values);
		// Save row id of item just created
		$item_id = $this->db->insert_id();
		// Create new category if input != null
		if($post['new_category'] != ""){
			$query2 = "INSERT INTO categories (name, created_at, updated_at) VALUES (?, NOW(), NOW());";
			$values2 = array($post['new_category']);
			$this->db->query($query2, $values2);
		// Save row id of category just created
			$cat_id = $this->db->insert_id();
		// Link newly created category to item
			$query3 = "INSERT INTO categories_has_merchandise (category_id, merchandise_id) VALUES (?, ?);";
			$values3 = array($cat_id, $item_id);
			$this->db->query($query3, $values3);
		}
		else{
			$query4 = "INSERT INTO categories_has_merchandise (category_id, merchandise_id, created_at, updated_at) VALUES (?, ?, NOW(), NOW());";
			$values4 = array($post['category'], $item_id);
			$this->db->query($query4, $values4);
		}
		

		
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */