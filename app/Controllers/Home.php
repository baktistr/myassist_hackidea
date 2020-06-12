<?php namespace App\Controllers;

use App\Models\Gedung_model;
use App\Models\Sertifikat_model;
use App\Models\Lahan_model;
use App\Models\User_model;
use App\Models\Riwayat_sengketa_model;
use App\Models\Asset_mapping_model;

class Home extends BaseController
{	

	public function index()
	{
		$status_sertifikat_lahan = [
			'hgb' => model('Sertifikat_model')->where('jenis', 'HGB')->where('akhir <=', date("Y-m-d"))->countAllResults(),
			'hm'  => model('Sertifikat_model')->where('jenis', 'HM')->countAllResults(),
			'hp'  => model('Sertifikat_model')->where('jenis', 'HP')->countAllResults(),
			'hgbjt' => model('Sertifikat_model')->where('jenis', 'HGB')->where('akhir >', date("Y-m-d"))->countAllResults(),
			'no_sertifikat' => model('Lahan_model')->where('sertifikat', 'TIDAK ADA SERTIFIKAT')->countAllResults()
		];
		$status_riwayat_sengketa = [
			'litigasi' => model('Riwayat_sengketa_model')->where('riwayat_sengketa', 'litigasi')->countAllResults(),
			'non_litigasi' => model('Riwayat_sengketa_model')->where('riwayat_sengketa', 'non litigasi')->countAllResults(),
		];
		$asset_lahan = model('Lahan_model')->selectSum('luas_tanah')->get()->getRowArray();
		$asset_bangunan = model('Lahan_model')->selectSum('luas_gedung')->get()->getRowArray();

		$data=[
			'title' => 'Dashboard',
			'isi' => 'pages/dashboard',
			'subheader' => 'Dashboard',
			'status_sertifikat_lahan' => $status_sertifikat_lahan,
			'status_riwayat_sengketa' => $status_riwayat_sengketa,
			'asset_lahan' => $asset_lahan['luas_tanah'],
			'asset_bangunan' => $asset_bangunan['luas_gedung']
		];
		
		echo view('index', $data);
	}

	public function asetLahan()
	{
		$data=[
			'title' => 'Aset Lahan',
			'isi' => 'pages/asetLahan',
			'subheader' => 'Data Asset Lahan',
			'lahan'	=> model('Lahan_model')->findAll()
		];
		echo view('index', $data);
	}
	
	public function asetBangunan()
	{
		$data=[
			'title' => 'Aset Bangunan',
			'isi' => 'pages/asetBangunan',
			'subheader' => 'Data Asset Bangunan',
			'bangunan'	=> model('Gedung_model')->findAll()
		];
		echo view('index', $data);
	}

	public function sertifikatLahan()
	{
		$data=[
			'title' => 'Sertifikat Lahan',
			'isi' => 'pages/sertifikatLahan',
			'subheader' => 'Data Sertifikat',
			'sertifikat' => model('sertifikat_model')->findAll()
		];
		echo view('index', $data);
	}

	public function userControl()
	{
		$data=[
			'title' => 'User Control',
			'isi' => 'pages/userControl',
			'subheader' => 'User Control',
			'user' => model('User_model')->findAll()
		];
		echo view('index', $data);
	}

	public function login()
	{
		echo view('pages/v_login');
	}

	public function home()
	{
		echo view('pages/landingPage');
	}

	public function showDetail()
	{	
		$url = file_get_contents('http://myassistrepo.com/api/lahan/2144');
		$aset = json_decode($url, TRUE);

		$data=[
		  'title' => 'Edit Aset Lahan',
		  'isi' => 'pages/asetDetail',
			'subheader' => 'Asset Detail',
			'detail'	=> $aset
		];
		echo view('index', $data);
	}

	//--------------------------------------------------------------------

}
