<?php
	namespace App\Models;

	use CodeIgniter\Model;

	class Gedung_model extends Model
	{
		protected $table = 'gedung';
		protected $primaryKey = 'gedung_id';
		protected $allowedFields = [
			'id_areal_fix_old',
			'kode_lokasi',
			'urut_gedung',
			'kode_gedung',
			'nama_gedung',
			'lat',
			'long',
			'peruntukan',
			'jumlah_lantai',
			'nop',
			'luas_gedung'
		];
		protected $validationRules = [
			'id_areal_fix_old'	=> 'required',
			'kode_lokasi'		=> 'required',
			'urut_gedung'		=> 'required',
			'kode_gedung'		=> 'required',
			'nama_gedung'		=> 'required',
			'lat'				=> 'required',
			'long'				=> 'required',
			'peruntukan'		=> 'required',
			'jumlah_lantai'		=> 'required',
			'nop'				=> 'required',
			'luas_gedung'		=> 'required'
		];	
	}
?>

