<?php
	namespace App\Models;

	use CodeIgniter\Model;

	class Sertifikat_model extends Model
	{
		protected $table = 'sertifikat';
		protected $allowedFields = [
			'id_areal',			
			'no_sertifikat',
			'id_areal_copy',		
			'lokasi_aset',		
			'provinsi',			
			'kotamadya',			
			'kecamatan',			
			'kelurahan',			
			'div_regional',
			'witel',				
			'luas',				
			'sk_hak',	
			'jenis',				
			'akhir',				
			'tahun'	,			
			'bulan',				
			'tanggal',			
			'status_hgb',		
			'loker',				
			'bundel',			
			'halaman',			
			'status_penyimpanan',
			'final_status',		
			'keterangan'		
		];
		protected $validationRules = [
			'id_areal'			=> 'required',
			'no_sertifikat'		=> 'required',
			'id_areal_copy'		=> 'required',
			'lokasi_aset'		=> 'required',
			'provinsi'			=> 'required',
			'kotamadya'			=> 'required',
			'kecamatan'			=> 'required',
			'kelurahan'			=> 'required',
			'div_regional'		=> 'required',
			'witel'				=> 'required',
			'luas'				=> 'required',
			'sk_hak'			=> 'required',
			'jenis'				=> 'required',
			'akhir'				=> 'required',
			'tahun'				=> 'required',
			'bulan'				=> 'required',
			'tanggal'			=> 'required',
			'status_hgb'		=> 'required',
			'loker'				=> 'required',
			'bundel'			=> 'required',
			'halaman'			=> 'required',
			'status_penyimpanan'=> 'required',
			'final_status'		=> 'required',
			'keterangan'		=> 'required'
		];	
	}
?>

