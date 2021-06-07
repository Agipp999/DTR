<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarArmada extends CI_Controller {
    
    public function __construct() {
		parent::__construct();
		$this->load->model('M_daftararmada');
		$this->load->helper('url');
	}
    public function index()	{

        $data['t_armada'] = $this->M_daftararmada->tampil_data();
        $this->load->view('user/header', $data);
		$this->load->view('user/daftararmada', $data);
		$this->load->view('user/footer', $data);
    }

}