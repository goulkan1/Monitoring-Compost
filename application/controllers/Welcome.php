<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller{
	public function index(){
		$d['title'] = 'Login SI ';
		$this->load->view('login', $d);
	}

	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('model_login');
		$cek = $this->model_login->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id_user'] = $data->id_user;
				$sess_data['username'] = $data->username;
				$sess_data['nama_depan'] = $data->nama_depan;
				$this->session->set_userdata($sess_data);
			}

				redirect('pemilik');
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('welcome');
		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
