<?php

namespace App\Services;

use App\Models\AdminModel;
use App\Common\ResultUtils;
use Exception;

class LoginService extends BaseService
{

    protected $adminModel;

    function __construct()
    {
        parent::__construct();
        $this->adminModel = model(AdminModel::class);
    }


    public function hasLoginInfo($requestData)
    {
        $validate = $this->validateLogin($requestData);
        if ($validate->getErrors()) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => $validate->getErrors(),
            ];
        } 

        $dataSave = $requestData->getPost();

        $result = $this->adminModel->LoginAdmin($dataSave['loginAdmin'], $dataSave['emailAddress']);
        if (!$result) {
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => [
                    'notExist' => 'Email chưa được đăng ký!'
                ]
            ];
        } 

        if (!password_verify($dataSave['password'], $result[0]['password'])) {
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
        
        $session->set('manager_login', $result);

        return [
            'status' => ResultUtils::STATUS_CODE_OK,
            'massageCode' => ResultUtils::MESSAGE_CODE_OK,
            'massages' => null
        ];
    }

    private function validateLogin($requestData)
    {
        $rules = [
            'emailAddress' => 'valid_email',
            'password' => 'max_length[30]|min_length[6]',
        ];

        $messages = [
            'name_update' => [
                'valid_email' => 'Tài khoản {field} {value} không đúng định dạng',
            ],
            'password' => [
                'min_length' => 'Mật khẩu ít nhất là {param} ký tự!',
                'max_length' => 'Mật khẩu quá dài, vui lòng nhập {param} ký tự!',
            ],
        ];


        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run();

        return $this->validation;
    }

    public function logOutUser(){
        $session = session();
        $session->destroy();
    }
}
