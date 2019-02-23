<?php
/**
 * 
 */
class Pendidikan_m extends CI_Model
{
	
	function insert_db($data) {     
		$this->db  ->insert('pendidikan', $data);
	}

	function select_db() {
	 return $this->db->query("Select * FROM pendidikan")->result();
	}  

}