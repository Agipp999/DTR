<?php 

class M_API extends CI_Model{
	function tampil_transaksi($idt_armada)
	{
		$this->db->select('*');
        $this->db->from('t_transaksi');
        $this->db->join('t_armada', 't_armada.idt_armada = t_transaksi.idt_armada');
		$this->db->where(array('t_transaksi.idt_armada' => $idt_armada));
        return $this->db->get()->last_row();
	}
	
	function tambah_track(){
		date_default_timezone_set("Asia/Bangkok");
		$latitude = $this->input->post("latitude");
		$longitude = $this->input->post("longitude");
		$idt_armada = $this->input->post("idt_armada");

		$transaksi = $this->tampil_transaksi($idt_armada);

		$data = array(
			'idt_transaksi' => $transaksi->idt_transaksi,
			'idt_armada' => $idt_armada,
			'latitude' => $latitude,
			'longitude' => $longitude,
			'waktu' => date("Y-m-d H:i:s")
		);
		$query = $this->db->insert('t_track', $data);
		$response = array();
		if($query){
			$response = array('kode' => 1, 'pesan' => 'Simpan Data Berhasil');
		}else{
			$response = array('kode' => 0, 'pesan' => 'Gagal menyimpan data!');
		}

		return $response; 
	}
}