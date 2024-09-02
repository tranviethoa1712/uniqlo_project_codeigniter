<?php

namespace App\Controllers\Admin;

use CodeIgniter\Exceptions\PageNotFoundException;

class ProductsAdminController extends BaseControllerAdmin
{

    private $pageTitle = 'Quản lý sản phẩm';
    private $pathView = 'admin/';
    private $pathViewLayout = 'admin/layouts/';

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
        $dataProduct = $this->service->getProducts();
        $dataCategories = $this->service->getCategories();

        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Thêm sản phẩm',
            'products' => $dataProduct,
            'categories' => $dataCategories,
            'header' => $this->request->getHeaderLine('Content-Type')
        ];


        return $this->viewAdmin('products/addProduct', $data);
    }

    public function doAddProduct()
    {
        $result = $this->service->addProductModel($this->request);

        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function update($idsanpham)
    {
        $dataCategories = $this->service->getCategories();
        $dataProduct = $this->service->getProductId($idsanpham);
        $data = [
            'pageTitle' => 'Quản lý danh mục sản phẩm',
            'dashboard' => 'Cập nhật sản phẩm',
            'product' => $dataProduct,
            'categories' => $dataCategories,
            'product_id' => $idsanpham
        ];

        return $this->viewAdmin('products/tools/update', $data);
    }

    public function doUpdateProduct()
    {
        $result = $this->service->updateProductModel($this->request);
        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }


    public function delete($idsanpham)
    {
        $this->service->deleteProductModel($idsanpham);

        return redirect('admin/showProducts');
    }

    public function listProducts()
    {
        $filterSubmit = $this->request->getPost('filterSubmit');
        $containerInputFilter = $this->request->getPost('containerInputFilter');
        $page = $this->request->getGet('page');

        $data = [
            'pageTitle' => 'Quản lý sản phẩm',
            'dashboard' => 'Danh sách sản phẩm',
            'categories' => $this->service->getCategories(),
            'products' => $this->service->getProductPaginationData(),
            'pager' => $this->service->getPagerProducts(),
            'pageCurrent' => $page,
            'container' => $this->request->getPost('container'),
            'containerInputFilter' => $this->request->getPost('containerInputFilter'),
            'filterProducts' => $this->service->productFilter($filterSubmit, $containerInputFilter, $page)
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

        return $this->viewAdmin('attributes/addAttribute', $data);
    }

    public function doAddAttribute()
    {
        $result = $this->service->addAttributeModel($this->request);

        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function listAttributes()
    {
        $data = [
            'pageTitle' => 'Quản lý thuộc tính',
            'dashboard' => 'Danh sách thuộc tính',
            'attributes' => $this->service->getAttributePaginationData(),
            'pager' => $this->service->getPagerAttributes(),
        ];

        return $this->viewAdmin('attributes/listAttribute', $data);
    }

    public function updateAttribute($id)
    {
        $dataAttribute = $this->service->getAttribute($id);
        $data = [
            'pageTitle' => 'Quản lý danh mục sản phẩm',
            'dashboard' => 'Cập nhật thuộc tính',
            'attribute' => $dataAttribute,
        ];

        return $this->viewAdmin('attributes/tools/updateAttribute', $data);
    }

    public function doUpdateAttribute()
    {
        $result = $this->service->updateAttributeModel($this->request);

        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function deleteAttribute($idAtt)
    {
        $this->service->deleteAttributeModel($idAtt);
        return redirect('admin/showAttributes');
    }

    public function linkProductAttribute()
    {
        $dataAttributes = $this->service->getAttributes();
        $dataProducts = $this->service->getProducts();
        $data = [
            'pageTitle' => 'Quản lý thuộc tính sản phẩm',
            'dashboard' => 'Liên kết thuộc tính sản phẩm',
            'products' => $dataProducts,
            'attributes' => $dataAttributes,
        ];

        return $this->viewAdmin('attributes/link_product_attribute', $data);
    }

    public function doLinkProductAttribute()
    {
        $result = $this->service->addAttributeProductModel($this->request);

        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function listProductAttribute()
    {
        $page = $this->request->getGet('page');

        $data = [
            'pageTitle' => 'Quản lý thuộc tính sản phẩm',
            'dashboard' => 'Danh sách thuộc tính sản phẩm',
            'products' => $this->service->getProducts(),
            'attributes' => $this->service->getAttributes(),
            'productAttribute' => $this->service->paginationProductAtt($page),
            'page' => $page,
        ];

        return $this->viewAdmin('attributes/listProductAttribute', $data);
    }

    public function updateProductAttribute($idPrdAtt)
    {
        $data = [
            'pageTitle' => 'Quản lý thuộc tính sản phẩm',
            'dashboard' => 'Cập nhật thuộc tính sản phẩm',
            'products' => $this->service->getProducts(),
            'attributes' => $this->service->getAttributes(),
            'productAttribute' => $this->service->getProductAttribute(),
            'productAttributeId' => $this->service->getProductAttributeId($idPrdAtt),
            'id' => $idPrdAtt
        ];

        return $this->viewAdmin('attributes/tools/updateProductAttribute', $data);
    }

    public function doUpdateProductAttribute()
    {
        $checkSubmit = $this->request->getPost('updateProductAttribute');
        $product_id = $this->request->getPost('product_id');
        $attribute_id = $this->request->getPost('attribute_id');

        $result = $this->service->updateProductAttributeModel($this->request);

        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function deleteProductAttribute($idPrdAtt)
    {
        $this->service->deleteProductAttributeModel($idPrdAtt);

        return redirect('admin/showPalink');
    }


    public function listOrders()
    {
        $data = [
            'pageTitle' => 'Quản lý đơn hàng',
            'dashboard' => 'Danh sách đơn hàng',
            'orders' => $this->service->getOrderPaginationData(),
            'pager' => $this->service->getPagerOrders(),
        ];
        return $this->viewAdmin('orders/listOrders', $data);
    }

    public function showOrderDetail($order_id)
    {
        $data = [
            'pageTitle' => 'Quản lý đơn hàng',
            'dashboard' => 'Chi tiết đơn hàng',
            'detailOrder' => $this->service->getDetailOrder($order_id),
        ];
        return $this->viewAdmin('orders/detailOrder', $data);
    }

    public function updateOrder($idUpdate)
    {
        $dataOrders = $this->service->getOrder($idUpdate);
        $data = [
            'pageTitle' => 'Quản lý đơn hàng',
            'dashboard' => 'Cập nhật đơn hàng',
            'order' => $dataOrders,
            'order_id' => $idUpdate
        ];
        return $this->viewAdmin('orders/tools/update', $data);
    }

    public function UpdateOrderItemStatus($order_item_id, $statusUpdate)
    {
        $this->service->UpdateOrderItemStatus($order_item_id, $statusUpdate);
        return redirect()->back();
    }

    public function doUpdateOrder()
    {
        $result = $this->service->updateOrderModel($this->request);
        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }


    public function deleteOrder($idUpdate)
    {
        $this->service->deleteOrderModel($idUpdate);
        return redirect('admin/showOrders');
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

    public function liveSearchProducts()
    {
        if ($this->request->isAJAX()) {
            $input = $this->request->getVar('input');
            if($input !== '') {
                $dataProducts = $this->service->getLiveSearchProductsData($input);
                return json_encode($dataProducts);
            } else {
                $dataProducts = $this->service->getProductPaginationData();
                return json_encode($dataProducts);
            }
        }
    }

    
}