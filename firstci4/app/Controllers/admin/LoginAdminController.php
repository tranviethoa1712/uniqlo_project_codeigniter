<?php

namespace App\Controllers\Admin;

use App\Services\LoginService;
use App\Common\ResultUtils;

class LoginAdminController extends BaseControllerAdmin
{
    private $pageTitle = 'Đăng nhập quản trị';
    private $pathView = 'admin/';
    private $pathViewLayout = 'admin/layouts/';
    protected $serviceLogin;
    public function __construct() {
        $this->serviceLogin = new LoginService;  
    }
    
    public function index()
    {
        $data = [''];
        $data['pageTitle'] = $this->pageTitle; // Capitalize the first letter

        // Nếu đã đăng nhập => đẩy thẳng về home
        if(session()->has('manager_login')){
            return redirect('admin/home');
        }

        return view($this->pathViewLayout.'headerLogin', $data)
        . view($this->pathView . 'manager/login')
        . view($this->pathViewLayout.'footer');
    }
    
    public function doLogin() 
    {
        $result = $this->serviceLogin->hasLoginInfo($this->request);    
        if ($result['status'] === ResultUtils::STATUS_CODE_OK) {
            return redirect('admin/home');
        } elseif ($result['status'] === ResultUtils::STATUS_CODE_ERR) {
            return redirect('login')->back()->withInput()->with($result['massageCode'], $result['massages']);
        }
    }

    public function logout() 
    {
        $this->serviceLogin->logOutUser();
        return redirect('login');
    }
}