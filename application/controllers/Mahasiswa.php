<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function krs()
	{
		$this->load->view('mahasiswa/krs');
	}
	public function krs_info()
	{
		$this->load->view('mahasiswa/krs-info');
	}
	public function print_krs()
	{
		$this->load->view('mahasiswa/print-krs');
	}
	public function print_khs()
	{
		$this->load->view('mahasiswa/print-khs');
	}
	public function krs_confirm()
	{
		$this->load->view('mahasiswa/krs-confirm');
	}
	public function mhs_detail()
	{
		$this->load->view('mahasiswa/detail-mhs');
	}
	public function khs()
	{
		$this->load->view('mahasiswa/khs');
	}
}
