<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function login_user($post) {
		// find user in db
		// VALIDATION
		$this->form_validation->set_rules("email", "Email Address", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		// END VALIDATION RULES
		if($this->form_validation->run() === FALSE) {
		     $this->session->set_flashdata("errors", validation_errors());
		     return FALSE;
		} else {
			$query = "SELECT * FROM users WHERE email = ? AND password = ?";
			$values = array($post['email'], $post['password']);
			$user = $this->db->query($query, $values)->row_array();
			if(empty($user)) {
				$this->session->set_flashdata("errors", "Email or password you entered is invalid.");
				return FALSE;
			} else {
				$this->session->set_userdata('id', $user['id']);
				return TRUE;
			}
		}
	}
	public function register_user($post) {
		// var_dump($post);
		// die();
		// add user to db
		// VALIDATION
		// $this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|alpha");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|alpha");
		$this->form_validation->set_rules("email", "Email Address", "trim|required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");
		$this->form_validation->set_rules("password_confirm", "Confirm Password", "trim|required|matches[password]");
		// END VALIDATION RULES
		if($this->form_validation->run() === FALSE) {
		     $this->session->set_flashdata("errors", validation_errors());
		} else {
			$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
			$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password']);
			$this->db->query($query, $values);
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */