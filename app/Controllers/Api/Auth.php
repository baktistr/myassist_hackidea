<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use Ahc\Jwt\JWT;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");

class Auth extends ResourceController
{
  protected $modelName    = 'App\Models\User_model';
  protected $format       = 'json';

  public function login()
  {    
    $data = $this->request->getJSON(TRUE);
    
    if(empty($data['username']) || empty($data['password'])) {
      return $this->failUnauthorized();
    }

    $record = $this->model->where('username', $data['username'])->orWhere('email', $data['username'])->first();
    
    if($record) {
      $check = password_verify($data['password'], $record['password']);
      
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
          case 4:
            $role = 'user';
            break;
          default:            
            break;
        }       
        $payload_scopes = [
        'username'  => $record['username'],
        'password'  => $record['password'],
        'email'   => $record['email'],
        'nama'    => $record['nama'],
        'role'    => $role        
        ];
        $jwt = new JWT('secret');
        $token = $jwt->encode([
            'uid'    => 1,
            'aud'    => 'http://site.com',
            'scopes' => $payload_scopes,
            'iss'    => 'http://api.mysite.com',
        ]);

        $payload = $jwt->decode($token);
        return $this->respond([
          'token' => $token
        ]);
      }       
    }       
    return $this->failUnauthorized();
  }
}