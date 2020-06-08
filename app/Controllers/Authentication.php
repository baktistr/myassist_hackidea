<?php
namespace App\Controllers;

use App\Models\User_model;
use Ahc\Jwt\JWT;

class Authentication extends BaseController 
{
	public function __construct() {
		$this->user = new User_model();		
		$this->session = session();
	}

	public function index()
	{		
		$jwt = new JWT('secret');
		$token = $jwt->encode([
		    'uid'    => 1,
		    'aud'    => 'http://site.com',
		    'scopes' => ['username'=>'admin','email'=>'admin@gmail.com','nama'=>'admin','role' => 'admin'],
		    'iss'    => 'http://api.mysite.com',
		]);

		$payload = $jwt->decode($token);
		echo '<pre>';
		print_r(['token' => $token, 'payload' => $payload]);
		echo '</pre>';
		return ;
	}

	public function login()
	{					
		$username 	= $this->request->getVar('username');
		$password 	= $this->request->getVar('password');

		$record = $this->user->where('username', $username)->orWhere('email', $username)->first();
		
		if($record) {
			$check = password_verify($password, $record['password']);
			
			if($check) {
				$role = '';
				switch ($record['role']) {
					case 1:
						$role = 'admin';
						break;
					case 2:
						$role = 'amc';
						break;
					case 3:
						$role = 'treg';
						break;
					default:						
						break;
				}				
				$session_data = [
				'username'	=> $record['username'],
				'email'		=> $record['email'],
				'nama'		=> $record['nama'],
				'role'		=> $role,
				'isLogin'	=> TRUE
				];
				$this->session->set('token', $session_data);				
				return redirect()->to('/dashboard')->with('msg', 'Berhasil login', 'success');
			}				
		}				
		return redirect()->to('/login')->with('msg', 'Username atau Password Salah', 'danger');
	}

	public function create()
	{		
		$req = $this->request->getPost();				
		return $this->user->register($req);
	}
}