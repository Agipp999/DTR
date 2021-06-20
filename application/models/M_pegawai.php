<?php 

class M_pegawai extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('t_pegawai');
    }
   function tambah_data() {

		$data = array(
		    'namaPegawai' => $this->input->post('namaPegawai'),
            'alamatPegawai' => $this->input->post('alamatPegawai'),
            'noTelfon' => $this->input->post('noTelfon'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			'jenisKaryawan' => $this->input->post('jenisKaryawan'),
			);
		$this->db->insert('t_pegawai', $data);
		redirect('../DataPegawai');
    }

    function ubah_data ($idt_pegawai) {
 
		$data = array(
            'namaPegawai' => $this->input->post('namaPegawai'),
            'alamatPegawai' => $this->input->post('alamatPegawai'),
            'noTelfon' => $this->input->post('noTelfon'),
			'jenisKelamin' => $this->input->post('jenisKelamin'),
			'jenisKaryawan' => $this->input->post('jenisKaryawan'),
			);

		$this->db->where(array('idt_pegawai' => $idt_pegawai ));
		$this->db->update('t_pegawai', $data);
		redirect('../DataPegawai');
	}
	
	function hapus_data ($idt_pegawai) {
		$this->db->where(array('idt_pegawai' => $idt_pegawai));
		$this->db->delete('t_pegawai');
		redirect('../DataPegawai');
		}
		function hitung () {
			return $this->db->count_all_results('t_pegawai');
	}
}
