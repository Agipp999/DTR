<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentangPerusahaan extends CI_Controller {
    public function index()	{
        $this->load->view('user/header');
		$this->load->view('user/tentangperusahaan');
		$this->load->view('user/footer');
    }

}