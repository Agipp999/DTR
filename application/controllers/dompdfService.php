<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DompdfService extends CI_Controller {
    function __construct() {
		parent::__construct();			
		$this->load->model('M_login');		
		$this->load->model('M_laporanservice');
		$this->load->helper('url');
		$this->load->helper('tgl_indo');
	}
	
    public function index()
	{
		
        $data['query'] = $this->M_laporanservice->tampil_data();
 
	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'landscape');
	    $this->pdf->filename = "Laporan-Service.pdf";
		$this->pdf->load_view('admin/lapservicePdf', $data);
		
	}
	
}