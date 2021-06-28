<?php 

class M_GPS extends CI_Model{
	function tampil_data()
	{
		$this->db->select('*');
        $this->db->from('t_track');
        $this->db->join('t_armada', 't_armada.idt_armada = t_track.idt_armada');
        $this->db->join('t_transaksi', 't_transaksi.idt_transaksi = t_track.idt_transaksi');
        $this->db->order_by('idt_track', 'desc');
        return $this->db->get()->result();
		}
		
	public function get_all_data(){
		$this->db->select('*');
		$this->db->from('t_track');
		$this->db->join('t_armada', 't_armada.idt_armada = t_track.idt_armada');
        $this->db->join('t_transaksi', 't_transaksi.idt_transaksi = t_track.idt_transaksi');
		$this->db->order_by("idt_track", "asc");
		$query = $this->db->get();


		return $query;
	}

}