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
        return $response->setStatusCode(401);
      }
      
      if(isset($payload['scopes'])) {
        if($payload['scopes']->role == 'admin' || $payload['scopes']->role == 'amc') {
          return;
        } 
      }
    }
    return $response->setStatusCode(401);
  }

  //--------------------------------------------------------------------

  public function after(RequestInterface $request, ResponseInterface $response)
  {
    
  }
}