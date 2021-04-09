<?php
class Spp extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from spp");
		return $data->result();
	}
 
}