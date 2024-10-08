<?php
namespace App\Controllers\Admin;

use CodeIgniter\Exceptions\PageNotFoundException;
// include_once('./models/service.php');
// include('controllers/BaseController.php');

class HomeAdminController extends BaseControllerAdmin
{
    
    private $pageTitle = '';
    private $pathView = 'admin/';
    private $pathViewLayout = 'admin/layouts/';

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

    public function index() 
    {
        $chartData = $this->service->getProfitOrderByYear('2024');
        $data = [
            'pageTitle' => 'Tổng quan',
            'dashboard' => 'Tổng quan',
            'chart' => $chartData
        ];
        
        return $this->viewAdmin('home', $data);
    }

    public function loadMonthwiseData()
    {
        if ($this->request->isAJAX()) {
            $year = $this->request->getVar('year');
            if($year != '') {
                $chartData = $this->service->getProfitOrderByYear($year);
                return json_encode($chartData);
            } else {
                $chartData = $this->service->getProfitOrderByYear('2024');
                return json_encode($chartData);
            }
        }
    }

    public function userList() 
    {
        $data = [
            'pageTitle' => 'Quản lý khách hàng',
            'dashboard' => 'Danh sách khách hàng',
            'users' => $this->service->getCustomerPaginationData(),
            'pager' => $this->service->getPagerCustomers(),
        ];

        return $this->viewAdmin('users/userList', $data);
    }

    public function updateUser(string $idUser = '')
    {
        $dataUser = $this->service->getUSer($idUser);
        $data = [
            'pageTitle' => 'Quản lý danh mục sản phẩm',
            'dashboard' => 'Cập nhật người dùng',
            'user' => $dataUser,
            'idUser' => $idUser,
        ]; 
        
        return $this->viewAdmin('users/tools/updateUser', $data);
    }
    
    public function doUpdateUser()
    {        
        $result = $this->service->updateUser($this->request);
        return redirect()->back()->withInput()->with($result['massageCode'], $result['massages']);
    }

    public function deleteUser($id)
    {     
        $user = $this->service->getUSer($id);
        if(!$user){
            return redirect('errors/404');
        }

        $result = $this->service->deleteUser($id);
        return redirect('admin/userListManage')->with($result['massageCode'], $result['massages']);
    }
}