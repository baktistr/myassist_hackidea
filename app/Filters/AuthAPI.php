<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Ahc\Jwt\JWT;

class AuthAPI implements FilterInterface
{  
  public function before(RequestInterface $request)
  {
    $method = $request->getMethod();
    $response = service('response');    
    if($request->hasHeader('x-token-api')) {
      $jwt = new JWT('secret');
      $token = $request->getHeaderLine('x-token-api');
      
      try {
        $payload = $jwt->decode($token);
      } catch (\Exception $e) {
        $err = $e->getMessage();
        return $response->setStatusCode(401)->setBody('Invalid Token!');
      }
      
      if(isset($payload['scopes'])) {
        $token_role = $payload['scopes']->role;
        if($token_role == 'admin' || $token_role == 'amc') {
          return;
        }         
        if($token_role == 'treg' && ($method === 'get' || $method === 'post')) {
          return;
        }
        if($token_role == 'user' && $method === 'get') {
          return;
        }
      }
    } else {
      return $response->setStatusCode(401)->setBody(var_dump($token));
    }
    return $response->setStatusCode(401)->setBody('aaa');
  }

  //--------------------------------------------------------------------

  public function after(RequestInterface $request, ResponseInterface $response)
  {
    
  }
}