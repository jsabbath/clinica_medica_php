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
	
	public function load_available_doctors($espec)
	{
	    $this->db->select("*,m.id m_id,m.nome m_nome,e.nome e_nome");
	    $this->db->from("medicos m");
	    $this->db->join("especialidades e","m.especialidade = e.id");
	    if($espec)
	    {
	        $this->db->like('e.nome', $espec);
	    }
	    $query = $this->db->get();
	    return $query->result();
	}
	
	public function check_login()
	{
	    $this->db->from("medicos");
	    $this->db->where("email", $this->email);
	    $this->db->where("senha", $this->senha);
	    $query = $this->db->get();
	    if($query->num_rows() == 1)
	        return true;
	    return false;
	}
	
	public function load_obj_login()
    {
        $sql = "select * from medicos where email=? and senha=?";
    	$query = $this->db->query($sql, array($this->email, $this->senha));
        return $query->row(0, "Medicos_model");
    }
	
}

?>