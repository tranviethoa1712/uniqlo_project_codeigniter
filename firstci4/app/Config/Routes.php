<?php

use CodeIgniter\Router\RouteCollection; 
// use App\Controllers\Admin\CategoriesAdminController;// Add this line
// use App\Controllers\ProductsAdminController;// Add this line
use App\Controllers\News; 
use App\Controllers\Pages;


 
/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// Project
// Admin
// $routes->setDefaultNamespace('App\Controllers\Admin');
// $routes->get('admin/addCategoryView', [CategoriesAdminController::class, 'addCategoriesIndex']);
// $routes->post('admin/doAddCategory', [CategoriesAdminController::class, 'add']);

$routes->get('errors/404', function () {
    return view('errors/html/error_404');
});

$routes->group('', ['namespace' => 'App\Controllers\Admin'], static function ($routes) {
    
    // Login
    $routes->get('login', 'LoginAdminController::index');
    $routes->post('login', 'LoginAdminController::doLogin');

    $routes->group('admin', ['filter' => 'adminFilter'] , function($routes){
        
        // Home
        $routes->get('home', 'HomeAdminController::index');
        $routes->get('register', 'HomeAdminController::register');
        $routes->post('register', 'HomeAdminController::register');

        $routes->get('logout', 'LoginAdminController::logout');

        // Category
        $routes->get('addCategoryView', 'CategoriesAdminController::add');
        $routes->post('addCategoryView', 'CategoriesAdminController::add');
        $routes->get('updateCategory/(:num)', 'CategoriesAdminController::update/$1');
        $routes->post('updateCategory', 'CategoriesAdminController::update');
        $routes->get('deleteCategory/(:num)', 'CategoriesAdminController::delete/$1');
        $routes->get('showCategories', 'CategoriesAdminController::listCategories');
    
        // Product
        $routes->get('addProduct', 'ProductsAdminController::add');
        $routes->post('addProduct', 'ProductsAdminController::add');
        $routes->get('updateProduct/(:num)', 'ProductsAdminController::update/$1');
        $routes->post('updateProduct', 'ProductsAdminController::update');
        $routes->get('deleteProduct/(:num)', 'ProductsAdminController::delete/$1');
        $routes->get('showProducts', 'ProductsAdminController::listProducts');
    
        // Attribute
        $routes->get('addAttribute', 'ProductsAdminController::addAttributes');
        $routes->post('addAttribute', 'ProductsAdminController::addAttributes');
        $routes->get('updateAttribute/(:num)', 'ProductsAdminController::updateAttribute/$1');
        $routes->post('updateAttribute', 'ProductsAdminController::updateAttribute');
        $routes->get('deleteAttribute/(:num)', 'ProductsAdminController::deleteAttribute/$1');
        $routes->get('showAttributes', 'ProductsAdminController::listAttributes');
        
        // Product Attribute
        $routes->get('addPalink', 'ProductsAdminController::linkProductAttribute');
        $routes->post('addPalink', 'ProductsAdminController::linkProductAttribute');
        $routes->get('showPalink', 'ProductsAdminController::listProductAttribute');
        $routes->get('updatePalink/(:num)', 'ProductsAdminController::updateProductAttribute/$1');
        $routes->post('updatePalink', 'ProductsAdminController::updateProductAttribute');
        $routes->get('deletePalink/(:num)', 'ProductsAdminController::deleteProductAttribute/$1');
    
        // Order
        $routes->get('showOrders', 'ProductsAdminController::listOrders');
        $routes->get('updateOrder/(:num)', 'ProductsAdminController::updateOrder/$1');
        $routes->post('updateOrder', 'ProductsAdminController::updateOrder');
        $routes->get('deleteOrder/(:num)', 'ProductsAdminController::deleteOrder/$1');
        $routes->get('showOrderDetail', 'ProductsAdminController::detailOrder');
 
        // Customer 
        $routes->get('userListManage', 'HomeAdminController::userList');
        $routes->get('updateUser/(:num)', 'HomeAdminController::updateUser/$1');
        $routes->post('updateProcessing', 'HomeAdminController::doUpdateUser');
        $routes->get('deleteUser/(:num)', 'HomeAdminController::deleteUser/$1');
    });
});

// $routes->get('(:segment)', [CategoriesAdminController::class, 'view']);


$routes->group('', ['namespace' => 'App\Controllers\Enduser'], static function ($routes) {
    $routes->group('user', function($routes){
        $routes->get('categoryPage', 'CategoriesCustomerController::category');
        // $routes->post('admin/addCategoryView', 'CategoriesAdminController::add');
    
        $routes->get('homePage', 'HomeCustomerController::home');
        $routes->get('userLogin', 'HomeCustomerController::login');
        $routes->post('userLogin', 'HomeCustomerController::login');
        $routes->get('userRegister', 'HomeCustomerController::register');
        $routes->post('doRegister', 'HomeCustomerController::doRegister');
        $routes->get('aboutAccount', 'HomeCustomerController::memberDetail');
        $routes->get('myCart', 'HomeCustomerController::cart');
        $routes->get('myOrder', 'HomeCustomerController::order');
    
        $routes->get('listProducts', 'ProductCustomerController::listProduct');
        $routes->get('detailProduct', 'ProductCustomerController::detailProduct');
    });
});




