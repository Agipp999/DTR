<?php 

class M_datasopir extends CI_Model{
	function tampil_data()
	{
		return $this->db->query("SELECT * from t_sopir, t_pegawai where t_sopir.idt_pegawai=t_pegawai.idt_pegawai");
    }
    function tambah_data(){
		$data = array(
			'idt_pegawai' => $this->input->post('idt_pegawai'),
		);
	$this->db->insert('t_sopir', $data);
	redirect('../DataSopir');	
	}
	
	function ubah_data ($idt_sopir){
		$data = array(
			'idt_pegawai' => $this->input->post('idt_pegawai'),
		);
	$this->db->where(array('idt_sopir' => $idt_sopir));
	$this->db->update('t_sopir', $data);
	redirect('../DataSopir');
	}
	function hapus_data ($idt_sopir) {
		$this->db->where(array('idt_sopir' => $idt_sopir));
		$this->db->delete('t_sopir');
		redirect('../DataSopir');
		}
		function hitung () {			
			return $this->db->count_all_results('t_sopir');
	}
}