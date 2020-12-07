<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_grafik');
	}

	public function index(){
		$d['title'] = 'Halaman Utama Pemilik';
		$d['judul'] = '';
		$d['nama_depan'] = $this->session->userdata('nama_depan');
		$d['data']=$this->m_grafik->get_data_stok();
		$d['rata']=$this->m_grafik->get_rata();
        $this->load->view('layout');
		$this->load->view('pemilik/dashboard', $d);
		
	}
	public function grafik(){

        $this->load->view('pemilik/data-grafik');
		
	}


}
