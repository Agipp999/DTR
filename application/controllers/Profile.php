<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
        {
                parent::__construct();
                $this->load->model('M_pegawai');
                $this->load->model('M_admin');
                $this->load->model('M_profile');
                $this->load->helper('url');
        }
	public function index(){ 
                $data['pegawai'] = $this->M_pegawai->tampil_data()->result();
                $data['admin'] = $this->M_admin->tampil_data()->result();
                $data['profil'] = $this->M_profile->user_tampil_where($this->session->userdata('idt_admin'))->row();
                if ($data['admin'] == null){
                        $data['admin'] = array(
                                'idt_admin' => 'kosong'
                        );
                }
                if($this->session->userdata('akses')=='1'){
                $data['query'] = $this->M_profile->tampil_data();
                        $data['t_admin'] = $this->M_profile->tampil_data();

                        $this->load->view('header', $data);
                        $this->load->view('admin/profile', $data);
                        $this->load->view('footer', $data);
                }elseif($this->session->userdata('akses')=='2'){
                        $data['query'] = $this->M_profile->tampil_data();
                        $data['t_admin'] = $this->M_profile->tampil_data();

                        $this->load->view('header_super', $data);
                        $this->load->view('admin/profile', $data);
                        $this->load->view('footer_super', $data);
                }else{
                        echo "Halaman Tidak ditemukan";
                }   
        }
	
}
