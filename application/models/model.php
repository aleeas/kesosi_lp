<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model extends CI_Model
{

	private $table_pmb = 'pmb';

	public function __construct()
	{
		parent::__construct();
	}

	public function checklogin($data)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where($data);
			$query = $this->db->get();
			if(count($query->num_rows()) > 0)
				{
					return $query->row();
				}
	}

	public function create_pmb($data)
	{
		$this->db->insert('pmb',$data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getlist_pmb()
	{
		$this->db->order_by('id','asc');
		$this->db->select('*');
		$this->db->from('pmb');
		$query = $this->db->get();
		return $query;
	}

	public function detail_pmb($id)
	{
		$this->db->order_by('id','asc');
		$this->db->select('*');
		$this->db->from('pmb');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}

}
?>