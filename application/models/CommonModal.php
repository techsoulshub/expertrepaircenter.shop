<?php
class CommonModal extends CI_Model
{
	public function getRowById($table, $column, $id)
	{
		$get = $this->db->select()
			->from($table)
			->where($column, $id)
			->get();
		if ($get->num_rows() > 0) {
			return $get->result_array();
		} else {
			return false;
		}
	}
	public function fetch_city($table, $where, $city)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return false;
		}
	}
}
