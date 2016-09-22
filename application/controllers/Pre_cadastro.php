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
    
    public function save()
    {
        $this->load->model("Pre_cadastro_model","precadastro");
        $this->load->model("Enderecos_model","endereco");
        
        $this->endereco->logradouro = $this->input->post('logradouro', TRUE);
        $this->endereco->cidade = $this->input->post('cidade', TRUE);
        $this->endereco->cep = $this->input->post('cep', TRUE);
        $this->endereco->uf = $this->input->post('uf', TRUE);
        
        $this->precadastro->endereco = $this->endereco->insert();
        
        $this->precadastro->nome = $this->input->post('nome', TRUE);
        $this->precadastro->dataNascimento = $this->input->post('dataNascimento', TRUE);
        $this->precadastro->cpf = $this->input->post('cpf', TRUE);
        $this->precadastro->email = $this->input->post('email', TRUE);
        $this->precadastro->telefone = $this->input->post('telefone', TRUE);
        if($this->precadastro->insert())
        {
            redirect(base_url(), 'refresh');
        }
        echo "ERRO";
    }
}   