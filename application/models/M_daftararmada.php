<?php
class M_daftararmada extends CI_Model{
	
	function tampil_data() {
		return $this->db->get('t_armada');
    }
}