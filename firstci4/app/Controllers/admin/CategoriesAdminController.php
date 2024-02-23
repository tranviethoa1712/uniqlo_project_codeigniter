<?php
namespace App\Controllers\Admin;

use App\Services\AdminService;
use CodeIgniter\Exceptions\PageNotFoundException;

class CategoriesAdminController extends BaseControllerAdmin{

    private $pageTitle = 'Quản lý danh mục sản phẩm';   
    private $pathView = 'admin/categories/';
    private $pathViewLayout = 'admin/layouts/';
    protected $request;
    protected $service;

    public function __construct() {
        helper('form');
        $this->service = new AdminService;
    }
    
    
    public function view($page = '', $data)
    {
        if (! is_file(APPPATH . 'Views/admin/categories/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        
        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb')
        . view('admin/categories/' . $page)
        . view($this->pathViewLayout.'footer');
    }
    
    public function add() {
        // helper('form');

        // if (! $this->request->is('post')) {
        //     return $this->response->setStatusCode(405)->setBody('Method Not Allowed');
        // }

        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Thêm danh mục',
        ]; 
        $submitPost = $this->request->getPost('addCategory');
        $titlePost = $this->request->getPost('title_category');
        $namePost = $this->request->getPost('name_category');
        if(isset($submitPost)){
            $this->service->addCategoryModel($submitPost, $titlePost, $namePost);
        }
    

        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb')
        . view($this->pathView . 'addCategories')
        . view($this->pathViewLayout.'footer');
    }        
    

    public function update($id) {
        $iddanhmucPost = $this->request->getPost('id_update');
        $dataCategory = $this->service->getCategory($id);
        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Cập nhật Danh Mục',
            'category' => $dataCategory,
            'iddanhmuc' => $id,
        ];

        $updatePost = $this->request->getPost('updateCategory');
        $titlePost = $this->request->getPost('title_update');
        $namePost = $this->request->getPost('name_update');

        $this->service->updateCategoryModel($updatePost, $titlePost, $namePost, $iddanhmucPost);

        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb')
        . view($this->pathView . 'tools/update')
        . view($this->pathViewLayout.'footer');

    }
    
    public function delete($iddanhmuc) {
        $result = $this->service->deleteCategoryModel($iddanhmuc);
        if(!$result) {
            return redirect('errors/404');
        }

        $dataCategories = $this->service->getCategories();
        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Danh Mục sản phẩm',
            'categories' => $dataCategories,
        ];

        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb', $data)
        . view($this->pathView . 'listCategories', $data)
        . view($this->pathViewLayout.'footer');
    }

    public function listCategories() {
        $dataCategories = $this->service->getCategories();
        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Danh Mục sản phẩm',
            'categories' => $dataCategories,
        ];

        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb', $data)
        . view($this->pathView . 'listCategories', $data)
        . view($this->pathViewLayout.'footer');
    }
}