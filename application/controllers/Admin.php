<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			$this->session->sess_destroy();
			redirect('login');
		}
		$this->load->model('Dok_m');
	}

	public function index()
	{
		$this->load->view('admin/home');
	}

	public function jurnal()
	{
		$data['jurnal'] = $this->Dok_m->getAll();
		$this->load->view('admin/jurnal', $data);
	}

	public function tambah()
	{
		$data['metode'] = $this->Dok_m->getAllMetode();
		$this->load->view('admin/tambah', $data);
	}

	public function add_jurnal()
	{
		$cek = $this->Dok_m->insert();
		if ($cek == 0) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Gagal</h4> File jurnal tidak valid. Tolong periksa kembali file anda</div>');
		}
		else{
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sukses</h4> Jurnal berhasil ditambahkan</div>');
		}
		redirect('admin/jurnal');
	}

	public function edit_jurnal()
	{
		$cek = $this->Dok_m->update();
		if ($cek == 0) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Gagal</h4> File jurnal tidak valid. Tolong periksa kembali file anda</div>');
		}
		else{
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sukses</h4> Perubahan berhasil tersimpan</div>');
		}
		redirect('admin/info/'.$this->input->post('idx'));
	}

	public function info($id = '')
	{	
		$data['jurnal'] = $this->Dok_m->get($id);
		$data['metode'] = $this->Dok_m->getAllMetode();
		$this->load->view('admin/info', $data);
	}

	public function hapus($id = '')
	{
		$this->Dok_m->delete($id);
		$this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sukses</h4> Jurnal berhasil dihapus.</div>');
		redirect('admin/jurnal');
	}

	public function pengaturan()
	{
		$this->load->view('admin/setting');
	}

	public function ubah_pass()
	{
		$pl = $this->input->post('pl', true);
		$pb = $this->input->post('pb', true);

		$user = $this->db->get_where('user', ['id' => $this->session->userdata('id_user')])->row_array();

		if (password_verify($pl, $user['password'])) {
			$pass = password_hash($pb, PASSWORD_DEFAULT);
			$data = [
				"password" => $pass,
				"true_pass" => $pb
			];
			$this->db->where('id', $this->session->userdata('id_user'));
			$this->db->update('user', $data);
			$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sukses</h4> Password diubah</div>');
		}
		else{
			$this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Gagal</h4> Password lama salah</div>');
		}
		redirect('admin/pengaturan');
	}

	public function metode()
	{
		$data['metode'] = $this->Dok_m->getAllMetode();
		$this->load->view('admin/metode', $data);
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect('menu');
	}

}
