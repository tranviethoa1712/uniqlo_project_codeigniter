<?php
namespace App\Controllers\Enduser;

use App\Services\UserService;
use CodeIgniter\Exceptions\PageNotFoundException;

class HomeCustomerController extends BaseControllerUser{

    private $pathView = 'endUser/customers/pages/';
    private $pathViewLayout = 'endUser/layouts/';
    protected $request;
    protected $session;
    protected $service;

    public function __construct() {
        $this->session = session();
        $this->service = new UserService;
    }

    public function viewCustomer($page = '', $headHtml,  $data)
    {
        if (! is_file(APPPATH . 'Views/endUser/customers/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }        
        
        return view($this->pathViewLayout . $headHtml) 
        . view($this->pathViewLayout.'header', $data)
        . view($this->pathView . $page)
        . view($this->pathViewLayout.'footer');
    }

    public function home() {
        $gioitinhGet = $this->request->getGet('gioitinh');

        $dataCategories = $this->service->getCategories();
        $daraProductGender = $this->service->getProductGender($gioitinhGet);    
        $dataProducts = $this->service->getProducts();    
        // $dataUnit = $this->service->getUnitColorProduct(); 
    
        $data = [
            'categories' => $dataCategories,
            'productGender' => $daraProductGender,
            'products' => $dataProducts,
            'gioitinh' => $gioitinhGet
        ];
        return $this->viewCustomer('home', 'baseHome', $data);
    }

    public function login()
    {
        $data = [];
        $urlMemberDetail = base_url('user/aboutAccount');
        
        
        $checkRequest = $_SERVER['REQUEST_METHOD'];
        $checkSubmit = $this->request->getPost('submitLogin');
        $emaillogin = $this->request->getPost('emaillogin');
        $pwdlogin = $this->request->getPost('pwdlogin');

        if(isset($this->session->customer_login)) {
            header("location: ".$urlMemberDetail);           
        }

        $this->service->checkLoginCusomer($checkRequest, $checkSubmit, $emaillogin, $pwdlogin);

        return $this->viewCustomer('customer-login', 'baseLogin', $data);
    } 

    public function register()
    {
        $data = [];
        
        return $this->viewCustomer('customer-register', 'baseRegister', $data);
    }

    public function doRegister()
    {
        $data = [];
        
        $result = $this->service->RegisterCustomer($this->request); 
        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function memberDetail() {
        $dataCategories = $this->service->getCategories();
        $data = [
            'categories' => $dataCategories,
        ];
 
        return $this->viewCustomer('member-detail', 'baseMemberDetail', $data);
    }

    public function cart() { 
        $dataCategories = $this->service->getCategories();
        $data = [
            'categories' => $dataCategories,
        ];

        return $this->viewCustomer('cart', 'baseCart', $data);
    }

    public function order() {
        $dataCategories = $this->service->getCategories();
        $data = [
            'categories' => $dataCategories,
        ];

        $checkSubmit = $this->request->getPost('submitOrder');
        $fullname = $this->request->getPost('fullname');
        $address = $this->request->getPost('address');
        $phoneNumber = $this->request->getPost('phoneNumber');
        $totalPrice = $this->request->getPost('totalPrice');
        
        $customer_login = $this->session->customer_login;
        $cart = $this->session->cart;
        if(isset($checkSubmit)) {
            $this->service->submitOrder($checkSubmit, $fullname, $address, $phoneNumber, $totalPrice, $customer_login, $cart);
        }
        return $this->viewCustomer('order', 'baseOrder', $data);
    }

}