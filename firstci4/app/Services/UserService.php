<?php
namespace App\Services;

use App\Models\CustomerModel;
use App\Common;
use App\Common\ResultUtils;
use Exception;

class UserService extends BaseService{
    /**
     * The main task:
     * Handle logic for the customer controller
     */
    protected $customerModel;

    function __construct()
    {
        parent::__construct();
        $this->customerModel = model(CustomerModel::class);  
        $this->customerModel->protect(false);  
    } 
 
    public function submitOrder($fullname, $address, $phoneNumber, $totalPrice)
    {
        return $this->customerModel->submitOrder($fullname, $address, $phoneNumber, $totalPrice);
    }

    public function submitOrderTransaction($fullname, $address, $phoneNumber, $totalPrice, $vnpTxnRef) 
    {
        return $this->customerModel->submitOrderTransaction($fullname, $address, $phoneNumber, $totalPrice, $vnpTxnRef);
    }
    
    public function submitOrderOnlinePayment($requestData) 
    {
        $inputData = array();
        $returnData = array();
        
        foreach ($requestData->getGet as $key => $value) {
            if (substr($key, 0, 4) == "vnp") {
                $inputData[$key] = $value;
            }
        }

        $vnpSecureHash = $inputData['vnpSecureHash'];
        unset($inputData['vnpSecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, VNPAY_HASH_SECRET);
        $vnpTranId = $inputData['vnpTransactionNo']; // Mã giao dịch tại VNPAY
        $vnpBankCode = $inputData['vnpBankCode']; // Ngân hàng thanh toán
        $vnpBankTranNo = $inputData['vnp_BankTranNo']; // Ngân hàng thanh toán
        $vnpAmount = $inputData['vnpAmount']/100; // Số tiền thanh toán VNPAY phản hồi
        $vnpCreateDate = $inputData['vnpCreateDate']; // Số tiền thanh toán VNPAY phản hồi
        $vnpOrderInfo = $inputData['vnpOrderInfo']; // Số tiền thanh toán VNPAY phản hồi

        $status = 0; // Là trạng thái thanh toán của giao dịch chưa có IPN lưu tại hệ thống của merchant chiều khởi tạo URL thanh toán.
        $orderCode = $inputData['vnpTxnRef'];
        
        try {
            //Check Orderid    
            //Kiểm tra checksum của dữ liệu
            if ($secureHash == $vnpSecureHash) {
                //Lấy thông tin đơn hàng lưu trong Database và kiểm tra trạng thái của đơn hàng, mã đơn hàng là: $orderId            
                //Việc kiểm tra trạng thái của đơn hàng giúp hệ thống không xử lý trùng lặp, xử lý nhiều lần một giao dịch
                //Giả sử: $order = mysqli_fetch_assoc($result);   
        
                $order = $this->customerModel->getOrderTransaction($orderCode);
                if ($order != NULL) {
                    if($order["total_price"] == $vnpAmount) //Kiểm tra số tiền thanh toán của giao dịch: giả sử số tiền kiểm tra là đúng. ($order["Amount"] == $vnpAmount)
                    {
                        if ($order["status"] != NULL && $order["status"] == 0) {
                            if ($inputData['vnpResponseCode'] == '00' || $inputData['vnpTransactionStatus'] == '00') {
                                $status = 1; // Trạng thái thanh toán thành công
                            } else {
                                $status = 2; // Trạng thái thanh toán thất bại -> lỗi
                            }
                            //Cài đặt Code cập nhật kết quả thanh toán, tình trạng đơn hàng vào DB
                            $this->customerModel->updateOrderTransactionStatus($orderCode, $status);
                            $this->customerModel->submitOrderOnlinePayment($order['fullname'], $order['address'], $order['phone_number'], $order['total_price'], $orderCode, $vnpBankCode, $vnpBankTranNo, $vnpTranId, $vnpOrderInfo, $vnpCreateDate);
                            //
                            //Trả kết quả về cho VNPAY: Website/APP TMĐT ghi nhận yêu cầu thành công                
                            $returnData['RspCode'] = '00';
                            $returnData['Message'] = 'Confirm Success';
                        } else {
                            $returnData['RspCode'] = '02';
                            $returnData['Message'] = 'Order already confirmed';
                        }
                    }
                    else {
                        $returnData['RspCode'] = '04';
                        $returnData['Message'] = 'invalid amount';
                    }
                } else {
                    $returnData['RspCode'] = '01';
                    $returnData['Message'] = 'Order not found';
                }
            } else {
                $returnData['RspCode'] = '97';
                $returnData['Message'] = 'Invalid signature';
            }
        } catch (Exception $e) {
            $returnData['RspCode'] = '99';
            $returnData['Message'] = 'Unknow error';
        }
        //Trả lại VNPAY theo định dạng JSON
        echo json_encode($returnData);
    }
    
    public function getProductsId($idsanpham) 
    {
        return $this->customerModel->getProductsId($idsanpham);
    } 

    public function getUnitColorProduct($skuProduct, $gender) 
    {
        return $this->customerModel->getUnitColorProduct($skuProduct, $gender); 
    } 

    public function getProductAttributeId($idsanpham) 
    {
        return $this->customerModel->getProductAttributeId($idsanpham);
    } 

    public function getProductCategory($iddanhmuc, $gioitinh) 
    {
        return $this->customerModel->getProductCategory($iddanhmuc, $gioitinh);
    } 

    public function getProductAttribute() 
    {
        return $this->customerModel->getProductAttribute();
    } 
    
    public function getCategories() 
    {
        return $this->customerModel->getCategories();
    } 
    
    public function getProductGender($gioitinhGet) 
    {
        return $this->customerModel->getProductGender($gioitinhGet);
    } 

    public function getProducts() 
    {
        return $this->customerModel->getProducts();
    } 

    public function addToCart($color_prd, $size_prd , $quantity_prd, $idsanpham) 
    {
        return $this->customerModel->addToCart($color_prd, $size_prd , $quantity_prd, $idsanpham);
    } 

    public function getAllOrder() 
    {
        return $this->customerModel->getAllOrder();
    } 

    public function getStatusOderData($status) 
    {
        return $this->customerModel->getStatusOderData($status);
    } 

    public function getDetailOrder($orderItemId) 
    {
        return $this->customerModel->getDetailOrder($orderItemId);
    } 

    public function checkPayMethod($order_id) 
    {
        return $this->customerModel->checkPayMethod($order_id);
    } 

    public function deleteItemCart($id) {
        unset($_SESSION['cart'][$id]);
    }

    public function updateQuantityItemCart($id_prd, $quantity) {
        $_SESSION['cart'][$id_prd]['quantity'] = $quantity;
    }

    public function RegisterCustomer($requestData)
    {
        $validate = $this->validateAddCustomer($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();
        unset($dataSave['password_confirm']); 
        $dataSave['password'] = password_hash($dataSave['password'], PASSWORD_BCRYPT);
        
        try {
            $this->customerModel->RegisterCustomer($dataSave['name'], $dataSave['email'], $dataSave['password'], $dataSave['dob'], $dataSave['gender']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Thêm dữ liệu thành công'], 
            ];

        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }

    }

    private function validateAddCustomer($requestData) 
    {
        $rules = [
            'name' => 'max_length[100]',
            'email' => 'valid_email|is_unique[customers.email]',
            'password' => 'max_length[30]|min_length[6]',
            'password_confirm' => 'matches[password]',
            'dob' => 'min_length[8]',
            'gender' => 'min_length[3]',
        ];

        $messages = [
            'name' => [
                'max_length' => 'Tên quá dài, vui lòng nhập {param} ký tự!',
            ],
            'email' => [
                'valid_email' => 'Tài khoản {field} {value} không đúng định dạng!',
                'is_unique' => 'Email đã được đăng ký, vui lòng kiểm tra lại!'
            ],
            'password' => [
                'max_length' => 'Mật khẩu quá dài, vui lòng nhập {param} ký tự!',
                'min_length' => 'Mật khẩu ít nhất là {param} ký tự!',
            ],
            'password_confirm' => [
                'matches' => 'Mật khẩu không khớp!',
            ]
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    public function logOutCustomer()
    {
        $session = session();
        $session->remove('customer_login');
    }

    public function vnpayProcessing($requestData)
    {
        // thông tin khách hàng
        $fullname = $requestData->getPost('fullname');
        $address = $requestData->getPost('address');
        $phoneNumber = $requestData->getPost('phoneNumber');
        $totalPrice = $requestData->getPost('totalPrice'); 
        
        // vnpay config
        $vnpTxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnpAmount = $totalPrice * 100;

        //Billing
        $fullname = trim((string) $fullname);

        if (isset($fullname) && trim($fullname) != '') {
        $name = explode(' ', $fullname);
        $vnpBillFirstName = array_shift($name);
        $vnpBillLastName = array_pop($name);
        }
        $vnpBillAddress = $address;

        // Invoice
        $vnpInvPhone = $phoneNumber;
        $vnpInvAddress = $address;

        
        $inputData = array(
            "vnpVersion" => "2.1.0",
            "vnpTmnCode" => VNPAY_TMNCODE,
            "vnpAmount" => $vnpAmount,
            "vnpCommand" => "pay",
            "vnpCreateDate" => date('YmdHis'),
            "vnpCurrCode" => "VND",
            "vnpIpAddr" => VNPAY_IP_ADDR,
            "vnpLocale" => VNPAY_LOCALE,
            "vnpOrderInfo" => VNPAY_ORDER_INFO,
            "vnpOrderType" => VNPAY_ORDER_TYPE,
            "vnpReturnurl" => VNPAY_RETURN_URL,
            "vnpTxnRef" => $vnpTxnRef,
            "vnpBillFirstName"=>$vnpBillFirstName,
            "vnpBillLastName"=>$vnpBillLastName,
            "vnpBillAddress"=>$vnpBillAddress,
            "vnpInvPhone"=>$vnpInvPhone,
            "vnpInvAddress"=>$vnpInvAddress,
        );
        
        // Check mã ngân hàng
        if (isset($vnpBankCode) && $vnpBankCode != "") {
            $inputData['vnpBankCode'] = $vnpBankCode;
        }

        // Dữ liệu checksum được thành lập dựa trên việc sắp xếp tăng dần của tên tham số
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        
        // Nối data thành dạng GET để trả về URL
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnpUrl = VNPAY_URL . "?" . $query;
        // Mã kiểm tra (checksum) để đảm bảo dữ liệu của giao dịch không bị thay đổi trong quá trình chuyển từ VNPAY về Website TMĐT
        if (defined(VNPAY_HASH_SECRET)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, VNPAY_HASH_SECRET);
            $vnpUrl .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnpUrl
        );
        
        // Redirect sang trang thanh toán vnpay 
        if ($requestData->getPost('vnpay')) {
            //insert order lên order_transaction table để cho việc cập nhật trạng thái cũng như insert thông tin của khách hàng vào orders table chính
            $this->submitOrderTransaction($fullname, $address, $phoneNumber, $totalPrice, $vnpTxnRef);
            header('Location: ' . $vnpUrl);
            die();
        } else {
            echo json_encode($returnData);
        }
    }
}