<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class All_model extends CI_Model {
	public function getAllData($table)
	{
		return $this->db->get($table);
	}

	public function getDataByCondition($table,$condition)
	{
		$this->db->where($condition);
		return $this->db->get($table);
	}

	public function insertData($table,$data){
		return $this->db->insert($table, $data);
	}

	public function updateData($table, $condition, $data){
		$this->db->where($condition);
		return $this->db->update($table, $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */