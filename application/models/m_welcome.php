<?php 
 
class m_welcome extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
}