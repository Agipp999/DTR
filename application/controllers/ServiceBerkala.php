<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceBerkala extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_serviceberkala');
				$this->load->model('M_dataarmada');
                $this->load->helper('url');
				$this->load->helper('tgl_indo');
        }
	public function index()	{
		if($this->session->userdata('akses')=='1'){
			$data['query'] = $this->M_serviceberkala->tampil_data();
			$data['t_service'] = $this->M_serviceberkala->tampil_data();
				
				$this->load->view('header', $data);
				$this->load->view('admin/serviceberkala', $data);
				$this->load->view('footer', $data);
			}elseif($this->session->userdata('akses')=='2'){
				$data['query'] = $this->M_serviceberkala->tampil_data();
				$data['t_service'] = $this->M_serviceberkala->tampil_data();
				
				$this->load->view('header_super', $data);
				$this->load->view('admin/serviceberkala', $data);
				$this->load->view('footer_super', $data);
			}else{
                echo "Halaman Tidak ditemukan";
		}
	}
	public function add(){
		$idt_service = $this->input->post('idt_service');
		if(empty($idt_service)){
				$this->M_serviceberkala->tambah_data();
		} else {
				$this->M_serviceberkala->ubah_data($idt_service);
		}
	}
	public function delete(){
		$idt_service = $this->input->post('idt_service1');
		$this->M_serviceberkala->hapus_data($idt_service);
	}
}
