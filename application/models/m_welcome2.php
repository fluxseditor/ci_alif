<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_welcome2 extends CI_Model
{
    private $table = "kelas";
 
    public function getAll()
    {
        return $this->db->get($this->table)->result();
	}
	
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}
 
}