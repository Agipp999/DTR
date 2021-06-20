<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataSopir extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_datasopir');
				$this->load->model('M_pegawai');
                $this->load->helper('url');
        }
	public function index()	{
		if($this->session->userdata('akses')=='1'){
            $data['query'] = $this->M_datasopir->tampil_data();
	    	$data['t_sopir'] = $this->M_datasopir->tampil_data();
	
				$this->load->view('header', $data);
				$this->load->view('admin/datasopir', $data);
				$this->load->view('footer', $data);
		} elseif($this->session->userdata('akses')=='2'){
            $data['query'] = $this->M_datasopir->tampil_data();
	    	$data['t_sopir'] = $this->M_datasopir->tampil_data();
	
				$this->load->view('header_super', $data);
				$this->load->view('admin/datasopir', $data);
				$this->load->view('footer_super', $data);
		}else{
			echo "Halaman Tidak ditemukan";
		}   
		}
	public function add(){
		$idt_sopir = $this->input->post('idt_sopir');
		if(empty($idt_sopir)){
				$this->M_datasopir->tambah_data();
		} else {
				$this->M_datasopir->ubah_data($idt_sopir);
		}
	}
	public function delete(){
		$idt_sopir = $this->input->post('idt_sopir1');
		$this->M_datasopir->hapus_data($idt_sopir);
	}
}
