<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Dashboard',
			'isi' => 'pages/dashboard',
			'subheader' => 'Dashboard'
		];
		echo view('index', $data);
	}

	public function asetLahan()
	{
		$data=[
			'title' => 'Aset Lahan',
			'isi' => 'pages/asetLahan',
			'subheader' => 'Data Asset Lahan'
		];
		echo view('index', $data);
	}

	public function asetLahan2()
	{
		$data=[
			'title' => 'Aset Lahan',
			'isi' => 'pages/asetLahanCreate',
			'subheader' => 'Data Asset Lahan'
		];
		echo view('index', $data);
	}

	public function asetBangunan()
	{
		$data=[
			'title' => 'Aset Bangunan',
			'isi' => 'pages/asetBangunan',
			'subheader' => 'Data Asset Bangunan'
		];
		echo view('index', $data);
	}

	public function asetBangunanCreate()
	{
		$data=[
			'title' => 'Create Aset Bangunan',
			'isi' => 'pages/asetBangunanCreate',
			'subheader' => 'Create Data Asset Bangunan'
		];
		echo view('index', $data);
	}

	public function sertifikatLahan()
	{
		$data=[
			'title' => 'Sertifikat Lahan',
			'isi' => 'pages/sertifikatLahan',
			'subheader' => 'Data Sertifikat'
		];
		echo view('index', $data);
	}
	public function sertifikatLahanCreate()
	{
		$data=[
			'title' => 'Create Sertifikat Lahan',
			'isi' => 'pages/sertifikatLahanCreate',
			'subheader' => 'Create Data Sertifikat'
		];
		echo view('index', $data);
	}

	public function login()
	{
		echo view('pages/v_login');
	}

	//--------------------------------------------------------------------

}
