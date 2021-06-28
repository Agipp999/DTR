<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanService extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_laporanservice');
				$this->load->model('M_serviceberkala');
				$this->load->model('M_dataarmada');
                $this->load->helper('url');
				$this->load->helper('tgl_indo');
        }
	public function index()	{
		if($this->session->userdata('akses')=='1'){
		$data['query'] = $this->M_laporanservice->tampil_data();
			$data['t_service'] = $this->M_laporanservice->tampil_data();

			$this->load->view('header', $data);
			$this->load->view('admin/laporanservice', $data);
			$this->load->view('footer', $data);
	    }elseif($this->session->userdata('akses')=='2'){
			$data['query'] = $this->M_laporanservice->tampil_data();
			$data['t_service'] = $this->M_laporanservice->tampil_data();

			$this->load->view('header_super', $data);
			$this->load->view('superadmin/laporanservice', $data);
			$this->load->view('footer_super', $data);
		}else
		{
			echo "Halaman Tidak ditemukan";
		}
		}		
	public function get_all_data()
	{
		 $data['result'] = $this->model->get_data(); // 
		$this->load->view('admin/laporanservice',$data); //past the data to the view
	}
	

}
