<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper('form');
		$this->load->model('model','model');
	}

	public function jadwal()
	{
		$this->load->view('admin/jadwal-kuliah');
	}

	public function nilai()
	{
		$this->load->view('admin/nilai');
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

	public function mhs_detail()
	{	
		$this->load->view('admin/detail-mhs');
	}

	public function maba()
	{
		$data['listdata'] = $this->model->getlist_pmb();
		$this->load->view('admin/maba', $data);
	}

	public function mabadetail()
	{	
		$id_pmb = $this->uri->segment(3);
		$data['detail'] = $this->model->detail_pmb($id_pmb);
		$this->load->view('admin/detail-maba', $data);
	}

	public function addSchedule()
	{
		$this->load->view('admin/tambah-jadwal');
	}
}
