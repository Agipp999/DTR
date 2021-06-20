<?php 

class M_laporantransaksi extends CI_Model{
	function tampil_data(){
    $this->db->from('t_transaksi');
    return $this->db->query("SELECT * from t_transaksi, t_armada where t_transaksi.idt_armada=t_armada.idt_armada");
    $query=$this->db->get();
    return $query;
    }

}