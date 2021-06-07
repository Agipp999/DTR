<?php 

class M_datatransaksi extends CI_Model{

	function tampil_data()
	{
        return $this->db->query("SELECT * from t_transaksi, t_armada where t_transaksi.idt_armada=t_armada.idt_armada");
    // $this->db->select('*');

    // return $this->db->get('t_transaksi');
    }

    function tambah_data(){

        $data = array(
            'tanggalTransaksi' => $this->input->post('tanggalTransaksi'),
            'namaPenyewa' => $this->input->post('namaPenyewa'),
            'lamaSewa' => $this->input->post('lamaSewa'),
            'totalHarga' => $this->input->post('totalHarga'),
            'statusPembayaran' => $this->input->post('statusPembayaran'),
            'keteranganSewa' => $this->input->post('keteranganSewa'),
            'alamatPenyewa' => $this->input->post('alamatPenyewa'),
            'telponPenyewa' => $this->input->post('telponPenyewa'),
            'idt_armada' => $this->input->post('idt_armada'),
            'idt_armada' => $this->input->post('idt_armada'),
        );
	$this->db->insert('t_transaksi', $data);
	redirect('../DataTransaksi');	
    }
    
    function ubah_data ($idt_transaksi) {
 
		$data = array(
                 
            'tanggalTransaksi' => $this->input->post('tanggalTransaksi'),
            'namaPenyewa' => $this->input->post('namaPenyewa'),
            'lamaSewa' => $this->input->post('lamaSewa'),
            'totalHarga' => $this->input->post('totalHarga'),
            'statusPembayaran' => $this->input->post('statusPembayaran'),
            'keteranganSewa' => $this->input->post('keteranganSewa'),
            'alamatPenyewa' => $this->input->post('alamatPenyewa'),
            'telponPenyewa' => $this->input->post('telponPenyewa'),
            'idt_armada' => $this->input->post('idt_armada'),
            'idt_armada' => $this->input->post('idt_armada'),
			);

		$this->db->where(array('idt_transaksi' => $idt_transaksi ));
		$this->db->update('t_transaksi', $data);
		redirect('../DataTransaksi');
    }
	
    function hapus_data ($idt_transaksi) {
      $this->db->where(array('idt_transaksi' => $idt_transaksi));
      $this->db->delete('t_transaksi');
      redirect('../DataTransaksi');
      }

    function hitung () {
        return $this->db->count_all_results('t_transaksi');
    }
}