<?php 

class M_admin extends CI_Model{
	function tampil_data()
	{
		return $this->db->get('t_admin');
    }
   function tambah_data() {

		$data = array(
		    'namaAdmin' => $this->input->post('namaAdmin'),
            'noTelfon' => $this->input->post('noTelfon'),
			'username' => $this->input->post('username'),
			'password_2' => MD5($this->input->post('password_2')),
			'level' => $this->input->post('level')
			);
		$this->db->insert('t_admin', $data);
		redirect('../AdminAdmin');
    }

    function ubah_data ($idt_admin) {
 
		$data = array(
            'namaAdmin' => $this->input->post('namaAdmin'),
            'noTelfon' => $this->input->post('noTelfon'),
			'username' => $this->input->post('username'),
			'password_2' => MD5($this->input->post('password_2')),
			'level' => $this->input->post('level')
			);

		$this->db->where(array('idt_admin' => $idt_admin ));
		$this->db->update('t_admin', $data);
		redirect('../AdminAdmin');
	}
	
	function hapus_data ($idt_admin) {
		$this->db->where(array('idt_admin' => $idt_admin));
		$this->db->delete('t_admin');
		redirect('../AdminAdmin');
		}
		function hitung () {
			return $this->db->count_all_results('t_admin');
	}
}
