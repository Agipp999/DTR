<?php
class M_homepage extends CI_Model{
	
	function tampil_data() {
		return $this->db->get('t_armada');
    }
}