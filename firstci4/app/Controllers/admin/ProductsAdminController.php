<?php

namespace App\Controllers\Admin;

use App\Services\AdminService;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProductsAdminController extends BaseControllerAdmin
{

    private $pageTitle = 'Quản lý sản phẩm';
    private $pathView = 'admin/';
    private $pathViewLayout = 'admin/layouts/';
    private $service;

    public function __construct()
    {
        $this->service = new AdminService;
    }

    public function viewAdmin($page = '', $data)
    {
        if (!is_file(APPPATH . 'Views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view($this->pathViewLayout . 'header', $data)
            . view($this->pathViewLayout . 'sidebar')
            . view($this->pathViewLayout . 'breadcrumb')
            . view($this->pathView . $page)
            . view($this->pathViewLayout . 'footer');
    }

    public function add()
    {
        $dataProduct = $this->service->getProductCategory();
        $dataCategories = $this->service->getCategories();
        $addProductPost = $this->request->getPost('addProduct');
        $categoryIdPost = $this->request->getPost('category_id');
        $codeProductPost = $this->request->getPost('code_product');
        $titleProductPost = $this->request->getPost('title_product');
        $priceProductPost = $this->request->getPost('price_product');
        $thumbnailsProductPost = $this->request->getFiles('thumbnails');
        $imagesProductPost = $this->request->getFiles('images');
        $genderProductPost = $this->request->getPost('gender_product');
        $descriptionProductPost = $this->request->getPost('description_product');
        $statusProductPost = $this->request->getPost('status_product');

        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Thêm sản phẩm',
            'products' => $dataProduct,
            'categories' => $dataCategories,
        ];

        $this->service->addProductModel($addProductPost, $categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $thumbnailsProductPost, $imagesProductPost, $genderProductPost, $descriptionProductPost, $statusProductPost);

        return $this->viewAdmin('products/addProduct', $data);
    }


    public function update($idsanpham)
    {
        $dataCategories = $this->service->getCategories();
        $dataProduct = $this->service->getProductId($idsanpham);
        $data = [
            'pageTitle' => 'Quản lý danh mục sản phẩm',
            'dashboard' => 'Cập nhật sản phẩm',
            'product' => $dataProduct,
            'categories' => $dataCategories
        ];

        $categoryIdPost = $this->request->getPost('category_id');
        $codeProductPost = $this->request->getPost('code_product');
        $titleProductPost = $this->request->getPost('title_product');
        $priceProductPost = $this->request->getPost('price_product');
        $thumbnailsProductPost = $this->request->getFiles('thumbnails');
        $imagesProductPost = $this->request->getFiles('images');
        $genderProductPost = $this->request->getPost('gender_product');
        $descriptionProductPost = $this->request->getPost('description_product');
        $statusProductPost = $this->request->getPost('status_product');
        $updateProduct = $this->request->getPost('updateProduct');

        $this->service->updateProductModel($updateProduct, $categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $thumbnailsProductPost, $imagesProductPost, $genderProductPost, $descriptionProductPost, $statusProductPost, $idsanpham);

        return $this->viewAdmin('products/tools/update', $data);
    }

    public function delete($idsanpham)
    {
        $this->service->deleteProductModel($idsanpham);

        $filterSubmit = $this->request->getPost('filterSubmit');
        $containerInputFilter = $this->request->getPost('containerInputFilter');
        $page = $this->request->getGet('page');
        // $thumbnailsProductPost = $this->request->getFiles('thumbnails');

        $dataProduct = $this->service->getProducts();
        $dataCategories = $this->service->getCategories();
        $dataFilter = $this->service->productFilter($filterSubmit, $containerInputFilter, $page);
        $paginationProducts = $this->service->paginationProducts($page);

        $data = [
            'pageTitle' => 'Quản lý sản phẩm',
            'dashboard' => 'Danh sách sản phẩm',
            'categories' => $dataCategories,
            'products' => $dataProduct,
            'pagination' => $paginationProducts,
            'filterProducts' => $dataFilter
        ];

        // $this->render('admin/products/listProducts', $data);
        return $this->viewAdmin('products/listProducts', $data);
    }

    public function listProducts()
    {
        $filterSubmit = $this->request->getPost('filterSubmit');
        $containerInputFilter = $this->request->getPost('containerInputFilter');
        $page = $this->request->getGet('page');
        // $thumbnailsProductPost = $this->request->getFiles('thumbnails');

        $dataProduct = $this->service->getProducts();
        $dataCategories = $this->service->getCategories();
        $dataFilter = $this->service->productFilter($filterSubmit, $containerInputFilter, $page);
        $paginationProducts = $this->service->paginationProducts($page);

        $data = [
            'pageTitle' => 'Quản lý sản phẩm',
            'dashboard' => 'Danh sách sản phẩm',
            'categories' => $dataCategories,
            'products' => $dataProduct,
            'pagination' => $paginationProducts,
            'filterProducts' => $dataFilter
        ];

        return $this->viewAdmin('products/listProducts', $data);
    }

    //attribute
    public function addAttributes()
    {

        $data = [
            'pageTitle' => 'Quản lý thuộc tính',
            'dashboard' => 'Thêm thuộc tính',
        ];

        $addAttPost = $this->request->getPost('addAttribute');
        $name_attribute = $this->request->getPost('name_attribute');
        $code_attribute = $this->request->getPost('code_attribute');
        $unit_attribute = $this->request->getPost('unit_attribute');

        $this->service->addAttributeModel($addAttPost, $name_attribute, $code_attribute, $unit_attribute);

        return $this->viewAdmin('attributes/addAttribute', $data);
    }

    public function listAttributes()
    {
        $dataAttribute = $this->service->pagination();

        $data = [
            'pageTitle' => 'Quản lý thuộc tính',
            'dashboard' => 'Danh sách thuộc tính',
            'attributes' => $dataAttribute,
        ];

        return $this->viewAdmin('attributes/listAttribute', $data);
    }

    public function updateAttribute($idAtt)
    {
        $dataAttribute = $this->service->getAttribute();
        $data = [
            'pageTitle' => 'Quản lý danh mục sản phẩm',
            'dashboard' => 'Cập nhật thuộc tính',
            'attribute' => $dataAttribute,
        ];

        $updateAttribute = $this->request->getPost('updateAttribute');
        $namePost = $this->request->getPost('name_update');
        $code_update = $this->request->getPost('code_update');
        $unit_update = $this->request->getPost('unit_update');

        $this->service->updateAttributeModel($updateAttribute, $namePost, $code_update, $unit_update, $idAtt);

        return $this->viewAdmin('attributes/tools/updateAttribute', $data);
    }

    public function deleteAttribute($idAtt)
    {
        return  $this->service->deleteAttributeModel($idAtt);
    }

    public function show()
    {
        $addAttPost = $this->request->getPost('addAttribute');
        $name_attribute = $this->request->getPost('name_attribute');
        $code_attribute = $this->request->getPost('code_attribute');
        $unit_attribute = $this->request->getPost('unit_attribute');

        echo $name_attribute . $code_attribute . $unit_attribute;
    }


    public function linkProductAttribute()
    {
        $dataAttributes = $this->service->getAttributes();
        $dataProducts = $this->service->getProductCategory();
        $data = [
            'pageTitle' => 'Quản lý thuộc tính sản phẩm',
            'dashboard' => 'Liên kết thuộc tính sản phẩm',
            'products' => $dataProducts,
            'attributes' => $dataAttributes,
        ];

        $checkSubmit = $this->request->getPost('addProductAttribute');
        $product_id = $this->request->getPost('product_id');
        $attribute_id = $this->request->getPost('attribute_id');

        $this->service->addAttributeProductModel($checkSubmit, $product_id, $attribute_id);

        return $this->viewAdmin('attributes/link_product_attribute', $data);
    }

    public function listProductAttribute()
    {
        $pageGet = $this->request->getGet('page');
        $pagination = $this->service->paginationProductAtt($pageGet);
        $dataAttributes = $this->service->getAttributes();
        $dataProducts = $this->service->getProductCategory();
        $dataProductAttribute = $this->service->getProductAttribute();
        $data = [
            'pageTitle' => 'Quản lý thuộc tính sản phẩm',
            'dashboard' => 'Danh sách thuộc tính sản phẩm',
            'products' => $dataProducts,
            'attributes' => $dataAttributes,
            'productAttribute' => $dataProductAttribute,
            'pagigation' => $pagination
        ];

        return $this->viewAdmin('attributes/listProductAttribute', $data);
    }

    public function updateProductAttribute($idPrdAtt)
    {
        $dataProductAttributeId = $this->service->getProductAttributeId($idPrdAtt);
        $dataAttributes = $this->service->getAttributes();
        $dataProducts = $this->service->getProductCategory();
        $dataProductAttribute = $this->service->getProductAttribute();
        $data = [
            'pageTitle' => 'Quản lý thuộc tính sản phẩm',
            'dashboard' => 'Cập nhật thuộc tính sản phẩm',
            'products' => $dataProducts,
            'attributes' => $dataAttributes,
            'productAttribute' => $dataProductAttribute,
            'productAttributeId' => $dataProductAttributeId,
        ];

        $checkSubmit = $this->request->getPost('updateProductAttribute');
        $product_id = $this->request->getPost('product_id');
        $attribute_id = $this->request->getPost('attribute_id');

        $this->service->updateProductAttributeModel($checkSubmit, $product_id, $attribute_id, $idPrdAtt);

        return $this->viewAdmin('attributes/tools/updateProductAttribute', $data);
    }

    public function deleteProductAttribute($idPrdAtt)
    {
        $this->service->deleteProductAttributeModel($idPrdAtt);
 
        $pageGet = $this->request->getGet('page');
        $pagination = $this->service->paginationProductAtt($pageGet);
        $dataAttributes = $this->service->getAttributes();
        $dataProducts = $this->service->getProductCategory();
        $dataProductAttribute = $this->service->getProductAttribute();
        $data = [
            'pageTitle' => 'Quản lý thuộc tính sản phẩm',
            'dashboard' => 'Danh sách thuộc tính sản phẩm',
            'products' => $dataProducts,
            'attributes' => $dataAttributes,
            'productAttribute' => $dataProductAttribute,
            'pagigation' => $pagination
        ];

        $this->viewAdmin('attributes/listProductAttribute', $data);
    }


    public function listOrders()
    {
        $dataOrders = $this->service->getOrders();
        $data = [
            'pageTitle' => 'Quản lý đơn hàng',
            'dashboard' => 'Danh sách đơn hàng',
            'orders' => $dataOrders
        ];
        return $this->viewAdmin('orders/listOrders', $data);
    }

    public function updateOrder($idUpdate)
    {
        $dataOrders = $this->service->getOrder($idUpdate);
        $data = [
            'pageTitle' => 'Quản lý đơn hàng',
            'dashboard' => 'Cập nhật đơn hàng',
            'order' => $dataOrders
        ];
        $this->service->updateOrderModel();
        return $this->viewAdmin('orders/tools/update', $data);
    }

    public function deleteOrder($idUpdate)
    {
        $this->service->deleteOrderModel($idUpdate);
    }

    public function detailOrder($idUpdate)
    {
        $dataDetailOrder = $this->service->getDetailOrder($idUpdate);
        $data = [
            'pageTitle' => 'Quản lý đơn hàng',
            'dashboard' => 'Chi Tiết Đơn Hàng',
            'detailOrder' => $dataDetailOrder
        ];
        return $this->viewAdmin('orders/detailOrder', $data);
    }
}
