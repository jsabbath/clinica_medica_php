<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pre_cadastro_model extends CI_Model
{
    var $id;
    var $nome;
    var $dataNascimento;
    var $cpf;
    var $email;
    var $telefone;
    var $endereco;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function insert()
    {
        $this->db->insert("pre_cadastro", $this);
    }
    
    public function delete()
    {
        $this->db->where("id", $this->id);
        $this->db->delete("pre_cadastro");
    }
    
    public function load_by_id()
    {
    	$sql = "select * from pre_cadastro where id=?";
    	$query = $this->db->query($sql, array($this->id_usuario));
        return $query->row(0, "Pre_cadastro_model");
    }
    
    public function update()
	{
		$this->db->where("id", $this->id);
		$this->db->update("pre_cadastro", $this);
		return $this->db->trans_status();
	}
}

?>