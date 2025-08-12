<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan_model extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }

	public function get_all_kode_plat(){
		return $this->db->select('kode, nama_wilayah')
							->order_by('kode', 'ASC')
							->get('kode_wilayah_plat')
							->result();
				}
}

