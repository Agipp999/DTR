<?php 

class M_datatransaksi extends CI_Model{

	function tampil_data()
	{
        $this->db->select('*');
        $this->db->from('t_transaksi');
        $this->db->join('t_penyewa', 't_penyewa.idt_penyewa = t_transaksi.idt_penyewa');
        $this->db->join('t_armada', 't_armada.idt_armada = t_transaksi.idt_armada');
        $this->db->join('t_pegawai', 't_pegawai.idt_pegawai = t_transaksi.idt_pegawai');
        $this->db->order_by('idt_transaksi', 'desc');
        return $this->db->get()->result();
    // $this->db->select('*');

    // return $this->db->get('t_transaksi');
    }

    function tambah_data(){

        $data = array(
            'idt_armada' => $this->input->post('idt_armada'),
            'idt_penyewa' => $this->input->post('idt_penyewa'),
            'idt_pegawai' => $this->input->post('idt_pegawai'),
            'tanggalTransaksi' => $this->input->post('tanggalTransaksi'),
            'selesaiSewa' => $this->input->post('selesaiSewa'),
            'totalHarga' => $this->input->post('totalHarga'),
            'statusPembayaran' => $this->input->post('statusPembayaran'),
            'keteranganSewa' => $this->input->post('keteranganSewa'),
            'perjalanan' => $this->input->post('perjalanan'),
        );
	$this->db->insert('t_transaksi', $data);
	redirect('../DataTransaksi');	
    }
    
    function ubah_data ($idt_transaksi) {
 
		$data = array(
            'idt_armada' => $this->input->post('idt_armada'),
            'idt_penyewa' => $this->input->post('idt_penyewa'),
            'idt_pegawai' => $this->input->post('idt_pegawai'),
            'tanggalTransaksi' => $this->input->post('tanggalTransaksi'),
            'selesaiSewa' => $this->input->post('selesaiSewa'),
            'totalHarga' => $this->input->post('totalHarga'),
            'statusPembayaran' => $this->input->post('statusPembayaran'),
            'keteranganSewa' => $this->input->post('keteranganSewa'),
            'perjalanan' => $this->input->post('perjalanan'),
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