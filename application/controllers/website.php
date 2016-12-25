<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function sejarah()
	{
		$this->load->view('profile/sejarah');
	}

	public function visi_misi()
	{
		$this->load->view('profile/visi-misi');
	}

	public function fasilitas()
	{
		$this->load->view('profile/fasilitas');
	}

	public function lokasi()
	{
		$this->load->view('profile/lokasi');
	}
	public function struktur_organisasi()
	{
		$this->load->view('profile/struktur-organisasi');
	}
	public function yayasan()
	{
		$this->load->view('profile/pengurus-yayasan');
	}
	public function prodis()
	{
		$this->load->view('prodi/prodi');
	}
	public function s1_keperawatan()
	{
		$this->load->view('prodi/s1-keperawatan');
	}
	public function ners()
	{
		$this->load->view('prodi/profesi-ners');
	}
	public function analis()
	{
		$this->load->view('prodi/d3-analis');
	}
	public function biaya()
	{
		$this->load->view('biaya');
	}
	public function praktek()
	{
		$this->load->view('lahan/lahan-praktek');
	}
	public function lahan_kerja()
	{
		$this->load->view('lahan/lahan-kerja');
	}	
	public function info_kampus()
	{
		$this->load->view('akademika/info-kampus');
	}
	public function calendar_academic()
	{
		$this->load->view('akademika/kalendar');
	}
	public function senat()
	{
		$this->load->view('akademika/senat');
	}

	public function karyawan()
	{
		$this->load->view('akademika/karyawan');
	}
	public function alumni()
	{
		$this->load->view('akademika/alumni');
	}
	public function research()
	{
		$this->load->view('akademika/research');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function pmb()
	{
		$this->load->view('sistem/pmb');
	}
	public function gallery()
	{
		$this->load->view('gallery/index-gallery');
	}
	public function gal_wisuda()
	{
		$this->load->view('gallery/gallery-wisuda');
	}
	public function perpus()
	{
		$this->load->view('sistem/perpus');
	}
}
