<?php 

class M_laporantransaksi extends CI_Model{
	function tampil_data(){
		$tanggalAwal = date('Y-m-d 00:00:00', strtotime($this->input->post('start')));
    $tanggalAkhir = date('Y-m-d 00:00:00', strtotime($this->input->post('end')));
    $this->db->select('*');
    $this->db->where('tanggalTransaksi >=', $tanggalAwal);
    $this->db->where('tanggalTransaksi <=', $tanggalAkhir);
    $this->db->from('t_transaksi');
    return $this->db->query("SELECT * from t_transaksi, t_armada where t_transaksi.idt_armada=t_armada.idt_armada");
    $query=$this->db->get();
    return $query;
    }

}