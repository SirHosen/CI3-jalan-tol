<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  public function register() {
    $this->load->model('User_model');

    $data = [
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'email' => $this->input->post('email'),
      'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
      'no_hp' => $this->input->post('no_hp'),
      'status' => 'active',
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s')
    ];

    $this->User_model->insert_user($data);
    redirect('auth/login');
  }

  public function login() {
    $this->load->model('User_model');
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->User_model->get_by_email($email);

    if ($user && password_verify($password, $user->password)) {
      $this->session->set_userdata('user_id', $user->id);
      redirect('dashboard');
    } else {
      $this->session->set_flashdata('error', 'Email atau password salah');
      redirect('auth/masuk');
    }
  }
}
