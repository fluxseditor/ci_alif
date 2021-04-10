<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
 
	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_welcome");
        $this->load->model("m_welcome1");
        $this->load->model('Spp');
        $this->load->library('form_validation');
    }
 
	public function index()
	{
		$data['graph'] = $this->Spp->graph();
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
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'nisn' => $nisn,
			'nis' => $nis,
			'alamat' => $alamat,
			'telp' => $telp,
			'level' => "siswa"
			);
		$this->m_welcome->input_data($data,'siswa');
		redirect(base_url('index.php/Welcome/viewrpl'));
	}
	
	function tambah_aksi1(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'nisn' => $nisn,
			'nis' => $nis,
			'alamat' => $alamat,
			'telp' => $telp,
			'level' => "siswa"
			);
		$this->m_welcome->input_data($data,'siswa');
		redirect(base_url('index.php/Welcome/viewap'));
	}
	
	function tambah_aksi2(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$nisn = $this->input->post('nisn');
		$nis = $this->input->post('nis');
		$alamat = $this->input->post('alamat');
		$telp = $this->input->post('telp');
 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'kelas' => $kelas,
			'jurusan' => $jurusan,
			'nisn' => $nisn,
			'nis' => $nis,
			'alamat' => $alamat,
			'telp' => $telp,
			'level' => "siswa"
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

	function edit_petugas($id){
		$where = array('id' => $id);
		$data['petugas'] = $this->m_welcome1->edit_data($where,'petugas')->result();
		$this->load->view('admin/v_editpetugas',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$kelas = $this->input->post('kelas');
	$jurusan = $this->input->post('jurusan');
	$nisn = $this->input->post('nisn');
	$nis = $this->input->post('nis');
	$alamat = $this->input->post('alamat');
	$telp = $this->input->post('telp');
 
	$data = array(
		'nama' => $nama,
		'email' => $email,
		'password' => $password,
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

	function update_petugas(){
	$id = $this->input->post('id');
	$nama_petugas = $this->input->post('nama_petugas');
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$level = $this->input->post('level');
 
	$data = array(
		'nama_petugas' => $nama_petugas,
		'email' => $email,
		'password' => $password,
		'level' => $level
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_welcome1->update_data($where,$data,'petugas');
	redirect('welcome/viewpetugas');
	}
	
	
	public function viewpetugas()
	{
		$data['petugas'] = $this->m_welcome1->showpetugas();
		$this->load->view('admin/data_petugas',$data);
 
	}
	
	public function viewrpl()
	{
		$data['siswa'] = $this->m_welcome->getAllRpl();
		$this->load->view('admin/data_rpl',$data);
 
	}
	
	public function viewap()
	{
		$data['siswa'] = $this->m_welcome->getAllAp();
		$this->load->view('admin/data_ap',$data);
 
	}
	public function viewtkj()
	{
		$data['siswa'] = $this->m_welcome->getAllTkj();
		$this->load->view('admin/data_tkj',$data);
 
	}


	public function viewXii1()
	{
		$data['siswa'] = $this->m_welcome->getAllXiiRpl();
		$this->load->view('admin/data_rpl',$data);
 
	}
	public function viewXi1()
	{
		$data['siswa'] = $this->m_welcome->getAllXiRpl();
		$this->load->view('admin/data_rpl',$data);
 
	}
	public function viewX1()
	{
		$data['siswa'] = $this->m_welcome->getAllXRpl();
		$this->load->view('admin/data_rpl',$data);
 
	}

	public function viewXii2()
	{
		$data['siswa'] = $this->m_welcome->getAllXiiAp();
		$this->load->view('admin/data_ap',$data);
 
	}
	public function viewXi2()
	{
		$data['siswa'] = $this->m_welcome->getAllXiAp();
		$this->load->view('admin/data_ap',$data);
 
	}
	public function viewX2()
	{
		$data['siswa'] = $this->m_welcome->getAllXAp();
		$this->load->view('admin/data_ap',$data);
 
	}

	public function viewXii3()
	{
		$data['siswa'] = $this->m_welcome->getAllXiiTkj();
		$this->load->view('admin/data_tkj',$data);
 
	}
	public function viewXi3()
	{
		$data['siswa'] = $this->m_welcome->getAllXiTkj();
		$this->load->view('admin/data_tkj',$data);
 
	}
	public function viewX3()
	{
		$data['siswa'] = $this->m_welcome->getAllXTkj();
		$this->load->view('admin/data_tkj',$data);
 
	}
	
	public function viewhistory()
	{
	$this->load->view('admin/history_pembayaran');
	}
	public function viewpembayaran()
	{
	$this->load->view('admin/data_pembayaran');
	}
	public function viewSpp()
	{
	$this->load->view('publik/tampilan_petugas');
	}
}
?>