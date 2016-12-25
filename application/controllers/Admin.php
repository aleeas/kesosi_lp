<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function jadwal()
	{
		$this->load->view('admin/jadwal-kuliah');
	}

	public function nilai()
	{
		$this->load->view('admin/nilai-mahasiswa');
	}

	public function dosen()
	{
		$this->load->view('admin/dosen');
	}

	public function matkul()
	{
		$this->load->view('admin/matakuliah');
	}

	public function keuangan()
	{
		$this->load->view('admin/keuangan');
	}

	public function mahasiswa()
	{
		$this->load->view('admin/mahasiswa');
	}

	public function maba()
	{
		$this->load->view('admin/maba');
	}
}
