<?php 

class M_profile extends CI_Model{
	function tampil_data()
	{
        return $this->db->query("SELECT * from t_admin, t_pegawai where t_admin.idt_pegawai=t_pegawai.idt_pegawai");
    }
    function tampil_where($idt_admin)
    {
        return $this->db->where('idt_admin', $idt_admin)->get('tampil_data');
    }

    function user_tampil_where($idt_admin)
    {
        return $this->db->where('idt_admin', $idt_admin)->get('t_admin');
    }

    function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function ubah_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
