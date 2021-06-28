<?php 

class M_history extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_history');
	}
		
	public function get_all_data($idt_armada){
		$query = $this->db->select('t_track.*, t_armada.namaArmada')
		->from('t_track')
		->join('t_armada', 't_track.idt_armada = t_armada.idt_armada')
		->where(array('t_track.idt_armada' => $idt_armada))->get();

		return $query;
	}
	function tambah_data() {
		$data = array(
		    'idt_user' => $this->input->post('idt_user'),
            'waktu' => date("Y-m-d H:i:s"),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude')
		);
		$this->db->insert('t_history', $data);
		echo json_encode($data);
    }
}