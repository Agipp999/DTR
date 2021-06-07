<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanService extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_laporanservice');
                $this->load->helper('url');
        }
	public function index()	{
		if($this->session->userdata('akses')=='1'){
		$data['query'] = $this->M_laporanservice->tampil_data();
			$data['t_laporanservice'] = $this->M_laporanservice->tampil_data();

			$this->load->view('header', $data);
			$this->load->view('admin/laporanservice', $data);
			$this->load->view('footer', $data);
	    }else{
			echo "Halaman Tidak ditemukan";
		}
		}
	public function laporan()
	{
			$tanggalAwal = $this->input->post('tanggalAwal');
			$tanggalAkhir = $this->input->post('tanggalAkhir');
			$data['t_laporanservice'] = $this->M_laporanservice->laporan('t_service', $tanggalAwal, $tanggalAkhir)->result();
			$data['tanggalAwal'] = $tanggalAwal;
			$data['tanggalAkhir'] = $tanggalAkhir;
			$this->load->library('pdf');
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "laporan-Service.pdf";
			$this->pdf->load_view('admin/serviceberkala', $data);
	}		
	public function get_all_data()
	{
		 $data['result'] = $this->model->get_data(); // 
		$this->load->view('admin/laporanservice',$data); //past the data to the view
	}
			
			
			//$this->load->view('master/viewlaporanpembelisayur', $data);
	

}
