<?php
	namespace App\Models;

	use CodeIgniter\Model;

class Kecamatan_model extends Model
{
  protected $table = 'districts';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'id',
    'regency_id',
    'name'
  ];
}
