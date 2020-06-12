<?php
	namespace App\Models;

	use CodeIgniter\Model;

	class Riwayat_sengketa_model extends Model
	{
		protected $table = 'riwayat_sengketa';
		protected $primaryKey = 'riwayat_sengketa_id';
		protected $allowedFields = [
			'kode_lokasi',
			'id_areal',			
			'riwayat_sengketa',
			'keterangan'
		];
		protected $validationRules = [			
			'kode_lokasi'=> 'required',
			'id_areal'=> 'required',			
			'riwayat_sengketa'=> 'required',
			'keterangan'=> 'required'
		];	
	}
?>

