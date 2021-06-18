<?php 

class M_serviceberkala extends CI_Model{
	function tampil_data()
	{
		return $this->db->query("SELECT * from t_service, t_armada where t_service.idt_armada=t_armada.idt_armada");
    }
    function tambah_data(){
		$data = array(
			'idt_armada' => $this->input->post('idt_armada'),
			'tanggalService' => $this->input->post('tanggalService'),
			'biayaService' => $this->input->post('biayaService'),
			'keterangan' => $this->input->post('keterangan'),
		);
	$this->db->insert('t_service', $data);
	redirect('../ServiceBerkala');	
	}
	
	function ubah_data ($idt_service){
		$data = array(
			'idt_armada' => $this->input->post('idt_armada'),
            'tanggalService' => $this->input->post('tanggalService'),
            'biayaService' => $this->input->post('biayaService'),
			'keterangan' => $this->input->post('keterangan'),
		);
	$this->db->where(array('idt_service' => $idt_service));
	$this->db->update('t_service', $data);
	redirect('../ServiceBerkala');
	}
	function hapus_data ($idt_service) {
		$this->db->where(array('idt_service' => $idt_service));
		$this->db->delete('t_service');
		redirect('../ServiceBerkala');
    }
}