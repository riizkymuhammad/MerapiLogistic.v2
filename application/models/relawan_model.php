<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relawan_model extends CI_Model {
	// Fungsi untuk menampilkan semua data staf
	public function view(){
		$this->db->select('id,nama, alamat, no_hp, username, password, level');
		$this->db->from('tb_staf');
		$staf = "level = '2'";
		$this->db->where($staf, NULL, FALSE);
		$query = $this->db->get();
    	return $query->result();
    // 
	}

	public function view_by($id){
    $this->db->where('id', $id);
    return $this->db->get('tb_staf')->row();
  }

	public function save(){
		$data = array(
			"nama" => $this->input->post('input_nama'),
			"no_hp" => $this->input->post('input_nohp'),
			"nama" => $this->input->post('input_nama'),
			"alamat" => $this->input->post('input_alamat'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password'),
			"level" => $this->input->post('input_level')
		);
		
		$this->db->insert('tb_staf', $data); // Untuk mengeksekusi perintah insert data
	}

	public function edit($id){
    $data = array(

      		"nama" => $this->input->post('input_nama'),
			"no_hp" => $this->input->post('input_nohp'),
			"alamat" => $this->input->post('input_alamat'),
			"username" => $this->input->post('input_username'),
			"password" => $this->input->post('input_password'),
			"level" => $this->input->post('input_level')

    );
    
    $this->db->where('id', $id);
    $this->db->update('tb_staf', $data); // Untuk mengeksekusi perintah update data
  }


	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_staf'); // Untuk mengeksekusi perintah delete data
	}
	
}
