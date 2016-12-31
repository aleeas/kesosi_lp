<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper('form');
		$this->load->model('model','model');
	}

	public function keuangan()
	{
		$this->load->view('finance/keuangan');
	}
}
