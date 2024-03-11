<?php
namespace App\Controllers\Enduser;

use App\Services\UserService;
use CodeIgniter\Exceptions\PageNotFoundException;


class CategoriesCustomerController extends BaseControllerUser{

    public $customerModel;
    private $pathView = 'endUser/customers/pages/';
    private $pathViewLayout = 'endUser/layouts/';
    protected $request;
    protected $service;

    public function __construct() 
    {
        $this->service = new UserService;
    }

    public function viewCustomer($page = '', $data)
    {
        if (! is_file(APPPATH . 'Views/endUser/customers/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        
        return view($this->pathViewLayout.'baseCategory') 
        . view($this->pathViewLayout.'header', $data)
        . view($this->pathView . $page)
        . view($this->pathViewLayout.'footer');
    }

    public function category() 
    {
        $gioitinh = $this->request->getGet('gioitinh');
        $dataCategories = $this->service->getCategories();
        $dataProductAttribute = $this->service->getProductAttribute();
        $dataProductGender = $this->service->getProductGender($gioitinh);
        $data = [
            'categories' => $dataCategories,
            'gioitinh' => $gioitinh,
            'products' => $dataProductGender,
            'attributeProduct' => $dataProductAttribute,
        ];

        return $this->viewCustomer('category', $data);
    }
}