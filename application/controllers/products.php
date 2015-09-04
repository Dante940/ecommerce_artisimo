<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		// if (!isset($page_num)){
		// 	$page_num = 1;
		// }

		// $page_num = 1
		$allproducts= $this->product->get_all_products();
		$cats = $this->product->get_all_cats();

		// $page_num = 1;

		$this->load->view('shop_main', array('allproducts' => $allproducts, 'cats' => $cats));
		// product_page($page_num);
	}

	public function product_page($page_num){
		// var_dump($page_num);
		// die();
		$allproducts= $this->product->get_all_products();
		$cats = $this->product->get_all_cats();
		if($page_num<1){
			$page_num = 1;
		}
		$this->load->view('shop_main', array('allproducts' => $allproducts, 'cats' => $cats, 'page_num' => $page_num));
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
			$allproducts= $this->product->get_all_products();
		$this->load->view("product_view", array("product" => $product, "images" => $images, 'allproducts' => $allproducts));
	}
		public function searchproducts()
	{
		$search = $this->input->post()['search'];
		$allproducts = $this->product->search($search);
		$cats = $this->product->get_all_cats();
		$this->load->view('shop_main', array('allproducts' => $allproducts, 'cats' => $cats));

	}

}
		// $allproducts= $this->category->get_some_products($this->input->post());
		// $this->load->view('/partials/productviewpartial', array('allproducts' => $allproducts));