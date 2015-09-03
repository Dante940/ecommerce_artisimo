<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$allproducts= $this->product->get_all_products();
		$cats = $this->product->get_all_cats();
		$this->load->view('shop_main', array('allproducts' => $allproducts, 'cats' => $cats));
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
			else if($status == "on")
			{
				$selected_categories .= $category .="' OR '";
			}
		}
		$allproducts= $this->product->get_some_products($selected_categories);
		$cats = $this->product->get_all_cats();
		$this->load->view('shop_main', array('allproducts' => $allproducts, 'cats' => $cats));
	}
	public function show_product_info($item_id)
	{
		$product = $this->product->get_product_info($item_id);
		$images = $this->product->get_product_img($item_id);
		$this->load->view("product_view", array("product" => $product, "images" => $images));
	}

}
		// $allproducts= $this->category->get_some_products($this->input->post());
		// $this->load->view('/partials/productviewpartial', array('allproducts' => $allproducts));