<?php

namespace App\Services;

use App\Models\CustomerModel;
use App\Common;
use App\Common\ResultUtils;
use Exception;

class UserService extends BaseService
{
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
        // die(var_dump($requestData->getGet));
        foreach ($requestData->getGet() as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        $vnpSecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);
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
        $vnpTranId = $inputData['vnp_TransactionNo']; // Mã giao dịch tại VNPAY
        $vnpBankCode = $inputData['vnp_BankCode']; // Ngân hàng thanh toán
        $vnpBankTranNo = $inputData['vnp_BankTranNo']; // Ngân hàng thanh toán
        $vnpAmount = $inputData['vnp_Amount'] / 100; // Số tiền thanh toán VNPAY phản hồi
        $vnpCreateDate = $inputData['vnp_PayDate']; // Số tiền thanh toán VNPAY phản hồi
        $vnpOrderInfo = $inputData['vnp_OrderInfo']; // Số tiền thanh toán VNPAY phản hồi

        $status = 0; // Là trạng thái thanh toán của giao dịch chưa có IPN lưu tại hệ thống của merchant chiều khởi tạo URL thanh toán.
        $orderCode = $inputData['vnp_TxnRef'];

        try {
            //Check Orderid    
            //Kiểm tra checksum của dữ liệu
            if ($secureHash == $vnpSecureHash) {
                //Lấy thông tin đơn hàng lưu trong Database và kiểm tra trạng thái của đơn hàng, mã đơn hàng là: $orderId            
                //Việc kiểm tra trạng thái của đơn hàng giúp hệ thống không xử lý trùng lặp, xử lý nhiều lần một giao dịch
                //Giả sử: $order = mysqli_fetch_assoc($result);   

                $order = $this->customerModel->getOrderTransaction($orderCode);

                // die(var_dump($val));                      
                if ($order != NULL) {
                    foreach ($order as $key => $val) {
                        // if($val["total_price"] == $vnpAmount) //Kiểm tra số tiền thanh toán của giao dịch: giả sử số tiền kiểm tra là đúng. ($order["Amount"] == $vnpAmount)
                        if ($val["total_price"] == $vnpAmount) //Kiểm tra số tiền thanh toán của giao dịch: giả sử số tiền kiểm tra là đúng. ($order["Amount"] == $vnpAmount)
                        {
                            if ($val["status"] != NULL && $val["status"] == 0) {
                                if ($inputData['vnp_ResponseCode'] == '00' || $inputData['vnp_TransactionStatus'] == '00') {
                                    // die($inputData['vnp_TransactionStatus']);
                                    $status = 1; // Trạng thái thanh toán thành công
                                } else {
                                    // die('loi khac');
                                    $status = 2; // Trạng thái thanh toán thất bại -> lỗi
                                }
                                // Cập nhật kết quả thanh toán, tình trạng đơn hàng vào DB
                                $this->customerModel->updateOrderTransactionStatus($orderCode, $status); // Update status order_transaction
                                // insert order và online_payment nếu thành công
                                if ($status == 1) {
                                    $this->customerModel->submitOrderOnlinePayment($val['fullname'], $val['address'], $val['phone_number'], $val['total_price'], $orderCode, $vnpBankCode, $vnpBankTranNo, $vnpTranId, $vnpOrderInfo, $vnpCreateDate);
                                }
                                //
                                //Trả kết quả về cho VNPAY: Website/APP TMĐT ghi nhận yêu cầu thành công                
                                $returnData['messageCode'] = '00';
                                $returnData['message'] = 'Xác nhận thành công!';
                            } else {
                                $returnData['messageCode'] = '02';
                                $returnData['message'] = 'Đơn hàng đã được xác nhận sẵn!';
                            }
                        } else {
                            $returnData['messageCode'] = '04';
                            $returnData['message'] = 'Số tiền hóa đơn không đúng';
                        }
                    }
                } else {
                    $returnData['messageCode'] = '01';
                    $returnData['message'] = 'Đơn hàng không được tìm thấy';
                }
            } else {
                $returnData['messageCode'] = '97';
                $returnData['message'] = 'Invalid signature';
            }
        } catch (Exception $e) {
            $returnData['messageCode'] = '99';
            $returnData['message'] = 'Unknow error';
        }
        //Trả lại VNPAY theo định dạng JSON
        echo json_encode($returnData);
        return $returnData;
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

    public function addToCart($color_prd, $size_prd, $quantity_prd, $idsanpham)
    {
        return $this->customerModel->addToCart($color_prd, $size_prd, $quantity_prd, $idsanpham);
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

    public function deleteItemCart($id)
    {
        unset($_SESSION['cart'][$id]);
    }

    public function updateQuantityItemCart($id_prd, $quantity)
    {
        $_SESSION['cart'][$id_prd]['quantity'] = $quantity;
    }

    public function RegisterCustomer($requestData)
    {
        $validate = $this->validateAddCustomer($requestData);

        if ($validate->getErrors()) {
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

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $vnpUrl = VNPAY_URL;
        $vnpReturnurl = VNPAY_RETURN_URL;
        $vnpTmnCode = VNPAY_TMNCODE; //Mã website tại VNPAY 
        $vnpHashSecret = VNPAY_HASH_SECRET; //Chuỗi bí mật

        $vnpTxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này 

        $vnpOrderInfo = strtoupper($fullname . 'chuyen khoan');
        $vnpOrderType = VNPAY_ORDER_TYPE;
        $vnpAmount = $totalPrice * 100;
        $vnpLocale = 'vn';
        $vnpBankCode = VNPAY_BANK_CODE;
        $vnpIpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnpTmnCode,
            "vnp_Amount" => $vnpAmount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnpIpAddr,
            "vnp_Locale" => $vnpLocale,
            "vnp_OrderInfo" => $vnpOrderInfo,
            "vnp_OrderType" => $vnpOrderType,
            "vnp_ReturnUrl" => $vnpReturnurl,
            "vnp_TxnRef" => $vnpTxnRef,
        );

        if (isset($vnpBankCode) && $vnpBankCode != "") {
            $inputData['vnp_BankCode'] = $vnpBankCode;
        }

        //var_dump($inputData);
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

        $vnpUrl = $vnpUrl . "?" . $query;
        if (isset($vnpHashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnpHashSecret); //  
            $vnpUrl .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'data' => $vnpUrl
        );
        if ($requestData->getPost('vnpay')) {
            // Target to compare info with vnpay
            $this->submitOrderTransaction($fullname, $address, $phoneNumber, $totalPrice, $vnpTxnRef);
            header('Location: ' . $vnpUrl);
            die();
        } else {
            echo json_encode($returnData);
        }
    }
}
