<?php 

class M_history extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_history');
	}
		
	public function get_all_data($idt_user){
		$query = $this->db->select('t_history.*, t_user.name')
		->from('t_history')
		->join('t_user', 't_history.idt_user = t_user.idt_user')
		->where(array('t_history.idt_user' => $idt_user))
		->get();
		
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