<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function krs()
	{
		$this->load->view('mahasiswa/krs');
	}

	public function khs()
	{
		$this->load->view('mahasiswa/khs');
	}
}
