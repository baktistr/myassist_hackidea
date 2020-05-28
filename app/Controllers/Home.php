<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Dashboard',
			'isi' => 'pages/dashboard',
		];
		echo view('index', $data);
	}

	public function asetLahan()
	{
		$data=[
			'title' => 'Aset Lahan',
			'isi' => 'pages/asetLahan',
		];
		echo view('index', $data);
	}

	public function asetBangunan()
	{
		$data=[
			'title' => 'Aset Bangunan',
			'isi' => 'pages/asetBangunan',
		];
		echo view('index', $data);
	}

	public function sertifikatLahan()
	{
		$data=[
			'title' => 'Sertifikat Lahan',
			'isi' => 'pages/sertifikatLahan',
		];
		echo view('index', $data);
	}

	//--------------------------------------------------------------------

}
