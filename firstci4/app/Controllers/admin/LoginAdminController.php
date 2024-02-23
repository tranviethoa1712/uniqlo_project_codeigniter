<?php

namespace App\Controllers\Admin;

use App\Services\LoginService;
use App\Common\ResultUtils;
use CodeIgniter\Exceptions\PageNotFoundException;


class LoginAdminController extends BaseControllerAdmin
{

    private $pageTitle = 'Quản lý sản phẩm';
    private $pathView = 'admin/';
    private $pathViewLayout = 'admin/layouts/';
    protected $service;
    public function __construct() {
        $this->service = new LoginService;  
    }
    
    public function index()
    {
        $data = [''];
        $data['pageTitle'] = 'Đăng nhập quản trị'; // Capitalize the first letter

        // Nếu đã đăng nhập => đẩy thẳng về home
        if(session()->has('manager_login')){
            return redirect('admin/home');
        }

        return view($this->pathViewLayout.'headerLogin', $data)
        . view($this->pathView . 'manager/login')
        . view($this->pathViewLayout.'footer');

    }

    public function login() {
        $data = [''];
        $data['pageTitle'] = 'Đăng nhập quản trị'; // Capitalize the first letter        
    }
    
    public function doLogin() {
        $result = $this->service->hasLoginInfo($this->request);    
        if ($result['status'] === ResultUtils::STATUS_CODE_OK) {
            return redirect('admin/home');
        } elseif ($result['status'] === ResultUtils::STATUS_CODE_ERR) {
            return redirect('login')->with($result['massageCode'], $result['massages']);
        }
    }

    public function logout() {
        $this->service->logOutUser();
        return redirect('login');
    }
}
