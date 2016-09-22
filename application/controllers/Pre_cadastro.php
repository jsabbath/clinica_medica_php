<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pre_cadastro extends CI_Controller 
{

    var $data;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function form()
    {
        $this->load->view('med-system/precadastro/pre_cadastro', $this->data);
    }
}   