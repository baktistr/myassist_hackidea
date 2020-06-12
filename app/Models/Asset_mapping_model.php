<?php
	namespace App\Models;

	use CodeIgniter\Model;

	class Asset_mapping_model extends Model
	{
		protected $table = 'asset_mapping';
		protected $primaryKey = 'asset_mapping_id';
		protected $allowedFields = [
			'kode_lokasi',
			'id_areal',
			'asset_mapping'
		];
		protected $validationRules = [			
			'kode_lokasi'=> 'required',
			'id_areal'=> 'required',
			'asset_mapping'=> 'required'
		];	
	}
?>

