<?php 

class M_admin extends CI_Model{
	function tampil_data()
	{
		return $this->db->query("SELECT * from t_admin, t_pegawai where t_admin.idt_pegawai=t_pegawai.idt_pegawai");
    }
   function tambah_data() {

		$data = array(
			'idt_pegawai' => $this->input->post('idt_pegawai'),
		    'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
			'level' => $this->input->post('level')
			);
		$this->db->insert('t_admin', $data);
		redirect('../AdminAdmin');
    }

    function ubah_data ($idt_admin) {
 
		$data = array(
			'idt_pegawai' => $this->input->post('idt_pegawai'),
            'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password')),
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
	//    function get_id_admin($id){
    //     $this->db->where('idt_admin', $id);
    //     return $this->db->get('t_admin')->row();
    // }
}
