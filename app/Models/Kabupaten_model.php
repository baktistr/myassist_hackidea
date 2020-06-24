<?php
	namespace App\Models;

	use CodeIgniter\Model;

class Kabupaten_model extends Model
{
  protected $table = 'regencies';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'id',
    'province_id',
    'name'
  ];
}
