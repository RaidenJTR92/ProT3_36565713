<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        // Verifica si el usuario no está logueado
        if (!session()->get('logged_in')) {
            // Redirige a la página de login
            return redirect()->to('/login');
        }

        // Si el usuario está logueado, permite que continúe la solicitud
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
        // Lógica después de procesar la solicitud
    }
}
