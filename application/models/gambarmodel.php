<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gambarmodel extends CI_Model {
	// Fungsi untuk menampilkan semua data gambar
	public function view(){
		return $this->db->get('tb_gambar')->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './struk/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'nama'=>$this->input->post('input_nama'),
			'no_hp'=>$this->input->post('input_nohp'),
			'alamat'=>$this->input->post('input_alamat'),
			'nominal_transfer'=>$this->input->post('input_nominal'),
			'nama_file' => $upload['file']['file_name']
			
		);
		
		$this->db->insert('tb_gambar', $data);
		redirect(base_url("home"));
	}



	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_gambar'); // Untuk mengeksekusi perintah delete data
	}

	public function validasi($id){
	$this->db->set('status', 'valid');
	$this->db->where('id', $id);
	$this->db->update('tb_gambar');
	}




	public function get_sum(){
		$this->db->select_sum('nominal_transfer','jumlah');
		$this->db->from('tb_gambar');
		$status = "status  = 'valid'";
		$this->db->where($status, NULL, FALSE);

		return $this->db->get('')->row();
	}
}
