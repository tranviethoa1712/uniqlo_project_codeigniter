<?php
namespace App\Controllers\Enduser;

use App\Services;
use App\Services\UserService;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProductCustomerController extends BaseControllerUser{

    public $customerModel;
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

    public function detailProduct() { 
        $idsanpham = $this->request->getGet('idsanpham');    
        $skuProduct = $this->request->getGet('sku');

        //collect data
        $dataCategories = $this->service->getCategories();
        $dataProductsId = $this->service->getProductsId($idsanpham);
        $dataUnit = $this->service->getUnitColorProduct($skuProduct); 
        $dataProductAttributeId = $this->service->getProductAttributeId($idsanpham);
        if(!$dataProductsId) {
            return redirect('errors/404');
        }

        $color_prd = $this->request->getPost('color_prd');
        $size_prd = $this->request->getPost('size_prd');
        $quantity_prd = $this->request->getPost('quantity_prd');
        $checkLogin = $this->session->customer_login;

        $checkSubmit = $this->request->getPost('addtocart');
        if(isset($checkSubmit)){
            $this->service->addToCart($checkSubmit, $color_prd, $size_prd , $quantity_prd, $checkLogin, $idsanpham);
        }
        
        $data = [
            'products' => $dataProductsId,
            'attributeProductId' => $dataProductAttributeId,
            'categories' => $dataCategories,
            'unit' => $dataUnit
        ];

        return $this->viewCustomer('detail-product', 'baseDetailPrds', $data);
    }

    public function listProduct() {
        $iddanhmuc = $this->request->getGet('iddanhmuc');
        $gioitinh = $this->request->getGet('gioitinh');
        $dataCategories = $this->service->getCategories();
        $dataProducts = $this->service->getProductCategory($iddanhmuc, $gioitinh);
        $dataProductAttribute = $this->service->getProductAttribute();
        $data = [
            'categories' => $dataCategories,
            'products' => $dataProducts,
            'attributeProduct' => $dataProductAttribute,
            'gioitinh' => $gioitinh
        ];
    
        return $this->viewCustomer('listProduct', 'baseListPrds', $data);
    }
}