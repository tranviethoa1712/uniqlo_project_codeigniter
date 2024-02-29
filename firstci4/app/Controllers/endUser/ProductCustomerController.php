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
        $gender = $this->request->getGet('gioitinh');

        //collect data
        $dataCategories = $this->service->getCategories();
        $dataProductsId = $this->service->getProductsId($idsanpham);
        $dataUnit = $this->service->getUnitColorProduct($skuProduct, $gender); 
        $dataProductAttributeId = $this->service->getProductAttributeId($idsanpham);

        if(!$dataProductsId) {
            return redirect('errors/404');
        }

        $data = [
            'products' => $dataProductsId,
            'attributeProductId' => $dataProductAttributeId,
            'categories' => $dataCategories,
            'unitColor' => $dataUnit,
            'id_prd' => $idsanpham
        ];
        
        return $this->viewCustomer('detail-product', 'baseDetailPrds', $data);
    }
    
    public function addProductToCart () { 
        $id = $this->request->getPost('id_prd');
        $color_prd = $this->request->getPost('color_prd');
        $size_prd = $this->request->getPost('size_prd');
        $quantity_prd = $this->request->getPost('quantity_prd');
        $checkLogin = $this->session->customer_login;
    
        $this->service->addToCart($color_prd, $size_prd , $quantity_prd, $checkLogin, $id);

        return redirect('user/myCart');
    }

    public function listProduct() {
        $iddanhmuc = $this->request->getGet('iddanhmuc');
        $gioitinh = $this->request->getGet('gioitinh');
        $dataCategories = $this->service->getCategories();
        $dataProducts = $this->service->getProductGender($gioitinh);
        $dataProductAttribute = $this->service->getProductAttribute();
        $data = [
            'categories' => $dataCategories,
            'products' => $dataProducts,
            'attributeProduct' => $dataProductAttribute,
            'gioitinh' => $gioitinh,
            'category_id' => $iddanhmuc
        ]; 
    
        return $this->viewCustomer('listProduct', 'baseListPrds', $data);
    }
}