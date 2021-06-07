<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('M_homepage');
		$this->load->helper('url');
	}
    public function index()	{
        $data['t_armada'] = $this->M_homepage->tampil_data();
        $this->load->view('user/header', $data);
		$this->load->view('user/homepage', $data);
		$this->load->view('user/footer', $data);
    }

}