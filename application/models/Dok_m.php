<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dok_m extends CI_Model {

	public function cari($key){
		$this->db->like('judul', $key);
		$this->db->or_like('author', $key);
		$this->db->order_by('tgl', 'DESC');
		$gas = $this->db->get('jurnal');
		return $gas->result_array();
	}

	public function getAll(){
		$this->db->order_by('tgl', 'DESC');
		$gas = $this->db->get('jurnal');
		return $gas->result_array();
	}

	public function getNew($limit){
		$this->db->order_by('tgl', 'DESC');
		$this->db->limit($limit);
		$gas = $this->db->get('jurnal');
		return $gas->result_array();
	}

	public function get($id){
		$this->db->where('id', $id);
		return $this->db->get('jurnal')->row_array();
	}

	public function insert(){
		$nama = $_FILES['dok']['name'];
		$jalur = 'komponen/file/'; // Jalur Gambar
		$config['upload_path']   = './'.$jalur;
		$config['allowed_types'] = 'pdf|PDF';
		$config['max_size']      = 20000;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		$config['file_name']     = 'jurnal_'.date("Y-m-d").'_'.rand(100,10000);
		
		$x = explode('.', $nama);
	   	$ekstensi = strtolower(end($x));
	   	
		$this->load->library('upload', $config);
 
		if (!$this->upload->do_upload('dok')){
			return 0;
			// $errors = $this->upload->display_errors();
			// var_dump($errors);
			// die();
		}else{
			$data = [
				"judul" => $this->input->post('judul', true),
				"author" => $this->input->post('author', true),
				"abstrak" => $this->input->post('abstrak', true),
				"tgl" => date("Y-m-d"),
				"file" => $jalur.$config['file_name'].'.'.$ekstensi
		    ];
			$this->db->insert('jurnal', $data);
			return 1;
		}
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('jurnal');
	}

	public function update(){
		$nama = $_FILES['dok']['name'];
		if (empty($nama)) {
			$data = [
				"judul" => $this->input->post('judul', true),
				"author" => $this->input->post('author', true),
				"abstrak" => $this->input->post('abstrak', true)
		    ];
		    $this->db->where('id', $this->input->post('idx', true));
			$this->db->update('jurnal', $data);
			return 1;
		}
		else{
			$jalur = 'komponen/file/'; // Jalur Gambar
			$config['upload_path']   = './'.$jalur;
			$config['allowed_types'] = 'pdf|PDF';
			$config['max_size']      = 20000;
			$config['max_width']     = 0;
			$config['max_height']    = 0;
			$config['file_name']     = 'jurnal_'.date("Y-m-d").'_'.rand(100,10000);
			
			$x = explode('.', $nama);
		   	$ekstensi = strtolower(end($x));
		   	
			$this->load->library('upload', $config);
	 
			if (!$this->upload->do_upload('dok')){
				return 0;
				// $errors = $this->upload->display_errors();
				// var_dump($errors);
				// die();
			}else{
				$data = [
					"judul" => $this->input->post('judul', true),
					"author" => $this->input->post('author', true),
					"abstrak" => $this->input->post('abstrak', true),
					"tgl" => date("Y-m-d"),
					"file" => $jalur.$config['file_name'].'.'.$ekstensi
			    ];
				$this->db->where('id', $this->input->post('idx', true));
				$this->db->update('jurnal', $data);
				return 1;
			}
		}
		
	}

}