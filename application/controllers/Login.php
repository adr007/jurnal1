<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/index');
	}

	public function auth(){
		$user = $this->input->post('username', true);
		$pass = $this->input->post('password', true);
		$user = $this->db->get_where('user', ['username' => $user])->row_array();
		if ($user) {
			if (password_verify($pass, $user['password'])) {
				$user_data = array(
					'id_user' => $user['id'],
					'nama_user' => $user['nama'],
					'email_user' => $user['email']
				);
				$this->session->set_userdata($user_data);
				redirect('admin/');
			}
			else{
				$this->session->set_flashdata('gagal', '<div class="alert alert-danger col-12"> <i class="ti-alert"></i> Password salah <button type="button" class="close" data-dismiss="alert"> X </button></div>');
				redirect('login');
			}
		}
		else{
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger col-12"> <i class="ti-alert"></i> Username tidak terdaftar <button type="button" class="close" data-dismiss="alert"> X </button></div>');
			redirect('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
