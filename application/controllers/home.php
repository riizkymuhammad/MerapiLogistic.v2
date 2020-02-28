<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller{
	
	function index()
	{
		$this->load->view('v_home');
	
	}

	public function formdonasi(){
		$this->load->view('v_formdonasi');
	}

	public function about(){
		$this->load->view('v_about');
	}

	// public function login2(){
	// 	$this->load->view('v_login2');
	// }


}