<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->view('front/home');
	}

	public function jurnal()
	{
		$this->load->view('front/jurnal');
	}

	public function info($id = '')
	{
		$this->load->view('front/home');
	}

	public function cari($key = ''){
		$this->load->view('front/home');
	}
}
