<?php 

class M_laporantransaksi extends CI_Model{
	function tampil_data(){
        $this->db->select('*');
        $this->db->from('t_transaksi');
        $this->db->join('t_penyewa', 't_penyewa.idt_penyewa = t_transaksi.idt_penyewa');
        $this->db->join('t_armada', 't_armada.idt_armada = t_transaksi.idt_armada');
        $this->db->join('t_pegawai', 't_pegawai.idt_pegawai = t_transaksi.idt_pegawai');
        $this->db->order_by('idt_transaksi', 'desc');
        return $this->db->get()->result();
        $query=$this->db->get();
        return $query;
    }
    function get_all_contacts() {
        $query = $this->db->query('SELECT * FROM t_transaksi');
        return $query;
    }

}