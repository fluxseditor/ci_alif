<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
 
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_welcome");
        $this->load->model("m_welcome1");
        $this->load->model("m_welcome2");
        $this->load->library('form_validation');
    }
 
	public function index()
	{
		$data['siswa'] = $this->m_welcome->getAll();
		$this->load->view('admin/data_rpl',$data);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_welcome->hapus_data($where,'siswa');
		redirect('Welcome/index');
	}
	function hapus_petugas($id){
		$where = array('id' => $id);
		$this->m_welcome->hapus_data($where,'petugas');
		redirect('Welcome');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
 
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'nisn' => $nisn,
			'nis' => $nis,
			'alamat' => $alamat,
			'telp' => $telp
			);
		$this->m_welcome->input_data($data,'siswa');
		redirect('Welcome/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['siswa'] = $this->m_welcome->edit_data($where,'siswa')->result();
		$this->load->view('admin/v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$kelas = $this->input->post('kelas');
	$nisn = $this->input->post('nisn');
	$nis = $this->input->post('nis');
	$alamat = $this->input->post('alamat');
	$telp = $this->input->post('telp');
 
	$data = array(
		'nama' => $nama,
		'kelas' => $kelas,
		'nisn' => $nisn,
		'nis' => $nis,
		'alamat' => $alamat,
		'telp' => $telp
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_welcome->update_data($where,$data,'siswa');
	redirect('welcome/index');
}
 
}
?>