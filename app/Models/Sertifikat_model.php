<?php
	namespace App\Models;

	use CodeIgniter\Model;

	class Sertifikat_model extends Model
	{
		protected $table = 'sertifikat';
		protected $primaryKey = 'sertifikat_id';
		protected $allowedFields = [
			'id_areal',			
			'no_sertifikat',		
			'lokasi_aset',		
			'provinsi',			
			'kodya',			
			'kecamatan',			
			'kelurahan',			
			'divisi_regional',
			'witel',				
			'luas',				
			'sk_hak',	
			'jenis',				
			'akhir',
			'status_hgb',		
			'loker',				
			'bundel',			
			'halaman',			
			'status_penyimpanan',
			// 'final_status',		
			// 'keterangan'	
			'scan_sertifikat'	
		];
		protected $validationRules = [
			'id_areal'			=> 'required',
			'no_sertifikat'		=> 'required',
			'lokasi_aset'		=> 'required',
			'provinsi'			=> 'required',
			'kodya'				=> 'required',
			'kecamatan'			=> 'required',
			'kelurahan'			=> 'required',
			'divisi_regional'	=> 'required',
			'witel'				=> 'required',
			'luas'				=> 'required',
			'sk_hak'			=> 'required',
			'jenis'				=> 'required',			
			'akhir'				=> 'required',
			'status_hgb'		=> 'required',
			'loker'				=> 'required',
			'bundel'			=> 'required',
			'halaman'			=> 'required',
			'status_penyimpanan'=> 'required',
			// 'final_status'	=> 'required',
			// 'keterangan'		=> 'required'
			// 'scan_sertifikat'	=> 'required'
		];	
	}
?>

