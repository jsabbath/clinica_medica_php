<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Secretarios_model extends CI_Model
{
    var $id;
    var $nome;
    var $dataNascimento;
    var $cpf;
    var $email;
    var $telefone;
    var $login;
    var $senha;
    var $salario;
    var $funcao;
    var $endereco;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function insert()
    {
        $this->db->insert("secretarios", $this);
    }
    
    public function delete()
    {
        $this->db->where("id", $this->id);
        $this->db->delete("secretarios");
    }
    
    public function load_by_id()
    {
    	$sql = "select * from secretarios where id=?";
    	$query = $this->db->query($sql, array($this->id_usuario));
        return $query->row(0, "Secretarios_model");
    }
    
    public function update()
	{
		$this->db->where("id", $this->id);
		$this->db->update("secretarios", $this);
		return $this->db->trans_status();
	}
}

?>