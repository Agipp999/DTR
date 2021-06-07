<?php 

class M_superservice extends CI_Model{
	function tampil_data(){
		$tanggalAwal = date('Y-m-d 00:00:00', strtotime($this->input->post('start')));
    $tanggalAkhir = date('Y-m-d 00:00:00', strtotime($this->input->post('end')));
    $this->db->select('*');
    $this->db->where('tanggalService >=', $tanggalAwal);
    $this->db->where('tanggalService <=', $tanggalAkhir);
    $this->db->from('t_service');
    $query=$this->db->get();
    return $query;
    }

}