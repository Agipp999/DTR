<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GpsTracker extends CI_Controller {
    
	function __construct()
    {
            parent::__construct();
            $this->load->model('M_GPS');
            $this->load->model('M_dataarmada');
            $this->load->model('M_datatransaksi');
            $this->load->helper('url');

    }
    public function index() {
        if($this->session->userdata('akses')=='1'){
            $data = array(
                'title' =>'GPS Tracker',
                'gps'   =>$this->M_GPS->get_all_data(),
                'isi'	=> 'admin/gpstracker');
                
            $this->load->view('wrapper.php',$data, FALSE);
            //print_r($data);
        } else { 
            echo "Halaman Tidak ditemukan";
        }
    }
    public function add(){
        $this->form_validation->set_rules('lat', 'Latitude', 'required');
        $this->form_validation->set_rules('lng', 'Longitude', 'required');
    }
}