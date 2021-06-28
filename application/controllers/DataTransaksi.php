<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTransaksi extends CI_Controller {

	function __construct()
        {
                parent::__construct();
		$this->load->model('M_datatransaksi');
		$this->load->model('M_dataarmada');
		$this->load->model('M_penyewa');
		$this->load->model('M_pegawai');
		$this->load->helper('url');
		$this->load->helper('tgl_indo');
        }
	public function index(){
		if($this->session->userdata('akses')=='1'){
			$data['query'] = $this->M_datatransaksi->tampil_data();
			$data['t_transaksi'] = $this->M_datatransaksi->tampil_data();

				$this->load->view('header', $data);
				$this->load->view('admin/datatransaksi', $data);
				$this->load->view('footer', $data);
		}else{
			echo "Halaman Tidak ditemukan";
		}
	}
	public function add(){
		$idt_transaksi = $this->input->post('idt_transaksi');
		if(empty($idt_transaksi)){
				$this->M_datatransaksi->tambah_data();
		} else {
				$this->M_datatransaksi->ubah_data($idt_transaksi);
		}
	}

	public function delete(){
                $idt_transaksi = $this->input->post('idt_transaksi1');
                $this->M_datatransaksi->hapus_data($idt_transaksi);
        }

}
