<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//default
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//masuk dan daftar
$route['login'] = 'welcome/login';
$route['register'] = 'welcome/register';
$route['api/get_kode_plat'] = 'kendaraan/get_kode_plat';

