<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if(!isset($_SESSION['id'])){
            session_destroy();
            error_reporting( E_ALL & ~E_DEPRECATED );
            return redirect()->to('/');
        }

        
        // if (!isset($_SESSION['id']) && $_SESSION['type'] != 1) {
        //     session_destroy();
        //     return redirect()->to('/login');
        // }
    }
}