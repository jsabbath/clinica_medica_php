<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pacientes_model extends CI_Model
{
    var $id;
    var $nome;
    var $dataNascimento;
    var $cpf;
    var $email;
    var $telefone;
    var $login;
    var $senha;
    var $endereco;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function insert()
    {
        $this->db->insert("pacientes", $this);
    }
    
    public function delete()
    {
        $this->db->where("id", $this->id);
        $this->db->delete("pacientes");
    }
    
    public function load_by_id()
    {
    	$sql = "select * from pacientes where id=?";
    	$query = $this->db->query($sql, array($this->id_usuario));
        return $query->row(0, "Pacientes_model");
    }
    
    public function load_obj_login()
    {
        $sql = "select * from pacientes where email=? and senha=?";
    	$query = $this->db->query($sql, array($this->email, $this->senha));
        return $query->row(0, "Pacientes_model");
    }
    
    public function update()
	{
		$this->db->where("id", $this->id);
		$this->db->update("pacientes", $this);
		return $this->db->trans_status();
	}
	
	public function check_login()
	{
	    $this->db->from("pacientes");
	    $this->db->where("login", $this->login);
	    $this->db->where("senha", $this->senha);
	    $query = $this->db->get();
	    if($query->num_rows() == 1)
	        return true;
	    return false;
	}
}

?>