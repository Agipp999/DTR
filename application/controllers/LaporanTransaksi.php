<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanTransaksi extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_laporantransaksi');
				$this->load->model('M_datatransaksi');
				$this->load->model('M_dataarmada');
				$this->load->model('M_penyewa');
				$this->load->model('M_pegawai');
                $this->load->helper('url');
				$this->load->helper('tgl_indo');
        }
	public function index()	{
		if($this->session->userdata('akses')=='1'){
		$data['query'] = $this->M_laporantransaksi->tampil_data();
			$data['t_transaksi'] = $this->M_laporantransaksi->tampil_data();

			$this->load->view('header', $data);
			$this->load->view('admin/laporantransaksi', $data);
			$this->load->view('footer', $data);
	    }elseif($this->session->userdata('akses')=='2'){
			$data['query'] = $this->M_laporantransaksi->tampil_data();
			$data['t_transaksi'] = $this->M_laporantransaksi->tampil_data();

			$this->load->view('header_super', $data);
			$this->load->view('admin/laporantransaksi', $data);
			$this->load->view('footer_super', $data);
		} else
		{
			echo "Halaman Tidak ditemukan";
		}
		}		
	public function get_all_data()
	{
		 $data['result'] = $this->model->get_data(); // 
		$this->load->view('admin/laporantransaksi',$data); //past the data to the view
	}

}
