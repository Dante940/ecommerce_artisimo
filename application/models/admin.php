<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

	public function get_orders(){
		$query = "SELECT * FROM orders;";
		return $this->db->query($query)->result_array();
	}
				

}
// 19
/* End of file login.php */
/* Location: ./application/controllers/login.php */