<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataArmada extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dataarmada');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	public function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$data['query'] = $this->M_dataarmada->tampil_data();
			$data['t_armada'] = $this->M_dataarmada->tampil_data();

			$this->load->view('header', $data);
			$this->load->view('admin/dataarmada', $data);
			$this->load->view('footer', $data);
		} else {
			echo "Halaman Tidak ditemukan";
		}
	}

	public function add()
	{
		$config['upload_path'] 		= './armada/';
		$config['allowed_types'] 	= 'jpg|png|jpeg|PNG';
		$config['overwrite']		= true;
		$config['max_size']  		= 10000;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('filegambar')) {
			echo "Gambar belum di tambahkan";
			echo $this->upload->display_errors();
		} else {
			$data = array('upload_data' => $this->upload->data());
			$gambar = $_FILES['filegambar']['name'];
			$idt_armada = $this->input->post('idt_armada');
			if (empty($idt_armada)) {
				$this->M_dataarmada->tambah_data($gambar);
			} else {
				$this->M_dataarmada->ubah_data($idt_armada, $gambar, $data);
			}
		}
	}

	public function delete()
	{
		$idt_armada = $this->input->post('idt_armada1');
		$this->M_dataarmada->hapus_data($idt_armada);
	}
}
