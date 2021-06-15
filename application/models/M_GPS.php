<?php 

class M_GPS extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('t_user');
		}
		
	public function get_all_data(){
		$this->db->select('*');
		$this->db->from('t_user');
		return $this->db->get();
	}
}