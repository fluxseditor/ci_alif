<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap extends ci_alif {

	function index()
	{
		$this->load->view('Welcome_message');
	}

}
?>