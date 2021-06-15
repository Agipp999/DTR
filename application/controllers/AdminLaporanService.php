<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLaporanService extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_superservice');
                $this->load->helper('url');
        }
	public function index(){
		if($this->session->userdata('akses')=='2'){
		$data['query'] = $this->M_superservice->tampil_data();
			$data['t_laporanservice'] = $this->M_superservice->tampil_data();

			$this->load->view('header_super', $data);
			$this->load->view('superadmin/laporanservice', $data);
			$this->load->view('footer_super', $data);
		}else{
			echo "Halaman Tidak ditemukan";
	}
		}
		
	public function get_all_data()
	{
		 $data['result'] = $this->model->get_data(); // 
		$this->load->view('superadmin/laporanservice',$data); //past the data to the view
	}
			
			
			//$this->load->view('master/viewlaporanpembelisayur', $data);
	

}
