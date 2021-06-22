<?php

class M_dataarmada extends CI_Model
{
	function tampil_data()
	{
		return $this->db->get('t_armada');
	}
	function tambah_data($filename)
	{
		$data = array(
			'namaArmada' => $this->input->post('namaArmada'),
			'noKendaraan' => $this->input->post('noKendaraan'),
			'tahunKendaraan' => $this->input->post('tahunKendaraan'),
			'kapasitasSeat' => $this->input->post('kapasitasSeat'),
			'statusKendaraan' => $this->input->post('statusKendaraan'),
            'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
			'gambar' =>  $filename
		);
		$this->db->insert('t_armada', $data);
		redirect('../DataArmada');
	}

	function ubah_data($idt_armada, $file_name, $data)
	{

		$data = array(
			'namaArmada' => $this->input->post('namaArmada'),
			'noKendaraan' => $this->input->post('noKendaraan'),
			'tahunKendaraan' => $this->input->post('tahunKendaraan'),
			'kapasitasSeat' => $this->input->post('kapasitasSeat'),
			'statusKendaraan' => $this->input->post('statusKendaraan'),
            'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
			'gambar' => $file_name
		); 

		$this->db->where(array('idt_armada' => $idt_armada));
		$this->db->update('t_armada', $data);
		redirect('../DataArmada');
	}

	function hapus_data($idt_armada)
	{
		$this->db->where(array('idt_armada' => $idt_armada));
		$this->db->delete('t_armada');
		redirect('../DataArmada');
	}
	function hitung () {
        return $this->db->count_all_results('t_armada');
    }
}
