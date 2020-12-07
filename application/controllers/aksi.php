<?php
defined('BASEPATH') or exit('No direct script access allowed');

class aksi extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function tampil_pegawai(){
		$d['nama_depan'] = $this->session->userdata('nama_depan');
		$d['title'] = "Halaman kelola pegawai";
		$d['judul'] = "";
		
		$this->load->view('pemilik/pegawai', $d);
	}


	public function tampil_monitoring(){
		$d['nama_depan'] = $this->session->userdata('nama_depan');
		$d['title'] = "";
		$d['judul'] = "";
		
		$this->load->view('pemilik/monitoring', $d);
	}		

	public function tampil_laporan(){
		$d['nama_depan'] = $this->session->userdata('nama_depan');
		$d['title'] = "";
		$d['judul'] = "";
		
		$this->load->view('pemilik/laporan', $d);
	}	
}
