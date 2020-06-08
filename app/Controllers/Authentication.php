<?php
namespace App\Controllers;

use App\Models\User_model;

class Authentication extends BaseController 
{
	public function __construct() {
		$this->user = new User_model();		
		$this->session = session();
	}

	public function index()
	{
		echo view('c_login');
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
				$this->session->set($session_data);				
				return redirect()->to('/dashboard');
			}				
		}				
		return redirect()->to('/login')->with('login', 'Username atau Password Salah');
	}

	public function create()
	{		
		$req = $this->request->getPost();				
		return $this->user->register($req);
	}
}