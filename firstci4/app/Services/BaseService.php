<?php
namespace App\Services;

use App\Models\AdminModel;
use App\Models\CustomerModel;

class BaseService {

    /**
     * @var validation
     */

    public $validation;

    protected $adminModel;
    protected $customerModel;

    function __construct()
    {
        $this->validation = \Config\Services::validation();
        $this->adminModel = model(AdminModel::class); 
        $this->customerModel = model(CustomerModel::class);
    } 
}