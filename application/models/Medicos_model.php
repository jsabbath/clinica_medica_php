<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Medicos_model extends CI_Model
{
    var $id;
    var $nome;
    var $dataNascimento;
    var $cpf;
    var $email;
    var $telefone;
    var $login;
    var $senha;
    var $crm;
    var $disponibilidade;
    var $especialidade;
    var $endereco;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function insert()
    {
        $this->db->insert("medicos", $this);
    }
    
    public function delete()
    {
        $this->db->where("id", $this->id);
        $this->db->delete("medicos");
    }
    
    public function load_by_id()
    {
    	$sql = "select * from medicos where id=?";
    	$query = $this->db->query($sql, array($this->id_usuario));
        return $query->row(0, "Medicos_model");
    }
    
    public function update()
	{
		$this->db->where("id", $this->id);
		$this->db->update("medicos", $this);
		return $this->db->trans_status();
	}
}

?>