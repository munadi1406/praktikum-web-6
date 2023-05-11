<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	
	public function __construct(){
		$this->load->model('Profil_model');
	}

	public function index()
	{

		


		$title = 'ini halaman profile';
		$data = $this->Profil_model->getPost();
		// $data = [
		// 	'data' => 'selamat datang di halaman profile',
		// 	'datas'=>[
		// 		'1'=>[
		// 			'id'=>'1',
		// 			'title'=>'avanger'
		// 		],
		// 		'2'=>[
		// 			'id'=>'2',
		// 			'title'=>'dune'
		// 		]
		// 	]
		// ];
		$this->load->view('profil', ['data' => $data, 'title' => $title]);
	}

	public function edit()
	{
		echo 'ini halaman edit';
	}
}
