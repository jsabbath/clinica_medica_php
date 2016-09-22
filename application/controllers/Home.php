<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{

    var $data;

    public function __construct() {

        parent::__construct();
        
    }

     public function index()
    {
        $this->load->view('med-system/home/home', $this->data);
    }
        
}   




