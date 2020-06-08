<?php
namespace App\Controllers;

class Logout extends BaseController
{
  public function index()
  {
    $session = session();
		$session->remove('token');
		return redirect()->to('/login')->with('msg', 'Berhasil keluar', 'success');
  }
}