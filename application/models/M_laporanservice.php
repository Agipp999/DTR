<?php 

class M_laporanservice extends CI_Model{
	function tampil_data(){
    
		$tanggalAwal = date('d-m-y 00:00:00', strtotime($this->input->post('start')));
    $tanggalAkhir = date('d-m-y 00:00:00', strtotime($this->input->post('end')));
    $this->db->select('*');
    $this->db->where('tanggalService >=', $tanggalAwal);
    $this->db->where('tanggalService <=', $tanggalAkhir);
    $this->db->from('t_service');
    return $this->db->query("SELECT * from t_service, t_armada where t_service.idt_armada=t_armada.idt_armada");
    $query=$this->db->get();
    return $query;
    }

} 