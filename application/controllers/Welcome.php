<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index(){
		$this->load->view('welcome');
	}
	
	public function register() {
        $this->load->view('auth/daftar');
    }
	
	public function login() {
        $this->load->view('auth/masuk');
    }
}
