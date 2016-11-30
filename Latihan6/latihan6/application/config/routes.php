<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['triyanti'] = 'hello_triyanti';

//bagian latihan 6=========================================================================
$route['biodata'] = 'biodata_triyanti'; //berisi informasi biodata
$route['ukm'] = 'ukm_triyanti'; //berisi informasi ukm sesuai tugas mid
$route['pengalaman'] = 'cerita_triyanti'; //berisi pengalaman anda saat mengerjakan tugas ini



$route['sejarahbasket'] = 'sejarah_basket'; //sejarah basket
$route['olimpiadebasket'] = 'olimpiade_basket'; //olimpiade basket
$route['mengenaibasket'] = 'mengenai_basket'; //mengenai basket


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
