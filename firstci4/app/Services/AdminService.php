<?php
namespace App\Services;

use App\Models\AdminModel;
use App\Common\ResultUtils;
use Exception;

class AdminService extends BaseService{

    protected $adminModel;

    function __construct()
    {
        parent::__construct();
        $this->adminModel = model(AdminModel::class);  
    }

    public function addCategoryModel($submitPost, $titlePost, $namePost) {
        return $this->adminModel->addCategoryModel($submitPost, $titlePost, $namePost);
    } 
    
    public function getCategory($iddanhmuc) {
        return $this->adminModel->getCategory($iddanhmuc);
    } 

    public function updateCategoryModel($updatePost, $titlePost, $namePost, $iddanhmucPost) {
        if(isset($updatePost)){
            return $this->adminModel->updateCategoryModel($titlePost, $namePost, $iddanhmucPost);
        }
    } 

    public function deleteCategoryModel($iddanhmuc) {
        return $this->adminModel->deleteCategoryModel($iddanhmuc);        
    } 

    public function getCategories() {
        return $this->adminModel->getCategories();        
    } 

    public function getProductCategory() {
        return $this->adminModel->getProductCategory();
    } 
    
    public function addProductModel($addProductPost, $categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $thumbnailsProductPost, $imagesProductPost, $genderProductPost, $descriptionProductPost, $statusProductPost) {
        if(isset($addProductPost)){
            return $this->adminModel->addProductModel($categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $thumbnailsProductPost, $imagesProductPost, $genderProductPost, $descriptionProductPost, $statusProductPost);
        }
    } 

    public function getProductId($idsanpham) {
        return $this->adminModel->getProductId($idsanpham);
    } 

    public function updateProductModel($updateProduct, $categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $thumbnailsProductPost, $imagesProductPost, $genderProductPost, $descriptionProductPost, $statusProductPost, $idsanpham) {
        if(isset($updateProduct)) {
            return $this->adminModel->updateProductModel($categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $thumbnailsProductPost, $imagesProductPost, $genderProductPost, $descriptionProductPost, $statusProductPost, $idsanpham);
        }
    } 
    public function deleteProductModel($idsanpham) {
        return $this->adminModel->deleteProductModel($idsanpham);
    } 
    public function getProducts() {
        return $this->adminModel->getProducts();
    } 

    public function productFilter($filterSubmit, $containerInputFilter, $page) {
        return $this->adminModel->productFilter($filterSubmit, $containerInputFilter, $page);
    } 

    public function paginationProducts($page) {
        return $this->adminModel->paginationProducts($page);
    } 

    public function addAttributeModel($addAttPost, $name_attribute, $code_attribute, $unit_attribute) {
        if(isset($addAttPost)){
            return $this->adminModel->addAttributeModel($name_attribute, $code_attribute, $unit_attribute);
        } 
    } 

    public function pagination() {
        return $this->adminModel->pagination();
    } 

    public function getAttribute() {
        return $this->adminModel->getAttribute();
    }

    public function updateAttributeModel($updateAttribute, $namePost, $code_update, $unit_update, $idAtt) {
        if(isset($updateAttribute)) {
            return $this->adminModel->updateAttributeModel($namePost, $code_update, $unit_update, $idAtt);
        }
    } 

    public function deleteAttributeModel($idAtt) {
        return $this->adminModel->deleteAttributeModel($idAtt);
    }
    
    public function getAttributes() {
        return $this->adminModel->getAttributes();
    }
    
    public function addAttributeProductModel($checkSubmit, $product_id, $attribute_id) {
        if(isset($checkSubmit)){
            return $this->adminModel->addAttributeProductModel($product_id, $attribute_id);
        }
    }
        
    public function paginationProductAtt($pageGet) {
        return $this->adminModel->paginationProductAtt($pageGet);
    }
    
        
    public function getProductAttribute() {
        return $this->adminModel->getProductAttribute();
    }
        
    public function getProductAttributeId($idPrdAtt) {
        return $this->adminModel->getProductAttributeId($idPrdAtt);
    }
        
    public function updateProductAttributeModel($checkSubmit, $product_id, $attribute_id, $idPrdAtt) {
        if(isset($checkSubmit)){
            return $this->adminModel->updateProductAttributeModel($product_id, $attribute_id, $idPrdAtt);
        }
    }
        
    public function deleteProductAttributeModel($idPrdAtt) {
        return $this->adminModel->deleteProductAttributeModel($idPrdAtt);
    }
        
    public function getOrders() {
        return $this->adminModel->getOrders();
    }
        
    public function getOrder($idUpdate) {
        return $this->adminModel->getOrder($idUpdate);
    }
        
    public function updateOrderModel() {
        return $this->adminModel->updateOrderModel();
    }
        
    public function deleteOrderModel($idUpdate) {
        return $this->adminModel->deleteOrderModel($idUpdate);
    }
        
    public function getDetailOrder($idUpdate) {
        return $this->adminModel->getDetailOrder($idUpdate);
    }
        
    public function LoginAdmin($loginAdmin, $emailAddress, $password) {
        return $this->adminModel->LoginAdmin($loginAdmin, $emailAddress, $password);
    }
        
    public function RegisterAdmin($checkSubmit, $name, $emailAddress, $password) {
        if(isset($checkSubmit)) {
            return $this->adminModel->RegisterAdmin($name, $emailAddress, $password);
        }
    }

    public function getUSers(){
        return $this->adminModel->getUSers();
    }

    public function getUSer($id){
        return $this->adminModel->getUSer($id);
    }

    /**
     * update user info to db
     */
    
    public function updateUser($requestData){

        $validate = $this->validateUserInfo($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();

        if(!empty($dataSave['change_password'])){
            unset($dataSave['password_confirm']); 
            unset($dataSave['change_password']); 
            $dataSave['password_update'] = password_hash($dataSave['password_update'], PASSWORD_BCRYPT);
        } else {
            unset($dataSave['password']); 
            unset($dataSave['password_confirm']); 
        }
        
        try {
            $this->adminModel->updateUser($dataSave['name_update'], $dataSave['email_update'], $dataSave['password_update'], $dataSave['dob_update'], $dataSave['gender_update'], $dataSave['id_update']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Thêm dữ liệu thành công'], 
            ];

        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    }

    private function validateUserInfo($requestData) 
    {
        $rules = [
            'name_update' => 'max_length[100]',
            'email_update' => 'valid_email|is_unique[customers.email,customer_id,'.$requestData->getPost()['id_update'] . ']',
            'dob_update' => 'required',
            'gender_update' => 'required',
        ];

        $messages = [
            'name_update' => [
                'max_length' => 'Tên quá dài, vui lòng nhập {param} ký tự!',
            ],
            'email_update' => [
                'valid_email' => 'Tài khoản {field} {value} không đúng định dạng!',
                'is_unique' => 'Email đã được đăng ký, vui lòng kiểm tra lại!'
            ],
            'dob_update' => [
                'required' => 'Bắt buộc nhập ngày sinh',
            ],
            'gender_update' => [
                'required' => 'Bắt buộc nhập giới tính!',
            ],
        ];

        if(!empty($requestData->getPost('change_password'))){
            $rules['password_update'] = 'min_length[6]|max_length[30]';
            $rules['password_confirm'] = 'matches[password_update]';

            $messages['password_update'] = [
                'min_length' => 'Mật khẩu ít nhất là {param} ký tự!',
                'max_length' => 'Mật khẩu quá dài, vui lòng nhập {param} ký tự!',
            ];

            $messages['password_confirm'] = [
                    'matches' => 'Mật khẩu không khớp!',
                ];
        }

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    /**
     * Delete user by id primary key
     */
    public function deleteUser($id){
        try {
            $this->adminModel->deleteUser($id);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công!'], 
            ];

        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    }
}