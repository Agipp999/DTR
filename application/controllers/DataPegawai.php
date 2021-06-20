<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawai extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_pegawai');
                $this->load->helper('url');
        }
	public function index(){ 
        if($this->session->userdata('akses')=='2'){
            $data['query'] = $this->M_pegawai->tampil_data();
	        $data['t_pegawai'] = $this->M_pegawai->tampil_data();

                $this->load->view('header_super', $data);
                $this->load->view('superadmin/datapegawai', $data);
                $this->load->view('footer_super', $data);
        }else{
                echo "Halaman Tidak ditemukan";
        }   
        }

	public function add(){
		$idt_pegawai = $this->input->post('idt_pegawai');
		if(empty($idt_pegawai)){
				$this->M_pegawai->tambah_data();
		} else {
				$this->M_pegawai->ubah_data($idt_pegawai);
		}
	}

	public function delete(){
                $idt_pegawai = $this->input->post('idt_pegawai1');
                $this->M_pegawai->hapus_data($idt_pegawai);
        }
	
}
