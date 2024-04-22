<?php

namespace App\Controllers\Enduser;

use App\Services\LoginServiceCustomer;
use App\Common\ResultUtils;
use CodeIgniter\Exceptions\PageNotFoundException;


class LoginCustomerController extends BaseControllerUser
{

    private $pathView = 'endUser/customers/pages/';
    private $pathViewLayout = 'endUser/layouts/';
    protected $request;
    protected $session;
    protected $service;

    public function __construct()
    {
        $this->session = session();
        $this->service = new LoginServiceCustomer;
    }

    public function viewCustomer($page = '', $headHtml,  $data = [])
    {
        if (!is_file(APPPATH . 'Views/endUser/customers/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        return view($this->pathViewLayout . $headHtml)
            . view($this->pathViewLayout . 'header', $data)
            . view($this->pathView . $page)
            . view($this->pathViewLayout . 'footer');
    }
    
    
    public function login()
    {
        $data = [];
        $data['pageTitle'] = 'Đăng nhập'; // Capitalize the first letter
                
        if (session()->has('customer_login')) {
            return redirect('user/aboutAccount');
        }
        
        return $this->viewCustomer('customer-login', 'baseLogin', $data);
    }
    
    public function doLogin()
    {
        $result = $this->service->hasLoginInfo($this->request);
        if ($result['status'] === ResultUtils::STATUS_CODE_OK) {
            return redirect('user/aboutAccount');
        } elseif ($result['status'] === ResultUtils::STATUS_CODE_ERR) {
            return redirect('user/userLogin')->back()->withInput()->with($result['massageCode'], $result['massages']);
        }
    }

    public function logOutCustomer()
    {
        $this->service->logOutCustomer();
        return redirect('user/userLogin');
    }
}
