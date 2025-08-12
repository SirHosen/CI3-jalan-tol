<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
	public function get_kode_plat()
{
    $this->load->model('Kendaraan_model');
    $data = $this->Kendaraan_model->get_all_kode_plat();
    echo json_encode([
    'status' => 'success',
    'data' => $data
	]);
}
}
