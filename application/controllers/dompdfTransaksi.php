<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DompdfTransaksi extends CI_Controller {

	function __construct() {
		parent::__construct();			
		$this->load->model('M_login');		
		$this->load->model('M_laporantransaksi');
		$this->load->helper('url');
	}
	
    public function index()
	{
	
        $data['query'] = $this->M_laporantransaksi->tampil_data();
 
	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'landscape');
	    $this->pdf->filename = "Laporan-Transaksi.pdf";
		$this->pdf->load_view('admin/laptransaksiPdf', $data);
	
	}
	
}