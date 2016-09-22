<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consultas_model extends CI_Model
{
    var $id;
    var $paciente;
    var $medico;
    var $diagnostico;
    var $valor;
    var $pago;
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function insert()
    {
        $this->db->insert("consultas", $this);
    }
    
    public function delete()
    {
        $this->db->where("id", $this->id);
        $this->db->delete("consultas");
    }
    
    public function load_by_id()
    {
    	$sql = "select * from consultas where id=?";
    	$query = $this->db->query($sql, array($this->id_usuario));
        return $query->row(0, "Consultas_model");
    }
    
    public function update()
	{
		$this->db->where("id", $this->id);
		$this->db->update("consultas", $this);
		return $this->db->trans_status();
	}
}

?>