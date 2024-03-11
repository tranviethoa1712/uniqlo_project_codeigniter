<?php
namespace App\Controllers\Admin;

use App\Services\ContactService;
use CodeIgniter\Exceptions\PageNotFoundException;

class ContactAdminController extends BaseControllerAdmin{
    
    private $pageTitle = '';
    private $pathView = 'admin/';
    private $pathViewLayout = 'admin/layouts/';
    protected $service;
    public function __construct() {
        $this->service = new ContactService;  
    }

    public function viewAdmin($page = '', $data)
    {
        if (! is_file(APPPATH . 'Views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view($this->pathViewLayout.'header', $data)
        . view($this->pathViewLayout.'sidebar')
        . view($this->pathViewLayout.'breadcrumb')
        . view($this->pathView . $page)
        . view($this->pathViewLayout.'footer');
    }

    public function list() 
    {
        $data = [
            'pageTitle' => 'Quản lý liên hệ',
            'dashboard' => 'Danh sách liên hệ',
            'contacts' => $this->service->getContactPaginationData(),
            'pager' => $this->service->getPagerContacts(),
        ];

        return $this->viewAdmin('contacts/list', $data);
    }
}