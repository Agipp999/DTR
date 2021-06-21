<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeSuperAdmin extends CI_Controller {


	function __construct(){
		parent::__construct();		
		$this->load->model('M_datatransaksi');
		$this->load->model('M_pegawai');
		$this->load->helper('url');
}
	public function index()
	{
		if($this->session->userdata('akses')=='2'){
		
		$data['jumlahTransaksi'] = $this->M_datatransaksi->hitung();
		$data['jumlahPegawai'] = $this->M_pegawai->hitung();
			$this->load->view('header_super');
            $this->load->view('master_super', $data);
            $this->load->view('footer_super');
        
	} else{
		echo "Halaman Tidak ditemukan";
}

}
}