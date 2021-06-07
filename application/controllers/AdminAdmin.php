<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAdmin extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_admin');
                $this->load->helper('url');
        }
	public function index(){ 
        if($this->session->userdata('akses')=='2'){
            $data['query'] = $this->M_admin->tampil_data();
	    $data['t_admin'] = $this->M_admin->tampil_data();

                $this->load->view('header_super', $data);
                $this->load->view('superadmin/dataadmin', $data);
                $this->load->view('footer_super', $data);
        }else{
                echo "Halaman Tidak ditemukan";
        }   
        }

	public function add(){
		$idt_admin = $this->input->post('idt_admin');
		if(empty($idt_admin)){
				$this->M_admin->tambah_data();
		} else {
				$this->M_admin->ubah_data($idt_admin);
		}
	}

	public function delete(){
                $idt_admin = $this->input->post('idt_admin1');
                $this->M_admin->hapus_data($idt_admin);
        }
	
}
