<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merchandise extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function add()
	{
		$cats = $this->product->get_all_cats();
		$this->load->view('add_item', array("cats" => $cats));
	}

	public function create_item()
	{
		$this->item->create($this->input->post());
		redirect('/addmerch');
	}

	public function edit()
	{
		$cats = $this->product->get_all_cats();
		$item_id = 20;
		$this->load->view('edit_item', array("cats" => $cats, "item_id" => $item_id));
	}

	public function edit_item()
	{
		$this->item->edit($this->input->post());
		redirect('/main');
	}
}


/* Location: ./application/controllers/welcome.php */