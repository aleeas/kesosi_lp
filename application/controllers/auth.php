<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('sistem/sisfo');
	}

	public function checklogin(){
		$datalogin = array(
			'usernim'=>$this->input->post('usernim'),
			'password'=>$this->input->post('password')
			);
		$result = $this->Model->checklogin($datalogin);
		if($result){
			if($result->lvl == '1')
			{
				$this->adminpanel();
			}
			elseif($result->lvl =='2')
			{
				$this->userpanel();
			}
			else
			{
				$this->financepanel();
			}
		}else{
			echo "<script>alert('Not found')</script>";
		}
	}

	public function userpanel(){
		$this->load->view('mahasiswa/dashboard');
	}

	public function adminpanel(){
		$this->load->view('admin/dashboard');
	}

	public function financepanel(){
		$this->load->view('finance/dashboard');
	}
}
