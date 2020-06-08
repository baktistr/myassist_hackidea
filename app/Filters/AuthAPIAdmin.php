<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Ahc\Jwt\JWT;

class AuthAPIAdmin implements FilterInterface
{  
  public function before(RequestInterface $request)
  {
    $response = service('response');
    if($request->hasHeader('x-token-api')) {
      $jwt = new JWT('secret');
      $token = $request->getHeaderLine('x-token-api');
      
      try {
        $payload = $jwt->decode($token);
      } catch (\Exception $e) {
        $err = $e->getMessage();
        return $response->setStatusCode(401);
      }
      
      if(isset($payload['scopes'])) {
        if($payload['scopes']->role == 'admin') {
          return;
        } else {
          return $response->setStatusCode(401);
        }
      } else {
        return $response->setStatusCode(401)->setBody(print_r($payload));
      }
    } else {
      return $response->setStatusCode(404);
    }
  }

  //--------------------------------------------------------------------

  public function after(RequestInterface $request, ResponseInterface $response)
  {
    
  }
}