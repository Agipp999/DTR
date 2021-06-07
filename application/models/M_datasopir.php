<?php 

class M_datasopir extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('t_sopir');
    }
    function tambah_data(){
		$data = array(
			'namaSopir' => $this->input->post('namaSopir'),
			'alamat' => $this->input->post('alamat'),
			'noTelfon' => $this->input->post('noTelfon'),
		);
	$this->db->insert('t_sopir', $data);
	redirect('../DataSopir');	
	}
	
	function ubah_data ($idt_sopir){
		$data = array(
			'namaSopir' => $this->input->post('namaSopir'),
			'alamat' => $this->input->post('alamat'),
			'noTelfon' => $this->input->post('noTelfon'),
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