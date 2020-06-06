<?php
namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'user_id';

	protected $allowedFields = [
		'nama',
		'username',
		'email',
		'password',
		'role'
	];

	protected $validationRules = [
		'nama'		=> 'required',
		'username'	=> 'required',
		'email'		=> 'required',
		'password'	=> 'required',
		'role'		=> 'required'
	];

	public function register($data) {
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);		
		return $this->insert($data);
	}
}