<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Dok_m');
	}

	public function index()
	{
		$data['jurnal'] = $this->Dok_m->getNew(3);
		$this->load->view('front/home', $data);
	}

	public function jurnal()
	{
		$data['jurnal'] = $this->Dok_m->getAll();
		$this->load->view('front/jurnal', $data);
	}

	public function info($id = '')
	{
		$data['jurnal'] = $this->Dok_m->get($id);
		$data['metode'] = $this->Dok_m->getMetode($data['jurnal']['metode']);
		$this->load->view('front/info', $data);
	}

	public function cari(){
		$key = $this->input->get('key', true);
		$data['jurnal'] = $this->Dok_m->cari($key);
		$data['key'] = $key;
		$this->load->view('front/cari', $data);
	}

	public function metode()
	{
		$data['metode'] = $this->Dok_m->getAllMetode();
		if (isset($_GET['key'])) {
			$data['jurnal'] = $this->Dok_m->cariMetode($this->input->get('key', true));
			$data['metodex'] = $this->Dok_m->getMetode($_GET['key']);
		}
		$this->load->view('front/metode', $data);
	}
}
