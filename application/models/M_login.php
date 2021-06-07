<?php
class M_login extends CI_Model
{
	function auth()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password_2 = htmlspecialchars($this->input->post('password_2', TRUE), ENT_QUOTES);
		$query=$this->db->query("SELECT * FROM t_admin WHERE username='".$username."' AND password_2='".MD5($password_2)."'");
		foreach ($query->result() as $row) {
			// this->session->set_userdata('submit',TRUE);
			$this->session->set_userdata('submit',TRUE);
			$this->session->set_userdata('idt_admin',$row->idt_admin);
			$this->session->set_userdata('username',$row->username);
			// $this->session->set_userdata('Username',$row->Username);
			if ($row->level=='Admin'){
				$this->session->set_userdata('akses','1');
			redirect('Welcome');
			} elseif ($row->level=='SuperAdmin'){
				$this->session->set_userdata('akses','2');
			redirect('WelcomeSuperAdmin');
			} else{
				echo"keluar";
			}
		}
		echo $this->session->set_flashdata('msg','Username Atau password Salah');
		redirect(base_url());
	}
}