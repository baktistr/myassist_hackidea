<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthAdmin implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $role = session('role');
        if($role!='admin') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();	
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}