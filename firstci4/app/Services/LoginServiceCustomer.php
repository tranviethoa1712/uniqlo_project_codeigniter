<?php

namespace App\Services;

use App\Models\CustomerModel;
use App\Common\ResultUtils;
use Exception;

class LoginServiceCustomer extends BaseService
{
    /**
     * The main task:
     * Handle logic for the login controller 
     */

    protected $customerModel;

    function __construct()
    {
        parent::__construct();
        $this->customerModel = model(CustomerModel::class);
    }

    public function hasLoginInfo($requestData)
    {
        // die(var_dump($requestData->getPost()));
        $validate = $this->validateLogin($requestData);
        if ($validate->getErrors()) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => $validate->getErrors(),
            ];
        } 

        $dataSave = $requestData->getPost();
        
        $result = $this->customerModel->checkLoginCusomer($dataSave['submitLogin'], $dataSave['emaillogin']);
        if (!$result) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => [
                    'notExist' => 'Email chưa được đăng ký!'
                ]
            ];
        } 

        if (!password_verify($dataSave['pwdlogin'], $result[0]['password'])) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => [
                    'wrongPass' => 'Mật khẩu không đúng!'
                ]
            ];
        } 

        // Save to Session
        $session = session();

        unset($result['password']);
        
        $session->set('customer_login', $result);

        return [
            'status' => ResultUtils::STATUS_CODE_OK,
            'massageCode' => ResultUtils::MESSAGE_CODE_OK,
            'massages' => null
        ];
    }

    private function validateLogin($requestData)
    {
        $rules = [
            'emaillogin' => 'valid_email',
            'pwdlogin' => 'max_length[30]|min_length[6]',
        ];

        $messages = [
            'emaillogin' => [
                'valid_email' => 'Tài khoản {value} không đúng định dạng',
            ],
            'pwdlogin' => [
                'max_length' => 'Mật khẩu quá dài, vui lòng nhập {param} ký tự!',
                'min_length' => 'Mật khẩu ít nhất là {param} ký tự!',
            ],
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
        $session->destroy();
    }
}
