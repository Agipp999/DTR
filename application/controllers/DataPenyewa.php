<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapenyewa extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_penyewa');
                $this->load->helper('url');
        }
	public function index(){ 
        if($this->session->userdata('akses')=='1'){
            $data['query'] = $this->M_penyewa->tampil_data();
	        $data['t_penyewa'] = $this->M_penyewa->tampil_data();

                $this->load->view('header', $data);
                $this->load->view('admin/datapenyewa', $data);
                $this->load->view('footer', $data);
        }else{
                echo "Halaman Tidak ditemukan";
        }   
        }

	public function add(){
		$idt_penyewa = $this->input->post('idt_penyewa');
		if(empty($idt_penyewa)){
				$this->M_penyewa->tambah_data();
		} else {
				$this->M_penyewa->ubah_data($idt_penyewa);
		}
	}

	public function delete(){
                $idt_penyewa = $this->input->post('idt_penyewa1');
                $this->M_penyewa->hapus_data($idt_penyewa);
        }
	
}
