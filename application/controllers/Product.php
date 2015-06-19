<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function index()
	{
		$productRepository = $this->em->getRepository('Entities\Product');
		$products = $productRepository->findAll();

		foreach($products as $product)
		{
			echo sprintf("- %s<br />", $product->getName());
		}
	}
}
