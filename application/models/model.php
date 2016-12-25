<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model extends CI_Model {

	
	public function checklogin($data){
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($data);
		$query = $this->db->get();
		if(count($query->num_rows()) > 0){
			return $query->row();
		}
		
	}
}
?>