<?php 

class M_laporanservice extends CI_Model{
	function tampil_data(){
    $this->db->select('*');
    $this->db->from('t_service');
    $this->db->join('t_armada', 't_armada.idt_armada = t_service.idt_armada');
    $this->db->order_by('idt_service', 'desc');
    return $this->db->get()->result();
    }

    function get_all_contacts() {
        $query = $this->db->query('SELECT * FROM t_service');
        return $query;
    }
} 