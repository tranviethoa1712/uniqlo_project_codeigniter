<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Nếu cố tình vào home mà chưa đăng nhập => đẩy về login
        if (!$session->get('manager_login')) {
            // Đẩy về thì view ra luôn để tránh redirect vô hạn
            if (current_url() === base_url().'login') {
                return view('admin/layouts/headerLogin')
                . view('admin/manager/login')
                . view('admin/layouts/footer');        
            }
            return redirect('login'); 
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}