<?php
	namespace App\Models;

	use CodeIgniter\Model;

	class Lahan_model extends Model
	{
		protected $table = 'lahan';
		protected $allowedFields = [
			'id_areal_fix_old',
			'nama_lahan',
			'alamat',
			'provinsi_nama',
			'kota_nama',
			'kecamatan_nama',
			'desa_nama',
			'lat',
			'long',		
			'takos_t_f',
			'luas_tanah',	
			'luas_gedung',
			'penggunaan',
			'sertifikat',
			'penyimpanan_sertifikat',
			'area_regional',
			'kode_prov',
			'witel',
			'kode_witel',
			'kode_lokasi'
		];
		protected $validationRules = [
			'id_areal_fix_old'			=> 'required',
			'nama_lahan'				=> 'required',
			'alamat'					=> 'required',
			'provinsi_nama'				=> 'required',
			'kota_nama'					=> 'required',
			'kecamatan_nama'			=> 'required',
			'desa_nama'					=> 'required',
			'lat'						=> 'required',
			'long'						=> 'required',
			'takos_t_f'					=> 'required',
			'luas_tanah'				=> 'required',
			'luas_gedung'				=> 'required',
			// 'penggunaan'				=> 'required',
			'sertifikat'				=> 'required',
			'penyimpanan_sertifikat'	=> 'required',
			'area_regional'				=> 'required',
			'kode_prov'					=> 'required',
			'witel'						=> 'required',
			'kode_witel'				=> 'required',
			'kode_lokasi'				=> 'required'
		];	
	}
?>

