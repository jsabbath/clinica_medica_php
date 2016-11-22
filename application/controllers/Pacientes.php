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
        $this->paciente->email = $this->input->post('email', TRUE);
        $this->paciente->senha = md5($this->input->post('senha', TRUE));
        if(!$this->paciente->check_login())
        {
            $this->session->set_flashdata("error","Verifique suas infromações de login!");
            redirect(base_url(), 'refresh');
        }
        $paciente = $this->paciente->load_obj_login();
        $this->session->set_userdata('paciente_id', $paciente->id);
        $this->session->set_userdata('paciente_nome', $paciente->nome);
        $this->session->set_userdata('paciente_email', $paciente->email);
        redirect(base_url(), 'refresh');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        echo "Saindo...";
        redirect(base_url(), 'refresh');
    }
        
}   




