<?php  
class ApiHistory extends CI_Controller{

    function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_history');
	}

	function index(){
        $idt_armada = $_GET['id'];
        if($this->session->userdata('akses')=='1'){
            $data = array(
                'title' => 'History',
                'gps'   => $this->M_history->get_all_data($idt_armada),
                'isi'	=> 'admin/history');
                
            $this->load->view('wrapper.php',$data);
        } elseif($this->session->userdata('akses')=='2'){
            $data = array(
                'title' => 'History',
                'gps'   => $this->M_history->get_all_data($idt_armada),
                'isi'	=> 'admin/history');
                
            $this->load->view('wrapper.php',$data);
        }else { 
            echo "Halaman Tidak ditemukan";
        }
    }
    function tambah_data() {
        $this->M_history->tambah_data();
    }


}
