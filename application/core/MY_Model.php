<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

    protected $em; 

    public function __construct()
    {
        parent::__construct();

        // uncomment this line if not using CI auto load feature
        //$this->load->library('doctrine');
        
        $this->em = $this->doctrine->entityManager;
    }
}
