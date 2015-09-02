<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class See_products extends CI_Controller {

		public function index()
	{
		$allproducts= $this->category->get_all_products();
		$cats = $this->category->get_all_cats();
		$this->load->view('see_products', array('allproducts' => $allproducts, 'cats' => $cats));
	}

	public function getsomeproducts()
	{
		// var_dump($this->input->post());
		$selected_categories = "";
		$counter = count($this->input->post());
		foreach($this->input->post() as $category => $status){
				   --$counter;
    			if (!$counter)
    			{
    			$selected_categories .= $category;
    			}
				else if($status == "on"){
				$selected_categories .= $category .="' OR '";
			}
		}
				$allproducts= $this->category->get_some_products($selected_categories);
				$cats = $this->category->get_all_cats();
				$this->load->view('see_products', array('allproducts' => $allproducts, 'cats' => $cats));

			}
				
		}
		// $allproducts= $this->category->get_some_products($this->input->post());
		// $this->load->view('/partials/productviewpartial', array('allproducts' => $allproducts));