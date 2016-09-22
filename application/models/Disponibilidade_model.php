<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disponibilidade_model extends CI_Model
{
    var $id;
    var $segunda;
    var $terca;
    var $quarta;
    var $quinta;
    var $sexta;
    var $sabado;
    var $domingo;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function insert()
    {
        $this->db->insert("disponibilidade", $this);
    }
    
    public function delete()
    {
        $this->db->where("id", $this->id);
        $this->db->delete("disponibilidade");
    }
    
    public function load_by_id()
    {
    	$sql = "select * from disponibilidade where id=?";
    	$query = $this->db->query($sql, array($this->id_usuario));
        return $query->row(0, "Disponibilidade_model");
    }
    
    public function update()
	{
		$this->db->where("id", $this->id);
		$this->db->update("disponibilidade", $this);
		return $this->db->trans_status();
	}
}

?>