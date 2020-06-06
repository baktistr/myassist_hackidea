<?php
namespace App\Controllers;

use App\Models\User_model;
use CodeIgniter\Controller;

class UserController extends Controller
{
  public function __construct()
  {
    $this->sertifikat = new Sertifikat_model();
  }
}