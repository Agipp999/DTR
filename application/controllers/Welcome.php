<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_datatransaksi');		
		$this->load->model('M_datasopir');		
		$this->load->model('M_dataarmada');
		$this->load->helper('url');
}
	public function index()
	{
		if($this->session->userdata('akses')=='1'){
			
		$data['jumlahTransaksi'] = $this->M_datatransaksi->hitung();
		$data['jumlahSopir'] = $this->M_datasopir->hitung();
		$data['jumlahArmada'] = $this->M_dataarmada->hitung();
		$this->load->view('header');
		$this->load->view('master', $data);
		$this->load->view('footer');	
	} else{
		echo "Halaman Tidak ditemukan";
}

}
}