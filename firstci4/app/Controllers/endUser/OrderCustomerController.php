<?php

namespace App\Controllers\Enduser;

use App\Services\UserService;
use CodeIgniter\Exceptions\PageNotFoundException;

class OrderCustomerController extends BaseControllerUser
{

    private $pathView = 'endUser/customers/pages/';
    private $pathViewLayout = 'endUser/layouts/';
    protected $request;
    protected $session;
    protected $service;

    public function __construct()
    {
        $this->session = session();
        $this->service = new UserService;
    }

    public function viewCustomer($page = '', $headHtml,  $data = [])
    {
        if (!is_file(APPPATH . 'Views/endUser/customers/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        return view($this->pathViewLayout . $headHtml)
            . view($this->pathViewLayout . 'header', $data)
            . view($this->pathView . $page)
            . view($this->pathViewLayout . 'footer');
    }

    public function cart()
    {
        $dataCategories = $this->service->getCategories();
        $sessionLogin = $this->session->customer_login;
        $sessionCart = $this->session->cart;
        $data = [
            'categories' => $dataCategories,
            'sessionLogin' => $sessionLogin,
            'sessionCart' => $sessionCart
        ];

        return $this->viewCustomer('cart', 'baseCart', $data);
    }

    public function addToCart()
    {
        $color_prd = $this->request->getPost('color_prd');
        $size_prd = $this->request->getPost('size_prd');
        $quantity_prd = $this->request->getPost('quantity_prd');
        $id_prd = $this->request->getPost('id_prd');

        $this->service->addToCart($color_prd, $size_prd, $quantity_prd, $id_prd);

        return redirect('user/myCart');
    }

    public function deleteItemCart()
    {
        $id_prd = $this->request->getPost('idProduct');
        return $this->service->deleteItemCart($id_prd);
    }

    public function updateQuantityItemCart()
    {
        $id_prd = $this->request->getPost('idProduct');
        $quantity = $this->request->getPost('valueQuantity');
        return $this->service->updateQuantityItemCart($id_prd, $quantity);
    }

    public function order()
    {
        $dataCategories = $this->service->getCategories();
        $data = [
            'categories' => $dataCategories,
        ];

        return $this->viewCustomer('order', 'baseOrder', $data);
    }

    public function doOrder()
    {
        $fullname = $this->request->getPost('fullname');
        $address = $this->request->getPost('address');
        $phoneNumber = $this->request->getPost('phoneNumber');
        $totalPrice = $this->request->getPost('totalPrice'); 
        if ($this->request->getPost('submitOrder')) {
            $result = $this->service->submitOrder($fullname, $address, $phoneNumber, $totalPrice);
            if ($result === false) {
                return redirect('user/myOrder');
            }
            return redirect('user/orderSuccess');
        } elseif ($this->request->getPost('vnpay')) {
            // config giá trị và redirect đến vnpay;
            return $this->service->vnpayProcessing($this->request);
        }
    }

    public function purchaseOrder()
    {
        if(isset($_SESSION['customer_login'])) {
            $dataCategories = $this->service->getCategories();
            $dataOrders = $this->service->getAllOrder();

            if($this->request->getGet('currentMenu')) {
                $data = [
                    'categories' => $dataCategories,
                    'currentMenu' => $this->request->getGet('currentMenu'),
                    'orders' => $dataOrders,
                    // 'methodPayment' => $this->service->checkPayMethod()
                ];
            } else {
                $data = [
                    'categories' => $dataCategories,
                    'currentMenu' => '',
                    'orders' => $dataOrders,
                ];
            }
            return $this->viewCustomer('purchase_order', 'basePurchaseOrder', $data);
        } else {
            return redirect('user/userLogin');
        }
    }

    public function detailPurchaseOrder()
    {
        $orderItemId = $this->request->getGet('orderItemId');
        $orderId = $this->request->getGet('orderId');
        $dataCategories = $this->service->getCategories();
        $dataOrderitem = $this->service->getDetailOrder($orderItemId);
        if($this->request->getGet('currentMenu')) {
            $data = [
                'categories' => $dataCategories,
                'orderItem' => $dataOrderitem,
                'checkPayMethod' => $this->service->checkPayMethod($orderId),
                'currentMenu' => $this->request->getGet('currentMenu'),
            ];
        } else {
            $data = [
                'categories' => $dataCategories,
                'orderItem' => $dataOrderitem,
                'checkPayMethod' => $this->service->checkPayMethod($orderId),
                'currentMenu' => '',
            ];
        }

        return $this->viewCustomer('detail_purchase_order', 'basePurchaseOrder', $data);
    }


    public function orderSuccessView()
    {
        $dataCategories = $this->service->getCategories();
        $data = [
            'categories' => $dataCategories,
        ];

        if ($this->request->getGet('vnp_TxnRef')) {
            $result = $this->service->submitOrderOnlinePayment($this->request);
            if ($result['RspCode'] == "00") {
                return $this->viewCustomer('orderSuccess', 'baseOrderSuccess', $data);
            } else {
                return redirect('user/myOrder');
            }
        }

        return $this->viewCustomer('orderSuccess', 'baseOrderSuccess', $data);
    }

    public function getStatusChecked() {
        if($this->request->isAJAX()) {
            $status = $this->request->getVar('statusView');
            if($status == '999') {
                $dataOrders = $this->service->getAllOrder();
                return json_encode($dataOrders);
            }
            $dataOrders = $this->service->getStatusOderData($status);
            return json_encode($dataOrders);
        }
    }
}
