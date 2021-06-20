<?php 

class M_penyewa extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('t_penyewa');
    }
   function tambah_data() {

		$data = array(
		    'namaPenyewa' => $this->input->post('namaPenyewa'),
            'alamatPenyewa' => $this->input->post('alamatPenyewa'),
            'noTelfon' => $this->input->post('noTelfon'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			);
		$this->db->insert('t_penyewa', $data);
		redirect('../DataPenyewa');
    }

    function ubah_data ($idt_penyewa) {
 
		$data = array(
            'namaPenyewa' => $this->input->post('namaPenyewa'),
            'alamatPenyewa' => $this->input->post('alamatPenyewa'),
            'noTelfon' => $this->input->post('noTelfon'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			);

		$this->db->where(array('idt_penyewa' => $idt_penyewa ));
		$this->db->update('t_penyewa', $data);
		redirect('../DataPenyewa');
	}
	
	function hapus_data ($idt_penyewa) {
		$this->db->where(array('idt_penyewa' => $idt_penyewa));
		$this->db->delete('t_penyewa');
		redirect('../DataPenyewa');
		}
		function hitung () {
			return $this->db->count_all_results('t_penyewa');
	}
}
