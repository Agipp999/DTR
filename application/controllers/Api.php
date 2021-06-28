<?php  
class Api extends CI_Controller{

    function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_API');
	}
    function getDataTransaksi() {
        $idt_armada = $this->input->post('idt_armada');
        echo json_encode($this->M_API->tampil_transaksi($idt_armada));
    }
    function insertTrack(){
        echo json_encode($this->M_API->tambah_track());
    }

}
