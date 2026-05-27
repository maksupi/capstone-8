<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Bypass filter untuk POST (submit form)
        if (strtolower($request->getMethod()) === 'post') {
            return;
        }

        $session = session();

        if (!$session->has('isLoggedIn') || $session->get('isLoggedIn') !== true) {
            return redirect()->to(site_url('login'))
                ->with('failed', 'Silakan login terlebih dahulu.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // kosong
    }
}