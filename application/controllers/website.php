<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper('form');
		$this->load->model('model','model');
	}

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
	public function create_pmb() {
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('panggilan','Project','required');
		$this->form_validation->set_rules('ktp','Nomor KTP','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('desa','Desa','required');
		$this->form_validation->set_rules('kabupaten','Kabupaten','required');
		$this->form_validation->set_rules('kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('kodepos1','Kode Pos','required');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('tempatlahir','Tempat Lahir','required');
		$this->form_validation->set_rules('kodepos2','Kode Pos','required');
		$this->form_validation->set_rules('telp','Telp Rumah','required');
		$this->form_validation->set_rules('ibukandung','Ibu Kandung','required');
		$this->form_validation->set_rules('handphone','No Handphone','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('status_kerja','Status Pekerjaan','required');
		$this->form_validation->set_rules('status_kawin','Status Perkawinan','required');
		$this->form_validation->set_rules('study_pilihan','Program Study Pilihan','required');

		if($this->form_validation->run()==FALSE){
			$data = array('status'=>FALSE,'msg'=>'Form is Incomplete',"type"=>"warning");
			echo json_encode($data);
		} else {
			$array = array(
				'id'=>"",
				'nama_lengkap'=>$this->input->post('nama'),
				'nama_panggilan'=>$this->input->post('panggilan'),
				'no_ktp'=>$this->input->post('ktp'),
				'alamat'=>$this->input->post('alamat'),
				'kelurahan'=>$this->input->post('desa'),
				'kota'=>$this->input->post('kabupaten'),
				'kecamatan'=>$this->input->post('kecamatan'),
				'kodepos_satu'=>$this->input->post('kodepos1'),
				'jenkel'=>$this->input->post('jk'),
				'agama'=>$this->input->post('agama'),
				'tempat_lahir'=>$this->input->post('tempatlahir'),
				'telp_rumah'=>$this->input->post('telp'),
				'nama_ibu'=>$this->input->post('ibukandung'),
				'no_hp'=>$this->input->post('handphone'),
				'email'=>$this->input->post('email'),
				'status_kerja'=>$this->input->post('status_kerja'),
				'nama_instansi'=>$this->input->post('perusahaan'),
				'status_kawin'=>$this->input->post('status_kawin'),
				'prog_study'=>$this->input->post('study_pilihan'),
				'ukuran_jaket'=>$this->input->post('ukuran_jaket')
				);
				$sql = $this->model->create_pmb($array);
				if($sql){
					echo json_encode(["status"=>true,"msg"=>"Cash Advance Created Success","type"=>"success"]);
				}else{
					echo json_encode(["status"=>false,"msg"=>"Cash Advance Created Failed","type"=>"error"]);
			}
			
		 }
	}
}


