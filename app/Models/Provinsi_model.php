<?php
	namespace App\Models;

	use CodeIgniter\Model;

class Provinsi_model extends Model
{
  protected $table = 'provinces';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'id',
    'name'
  ];
}
