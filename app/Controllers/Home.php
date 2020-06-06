<?php namespace App\Controllers;

use App\Models\Gedung_model;
use App\Models\Sertifikat_model;

class Home extends BaseController
{
	public function __construct()
	{
		$this->bangunan = new Gedung_model();
		$this->sertifikat = new Sertifikat_model();
	}

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
	
	public function asetBangunan()
	{
		$data=[
			'title' => 'Aset Bangunan',
			'isi' => 'pages/asetBangunan',
			'subheader' => 'Data Asset Bangunan'
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

	public function login()
	{
		echo view('pages/v_login');
	}

	//--------------------------------------------------------------------

}
