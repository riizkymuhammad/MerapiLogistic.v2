<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view('v_login2');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_staf=$this->login_model->auth_staf($username,$password);

        if($cek_staf->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_staf->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('admin/index');

		         }else{ //akses dosen
		            $this->session->set_userdata('akses','2');
								$this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('relawan/index');
		         }

        }else{ //jika login sebagai mahasiswa
					$cek_donatur=$this->login_model->auth_donatur($username,$password);
					if($cek_donatur->num_rows() > 0){
							$data=$cek_donatur->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['id']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('donatur');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect('Home');
    }

}
