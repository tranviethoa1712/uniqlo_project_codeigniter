<?php

namespace App\Controllers\Enduser;

use App\Services\UserService;
use CodeIgniter\Exceptions\PageNotFoundException;

class HomeCustomerController extends BaseControllerUser
{

    private $pathView = 'endUser/customers/pages/';
    private $pathViewLayout = 'endUser/layouts/';
    protected $request;
    protected $session;
    protected $service;

    public function __construct()
    {
        $this->session = session();
        $this->service = new UserService;
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

    public function home()
    {
        // unset($_SESSION['customer_login']);
        $gioitinhGet = $this->request->getGet('gioitinh');

        $dataCategories = $this->service->getCategories();
        $daraProductGender = $this->service->getProductGender($gioitinhGet);
        $dataProducts = $this->service->getProducts();

        // $this->service->logOutCustomer();
        $data = [
            'categories' => $dataCategories,
            'productGender' => $daraProductGender,
            'products' => $dataProducts,
            'gioitinh' => $gioitinhGet
        ];
        return $this->viewCustomer('home', 'baseHome', $data);
    }

    public function register()
    {
        $data = [];

        return $this->viewCustomer('customer-register', 'baseRegister', $data);
    }

    public function doRegister()
    {
        $result = $this->service->RegisterCustomer($this->request);
        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function memberDetail()
    {
        $dataCategories = $this->service->getCategories();
        if($this->request->getGet('currentMenu')) {
            $data = [
                'categories' => $dataCategories,
                'currentMenu' => $this->request->getGet('currentMenu'),
            ];
        } else {
            $data = [
                'categories' => $dataCategories,
                'currentMenu' => '',
            ];
        }
        
        if(isset($_SESSION['customer_login'])) {
            return $this->viewCustomer('member-detail', 'baseMemberDetail', $data);
        } else {
            return redirect('user/userLogin');
        }
    }
}
