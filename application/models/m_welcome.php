<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_welcome extends CI_Model
{
    private $table = "siswa";
 
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

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function getAllRpl(){
	$query = $this->db->get_where('siswa', array('jurusan' => 'RPL'));
	return $query->result();
	}
	function getAllXiiRpl(){
	$query = $this->db->get_where('siswa', array('kelas' => 'XII', 'jurusan' => 'RPL'));
	return $query->result();
	}
	function getAllXiRpl(){
	$query = $this->db->get_where('siswa', array('kelas' => 'XI', 'jurusan' => 'RPL'));
	return $query->result();
	}
	function getAllXRpl(){
	$query = $this->db->get_where('siswa', array('kelas' => 'X', 'jurusan' => 'RPL'));
	return $query->result();
	}


	function getAllAp(){
	$query = $this->db->get_where('siswa', array('jurusan' => 'AP'));
	return $query->result();
	}
	function getAllXiiAp(){
	$query = $this->db->get_where('siswa', array('kelas' => 'XII', 'jurusan' => 'AP'));
	return $query->result();
	}
	function getAllXiAp(){
	$query = $this->db->get_where('siswa', array('kelas' => 'XI', 'jurusan' => 'AP'));
	return $query->result();
	}
	function getAllXAp(){
	$query = $this->db->get_where('siswa', array('kelas' => 'X', 'jurusan' => 'AP'));
	return $query->result();
	}


	function getAllTkj(){
	$query = $this->db->get_where('siswa', array('jurusan' => 'TKJ'));
	return $query->result();
	}
	function getAllXiiTkj(){
	$query = $this->db->get_where('siswa', array('kelas' => 'XII', 'jurusan' => 'TKJ'));
	return $query->result();
	}
	function getAllXiTkj(){
	$query = $this->db->get_where('siswa', array('kelas' => 'XI', 'jurusan' => 'TKJ'));
	return $query->result();
	}
	function getAllXTkj(){
	$query = $this->db->get_where('siswa', array('kelas' => 'X', 'jurusan' => 'TKJ'));
	return $query->result();
	}

 
}