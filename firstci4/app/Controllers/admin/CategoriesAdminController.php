<?php
namespace App\Controllers\Admin;

use CodeIgniter\Exceptions\PageNotFoundException;

class CategoriesAdminController extends BaseControllerAdmin
 {

    private $pageTitle = 'Quản lý danh mục sản phẩm';   
    private $pathView = 'admin/categories/';
    private $pathViewLayout = 'admin/layouts/';

    public function __construct() {
        helper('form');
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
    
    public function add() 
    {
        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Thêm danh mục',
        ]; 

        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb')
        . view($this->pathView . 'addCategories')
        . view($this->pathViewLayout.'footer');
    }     
     
    public function doAddCategory() 
    {
        $result = $this->service->addCategoryModel($this->request);

        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }
    

    public function update($id) 
    {
        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Cập nhật Danh Mục',
            'category' => $this->service->getCategory($id),
            'iddanhmuc' => $id,
        ];

        
        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb')
        . view($this->pathView . 'tools/update')
        . view($this->pathViewLayout.'footer');
        
    }
    
    public function doUpdateCategory() 
    {
        $result = $this->service->updateCategoryModel($this->request);

        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    } 
    
    public function delete($iddanhmuc) 
    {
        $result = $this->service->deleteCategoryModel($iddanhmuc);
        if(!$result) {
            return redirect('errors/404');
        }

       return redirect('admin/showCategories');
    }

    public function listCategories() 
    {
        $data = [
            'pageTitle' => $this->pageTitle,
            'dashboard' => 'Danh Mục sản phẩm',
            'categories' => $this->service->getCategoryPaginationData(),
            'pager' => $this->service->getPagerCategories(),
        ];

        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb', $data)
        . view($this->pathView . 'listCategories', $data)
        . view($this->pathViewLayout.'footer');
    }
}