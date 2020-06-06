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
		$email 		= $this->request->getVar('email');
		$username 	= $this->request->getVar('username');
		$password 	= $this->request->getVar('password');
		
		$record = $this->user->where('username', $username)->orWhere('email', $email)->first();
		
		if($record) {
			$check = password_verify($password, $record['password']);
			
			if($check) {
				$session_data = [
				'username'	=> $record['username'],
				'email'		=> $record['email'],
				'nama'		=> $record['nama'],
				'role'		=> $record['role'],
				'logged_in'	=> TRUE
				];
				$this->session->set($session_data);				
				return redirect()->to('/dashboard');
			}				
		}			
		return 'fail';		
		return redirect()->to('/login')->with('msg', '<span class="text-danger">Username atau Password Salah</span>');
	}

	public function create()
	{		
		$req = $this->request->getPost();				
		return $this->user->register($req);
	}
}