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
        
        if(isset($this->session->customer_login)) {
            return redirect($urlMemberDetail);          
        }

        return $this->viewCustomer('customer-login', 'baseLogin', $data);
    } 
    
    public function doLogin () {
        $checkRequest = $_SERVER['REQUEST_METHOD'];
        $checkSubmit = $this->request->getPost('submitLogin');
        $emaillogin = $this->request->getPost('emaillogin');
        $pwdlogin = $this->request->getPost('pwdlogin');
    
        $this->service->checkLoginCusomer($checkRequest, $checkSubmit, $emaillogin, $pwdlogin);
    }

    public function logOutCustomer () {
        $this->logOutCustomer();

        return redirect('user/userLogin');
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
        $sessionLogin = $this->session->customer_login;
        $sessionCart = $this->session->cart;
        $data = [
            'categories' => $dataCategories,
            'sessionLogin' => $sessionLogin,
            'sessionCart' => $sessionCart
        ];

        return $this->viewCustomer('cart', 'baseCart', $data);
    }

    public function addToCart() {
        $color_prd = $this->request->getPost('color_prd');
        $size_prd = $this->request->getPost('size_prd');
        $quantity_prd = $this->request->getPost('quantity_prd');
        $id_prd = $this->request->getPost('id_prd');
        $sessionLogin = $this->session->customer_login;
        $this->service->addToCart($color_prd, $size_prd, $quantity_prd, $sessionLogin, $id_prd);

        return redirect('user/myCart');
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