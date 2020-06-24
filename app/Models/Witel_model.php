<?php
	namespace App\Models;

	use CodeIgniter\Model;

class Witel_model extends Model
{
  protected $table = 'kode_witel';
  protected $primaryKey = 'id_witel';
  protected $allowedFields = [
    'id_witel',
    'witel'
  ];
}
