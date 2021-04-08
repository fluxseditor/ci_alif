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
		$this->load->view('admin/admin_page',$data);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_welcome->hapus_data($where,'siswa');
		redirect(base_url('index.php/Welcome/viewrpl'));
	}
	
	function hapus1($id){
		$where = array('id' => $id);
		$this->m_welcome->hapus_data($where,'siswa');
		redirect(base_url('index.php/Welcome/viewap'));
	}
	
	function hapus2($id){
		$where = array('id' => $id);
		$this->m_welcome->hapus_data($where,'siswa');
		redirect(base_url('index.php/Welcome/viewtkj'));
	}
	
	function hapus_petugas($id){
		$where = array('id' => $id);
		$this->m_welcome->hapus_data($where,'petugas');
		redirect(base_url('index.php/Welcome/viewpetugas'));
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
 
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'nisn' => $nisn,
			'nis' => $nis,
			'alamat' => $alamat,
			'telp' => $telp
			);
		$this->m_welcome->input_data($data,'siswa');
		redirect(base_url('index.php/Welcome/viewrpl'));
	}
	
	function tambah_aksi1(){
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
 
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'nisn' => $nisn,
			'nis' => $nis,
			'alamat' => $alamat,
			'telp' => $telp
			);
		$this->m_welcome->input_data($data,'siswa');
		redirect(base_url('index.php/Welcome/viewap'));
	}
	
	function tambah_aksi2(){
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
 
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'nisn' => $nisn,
			'nis' => $nis,
			'alamat' => $alamat,
			'telp' => $telp
			);
		$this->m_welcome->input_data($data,'siswa');
		redirect(base_url('index.php/Welcome/viewtkj'));
	}
	
	function tambah_petugas(){
		$nama_petugas = $this->input->post('nama_petugas');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
 
		$data = array(
			'nama_petugas' => $nama_petugas,
			'username' => $username,
			'password' => $password,
			'level' => $level
			);
		$this->m_welcome1->input_data($data,'petugas');
		redirect(base_url('index.php/Welcome/viewpetugas'));
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
	$jurusan = $this->input->post('jurusan');
	$nisn = $this->input->post('nisn');
	$nis = $this->input->post('nis');
	$alamat = $this->input->post('alamat');
	$telp = $this->input->post('telp');
 
	$data = array(
		'nama' => $nama,
		'kelas' => $kelas,
		'jurusan' => $jurusan,
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
	
	public function beranda()
	{
		$this->load->view('admin/admin_page');
 
	}
	
	public function viewpetugas()
	{
		$data['petugas'] = $this->m_welcome1->showpetugas();
		$this->load->view('admin/data_petugas',$data);
 
	}
	
	public function viewrpl()
	{
		$data['siswa'] = $this->m_welcome->showrpl();
		$this->load->view('admin/data_rpl',$data);
 
	}
	
	public function viewap()
	{
		$data['siswa'] = $this->m_welcome->showap();
		$this->load->view('admin/data_ap',$data);
 
	}
	public function viewtkj()
	{
		$data['siswa'] = $this->m_welcome->showtkj();
		$this->load->view('admin/data_tkj',$data);
 
	}
}
?>