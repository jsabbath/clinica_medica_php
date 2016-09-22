<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pacientes extends CI_Controller 
{

    var $data;

    public function __construct()
    {
        parent::__construct();
    }

     public function login()
    {
        $this->load->model("Pacientes_model","paciente");
        $this->paciente->login = $this->input->post('login', TRUE);
        $this->paciente->senha = md5($this->input->post('senha', TRUE));
        if(!$this->paciente->check_login())
        {
            redirect(base_url(), 'refresh');
        }
        $paciente = $this->paciente->load_obj_login();
        $this->session->set_userdata('paciente_id', $paciente->id);
        $this->session->set_userdata('paciente_nome', $paciente->nome);
        $this->session->set_userdata('paciente_login', $paciente->login);
        $this->session->set_userdata('paciente_email', $paciente->email);
        var_dump($this->session); exit;
        redirect(base_url(), 'refresh');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        echo "Saindo...";
        redirect(base_url(), 'refresh');
    }
        
}   




