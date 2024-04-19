<?php

use CodeIgniter\Router\RouteCollection; 
 
/** 
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('errors/404', function () {
    return view('errors/html/error_404');
}); 
$routes->setDefaultNamespace('App\Controllers\Admin');
$routes->group('',  ['namespace' => 'App\Controllers\Admin'], static function ($routes) {
    
    // Login
    $routes->get('login', 'LoginAdminController::index');
    $routes->post('login', 'LoginAdminController::doLogin'); 

    $routes->group('admin', ['filter' => 'adminfilter'] ,function($routes){
        // Home
        $routes->get('home', 'HomeAdminController::index');
        $routes->post('loadMonthwiseData', 'HomeAdminController::loadMonthwiseData');

        $routes->get('logout', 'LoginAdminController::logout');
        
        // Category
        $routes->get('addCategoryView', 'CategoriesAdminController::add');
        
        $routes->post('doAddCategory', 'CategoriesAdminController::doAddCategory');
        $routes->get('updateCategory/(:num)', 'CategoriesAdminController::update/$1');
        $routes->post('doUpdateCategory', 'CategoriesAdminController::doUpdateCategory');
        $routes->get('deleteCategory/(:num)', 'CategoriesAdminController::delete/$1');
        $routes->get('showCategories', 'CategoriesAdminController::listCategories');
    
        // Product
        $routes->get('addProduct', 'ProductsAdminController::add');
        $routes->post('doAddProduct', 'ProductsAdminController::doAddProduct');
        $routes->get('updateProduct/(:num)', 'ProductsAdminController::update/$1');
        $routes->post('doUpdateProduct', 'ProductsAdminController::doUpdateProduct');
        $routes->get('deleteProduct/(:num)', 'ProductsAdminController::delete/$1');
        $routes->get('showProducts', 'ProductsAdminController::listProducts');
        $routes->post('showProducts', 'ProductsAdminController::listProducts');
        $routes->post('liveSearchProducts', 'ProductsAdminController::liveSearchProducts');
    
        // Attribute
        $routes->get('addAttribute', 'ProductsAdminController::addAttributes');
        $routes->post('doAddAttribute', 'ProductsAdminController::doAddAttribute');
        $routes->get('updateAttribute/(:num)', 'ProductsAdminController::updateAttribute/$1');
        $routes->post('doUpdateAttribute', 'ProductsAdminController::doUpdateAttribute');
        $routes->get('deleteAttribute/(:num)', 'ProductsAdminController::deleteAttribute/$1');
        $routes->get('showAttributes', 'ProductsAdminController::listAttributes');
        
        // Product Attribute
        $routes->get('addPalink', 'ProductsAdminController::linkProductAttribute');
        $routes->post('doLinkProductAttribute', 'ProductsAdminController::doLinkProductAttribute');
        $routes->get('showPalink', 'ProductsAdminController::listProductAttribute');
        $routes->get('updatePalink/(:num)', 'ProductsAdminController::updateProductAttribute/$1');
        $routes->post('doUpdateProductAttribute', 'ProductsAdminController::doUpdateProductAttribute');
        $routes->get('deletePalink/(:num)', 'ProductsAdminController::deleteProductAttribute/$1');
    
        // Order
        $routes->get('showOrders', 'ProductsAdminController::listOrders');
        $routes->get('updateOrder/(:num)', 'ProductsAdminController::updateOrder/$1');
        $routes->post('doUpdateOrder', 'ProductsAdminController::doUpdateOrder');
        $routes->get('deleteOrder/(:num)', 'ProductsAdminController::deleteOrder/$1');
        $routes->get('showOrderDetail/(:num)', 'ProductsAdminController::showOrderDetail/$1');
        $routes->get('UpdateOrderItemStatus/(:num)/(:num)', 'ProductsAdminController::UpdateOrderItemStatus/$1/$2');
 
        // Customer 
        $routes->get('userListManage', 'HomeAdminController::userList');
        $routes->get('updateUser/(:num)', 'HomeAdminController::updateUser/$1');
        $routes->post('updateProcessing', 'HomeAdminController::doUpdateUser');
        $routes->get('deleteUser/(:num)', 'HomeAdminController::deleteUser/$1');
 
        // Contacts 
        $routes->get('contactList', 'ContactAdminController::list');
    });
});

$routes->setDefaultNamespace('App\Controllers\Enduser');
$routes->group('', ['namespace' => 'App\Controllers\Enduser'], static function ($routes) {
    $routes->group('user', function($routes){
        $routes->get('categoryPage', 'CategoriesCustomerController::category');
        // $routes->post('admin/addCategoryView', 'CategoriesAdminController::add');
        $routes->get('homePage', 'HomeCustomerController::home');
        $routes->get('userLogin', 'LoginCustomerController::login');
        $routes->post('doLogin', 'LoginCustomerController::doLogin');
        $routes->get('logout', 'LoginCustomerController::logOutCustomer');
        
        $routes->get('userRegister', 'HomeCustomerController::register');
        $routes->post('doRegister', 'HomeCustomerController::doRegister');
        
        $routes->get('aboutAccount', 'HomeCustomerController::memberDetail');
        
        
        $routes->get('myCart', 'OrderCustomerController::cart');
        $routes->post('addToCart', 'OrderCustomerController::addToCart');
        $routes->post('deleteItemCart', 'OrderCustomerController::deleteItemCart');
        $routes->post('updateQuantityItemCart', 'OrderCustomerController::updateQuantityItemCart');
        
        $routes->get('myOrder', 'OrderCustomerController::order');
        $routes->post('doOrder', 'OrderCustomerController::doOrder');
        $routes->get('orderSuccess', 'OrderCustomerController::orderSuccessView');
        
        $routes->get('purchaseOrder', 'OrderCustomerController::purchaseOrder');
        $routes->post('getStatusChecked', 'OrderCustomerController::getStatusChecked');
        $routes->get('detailPurchaseOrder', 'OrderCustomerController::detailPurchaseOrder');
    
        $routes->get('listProducts', 'ProductCustomerController::listProduct');
        $routes->get('detailProduct', 'ProductCustomerController::detailProduct');
    });
});




