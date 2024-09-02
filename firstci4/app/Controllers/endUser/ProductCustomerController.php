<?php
namespace App\Controllers\Enduser;

use CodeIgniter\Exceptions\PageNotFoundException;

class ProductCustomerController extends BaseControllerUser
{
    private $pathView = 'endUser/customers/pages/';
    private $pathViewLayout = 'endUser/layouts/';

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

    public function detailProduct() 
    { 
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
    
    public function addProductToCart() 
    { 
        if($this->request->isAJAX()) {
            $id = $this->request->getVar('id_prd');
            $color_prd = $this->request->getVar('color_prd');
            $size_prd = $this->request->getVar('size_prd');
            $quantity_prd = $this->request->getVar('quantity_prd');
        
            $result = $this->service->addToCart($color_prd, $size_prd , $quantity_prd, $id);
    
            return json_encode($result);
        } else {
            return json_encode('Yêu cầu thất bại');
        }
    }

    public function listProduct() 
    {
        $iddanhmuc = $this->request->getGet('iddanhmuc');
        $gioitinh = $this->request->getGet('gioitinh');
        $dataCategories = $this->service->getCategories();
        $dataProducts = $this->service->getProductCategory($iddanhmuc, $gioitinh);
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