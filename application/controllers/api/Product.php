<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'libraries/REST_Controller.php';

class Product extends REST_Controller {
    private $em = NULL;

    function __construct()
    {
        parent::__construct();

        // uncomment this line if not using CI auto load feature
        //$this->load->library('doctrine');
        
        $this->em = $this->doctrine->entityManager;
    }

    function index_get()
    {
        $productRepository = $this->em->getRepository('Entities\Product');
        $products = [];

        if (!$this->get('id'))
        {
            $products = $productRepository->getAllProductArrays();
        }
        else 
        {
            $product = $productRepository->getProductArrayById($this->get('id'));
            if ($product) $products[] = $product;
            else $this->response(NULL, 404);
        }

        $this->response($products);
    }
}
