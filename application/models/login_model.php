<?php
class Login_model extends CI_Model{
	//cek nip dan password dosen
	function auth_staf($username,$password){
		$query=$this->db->query("SELECT * FROM tb_staf WHERE username='$username' AND password='$password' LIMIT 1");
		return $query;
	}

	//cek nim dan password mahasiswa
	function auth_donatur($username,$password){
		$query=$this->db->query("SELECT * FROM tb_donatur WHERE username='$username' AND password='$password' LIMIT 1 ");
		return $query;
	}

}

