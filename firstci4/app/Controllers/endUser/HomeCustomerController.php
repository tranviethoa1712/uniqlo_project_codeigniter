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
        $data = [
            'categories' => $dataCategories,
        ];

        return $this->viewCustomer('member-detail', 'baseMemberDetail', $data);
    }

    public function cart()
    {
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

    public function addToCart()
    {
        $color_prd = $this->request->getPost('color_prd');
        $size_prd = $this->request->getPost('size_prd');
        $quantity_prd = $this->request->getPost('quantity_prd');
        $id_prd = $this->request->getPost('id_prd');

        $this->service->addToCart($color_prd, $size_prd, $quantity_prd, $id_prd);

        return redirect('user/myCart');
    }

    public function deleteItemCart()
    {
        $id_prd = $this->request->getPost('idProduct');
        return $this->service->deleteItemCart($id_prd);
    }

    public function updateQuantityItemCart()
    {
        $id_prd = $this->request->getPost('idProduct');
        $quantity = $this->request->getPost('valueQuantity');
        return $this->service->updateQuantityItemCart($id_prd, $quantity);
    }

    public function order()
    {
        $dataCategories = $this->service->getCategories();
        $data = [
            'categories' => $dataCategories,
        ];

        return $this->viewCustomer('order', 'baseOrder', $data);
    }

    public function doOrder()
    {
        $fullname = $this->request->getPost('fullname');
        $address = $this->request->getPost('address');
        $phoneNumber = $this->request->getPost('phoneNumber');
        $totalPrice = $this->request->getPost('totalPrice'); 
        if ($this->request->getPost('submitOrder')) {
            $result = $this->service->submitOrder($fullname, $address, $phoneNumber, $totalPrice);
            if (!$result) {
                return redirect('user/myOrder');
            }
            return redirect('user/orderSuccess');
        } elseif ($this->request->getPost('vnpay')) {
            $newdata = [
                'fullNameOrder'  => $fullname,
                'addressOrder'     => $address,
                'phoneNumberOrder' => $phoneNumber,
                'totalPriceOrder' => $totalPrice,
            ];
            
            $this->session->set($newdata);
            
            $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = "http://localhost/user/orderSuccess";
            $vnp_TmnCode = "PYY55LE8"; //Mã website tại VNPAY 
            $vnp_HashSecret = "JEBPLUFFDQLMZCCGNKWFJXOBIHBISEST"; //Chuỗi bí mật

            $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = 'Noi dung thanh toan';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $totalPrice * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //127.0.0.1
            //Add Params of 2.0.1 Version
            // $vnp_ExpireDate = $_POST['txtexpire'];
            //Billing
            $vnp_Bill_Mobile = $phoneNumber;
            // $vnp_Bill_Email = $_POST['txt_billing_email'];
            $fullName = trim((string)$fullname);
            if (isset($fullName) && trim($fullName) != '') {
                $name = explode(' ', $fullName);
                $vnp_Bill_FirstName = array_shift($name);
                $vnp_Bill_LastName = array_pop($name);
            }
            $vnp_Bill_Address = $address;
            // $vnp_Bill_City = $_POST['txt_bill_city'];
            // $vnp_Bill_Country = $_POST['txt_bill_country'];
            // $vnp_Bill_State = $_POST['txt_bill_state'];
            // Invoice
            $vnp_Inv_Phone = $phoneNumber;
            // $vnp_Inv_Email = $_POST['txt_inv_email'];
            // $vnp_Inv_Customer = $_POST['txt_inv_customer'];
            $vnp_Inv_Address = $address;
            // $vnp_Inv_Company = $_POST['txt_inv_company'];
            // $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
            // $vnp_Inv_Type = $_POST['cbo_inv_type'];
            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                // "vnp_ExpireDate" => $vnp_ExpireDate,
                // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
                // "vnp_Bill_Email" => $vnp_Bill_Email,
                // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
                // "vnp_Bill_LastName" => $vnp_Bill_LastName,
                // "vnp_Bill_Address" => $vnp_Bill_Address,
                // "vnp_Bill_City" => $vnp_Bill_City,
                // "vnp_Bill_Country" => $vnp_Bill_Country,
                // "vnp_Inv_Phone" => $vnp_Inv_Phone,
                // "vnp_Inv_Email" => $vnp_Inv_Email,
                // "vnp_Inv_Customer" => $vnp_Inv_Customer,
                // "vnp_Inv_Address" => $vnp_Inv_Address,
                // "vnp_Inv_Company" => $vnp_Inv_Company,
                // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
                // "vnp_Inv_Type" => $vnp_Inv_Type
            );
            
            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            
            // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            // }

            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
                $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00', 'message' => 'success', 'data' => $vnp_Url
            );
            
            if ($this->request->getPost('vnpay')) {
                header('Location: ' . $vnp_Url);
                die();
            } else {
                echo json_encode($returnData);
            }
            // vui lòng tham khảo thêm tại code demo
        }
    }

    public function orderSuccessView()
    {
        $dataCategories = $this->service->getCategories();
        $data = [
            'categories' => $dataCategories,
        ];

        if ($this->request->getGet('vnp_TxnRef')) {
            $fullName = $_SESSION['fullNameOrder'];
            $addressOrder = $_SESSION['addressOrder'];
            $phoneNumberOrder = $_SESSION['phoneNumberOrder'];
            $totalPriceOrder = $_SESSION['totalPriceOrder'];
    
            $order_code = $this->request->getGet('vnp_TxnRef');
            $bankCode = $this->request->getGet('vnp_BankCode');
            $bankTranNo = $this->request->getGet('vnp_BankTranNo');
            $transactionNo = $this->request->getGet('vnp_TransactionNo');
            $orderInfo = $this->request->getGet('vnp_OrderInfo');
            $payDate = $this->request->getGet('vnp_PayDate');
            $result = $this->service->submitOrderOnlinePayment($fullName, $addressOrder, $phoneNumberOrder, $totalPriceOrder, $order_code, $bankCode, $bankTranNo, $transactionNo, $orderInfo, $payDate);
            if ($result === false) {
                return redirect('user/myOrder');
            }
            return $this->viewCustomer('orderSuccess', 'baseOrderSuccess', $data);
        }

        return $this->viewCustomer('orderSuccess', 'baseOrderSuccess', $data);
    }
}
