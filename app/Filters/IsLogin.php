<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class IsLogin implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = session();
                
        if ($session->has('username'))
        { 
            if ($request->uri->getPath() == 'login')
            {
                return redirect()->to('dashboard');
            }            
        } 
        else
        {
            if($request->uri->getPath() != 'login')
            {
                return redirect()->to('login');
            }
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}