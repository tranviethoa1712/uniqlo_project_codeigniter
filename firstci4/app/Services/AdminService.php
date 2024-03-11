<?php
namespace App\Services;

use App\Models\AdminModel;
use App\Common\ResultUtils;
use Exception;
class AdminService extends BaseService{
    
    /**
     * The main task:
     * 1. Handle logic for admin controllers 
     * 2. Set Validation Rules
     */

    protected $adminModel;
 
    function __construct()
    {
        parent::__construct();
        $this->adminModel = model(AdminModel::class);  
    }

    /**
     * Categories Handle
     */
    public function addCategoryModel($requestData) 
    {
        $validate = $this->validateAddCategory($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost(); 
        
        $checkData = $this->adminModel->hasCategoryInfo($dataSave['title_category'], $dataSave['name_category']);
        if($checkData === true) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => 'Danh mục đã tồn tại'] , 
            ];
        }

        try {
            $this->adminModel->addCategoryModel($dataSave['title_category'], $dataSave['name_category']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    } 

    private function validateAddCategory($requestData) 
    {
        $rules = [
            'title_category' => 'required|max_length[300]',
            'name_category' => 'required|max_length[200]|is_unique[categories.name]',
        ];

        $messages = [
            'title_category' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
            ],
            'name_category' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
                'is_unique' => 'Tên danh mục đã tồn tại!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    public function updateCategoryModel($requestData) {
        $validate = $this->validateUpdateCategory($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();
        
        try {
            $this->adminModel->updateCategoryModel($dataSave['title_update'], $dataSave['name_update'], $dataSave['id_update']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    } 

    private function validateUpdateCategory($requestData) 
    {
        $rules = [
            'title_update' => 'required|max_length[300]',
            'name_update' => 'required|max_length[200]|is_unique[categories.name,category_id,'.$requestData->getPost()['id_update'] . ']',
        ];

        $messages = [
            'title_update' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
            ],
            'name_update' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
                'is_unique' => 'Tên danh mục đã tồn tại!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    public function deleteCategoryModel($iddanhmuc) 
    {
        return $this->adminModel->deleteCategoryModel($iddanhmuc);        
    } 

    public function getCategory($iddanhmuc) 
    {
        return $this->adminModel->getCategory($iddanhmuc);
    } 

    public function getCategories() 
    {
        return $this->adminModel->getCategories();        
    } 

    /**
     * Product Handle
     */
    public function getProductCategory() 
    {
        return $this->adminModel->getProductCategory();
    } 

    public function addProductModel($requestData)
    {
        $validate = $this->validateAddProduct($requestData);
 
        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();
        // $dataSave['thumbnails'] = $requestData->getFiles('thumbnails');
        // $dataSave['images'] = $requestData->getFiles('images');
        
        try {
            $this->adminModel->addProductModel($dataSave['category_id'], $dataSave['title_product'], $dataSave['title_product'], $dataSave['price_product'], $requestData->getFiles('thumbnails'), $dataSave['description_product'], $requestData->getFiles('images'), $dataSave['gender_product'], $dataSave['status_product']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    }

    public function updateProductModel($requestData) 
    {
        $validate = $this->validateUpdateProduct($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();
        // $dataSave['thumbnails'] = $requestData->getFiles('thumbnails');
        // $dataSave['images'] = $requestData->getFiles('images');
        
        try {
            $this->adminModel->updateProductModel($dataSave['category_id'], $dataSave['title_product'], $dataSave['title_product'], $dataSave['price_product'], $requestData->getFiles('thumbnails'), $dataSave['description_product'], $requestData->getFiles('images'), $dataSave['gender_product'], $dataSave['status_product'], $dataSave['product_id']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    } 

    private function validateAddProduct($requestData) 
    {
        $rules = [
            'category_id' => 'required',
            'title_product' => 'required|max_length[300]',
            'price_product' => 'required|max_length[200]',
            'description_product' => 'required|max_length[500]',
            'gender_product' => 'required',
            'status_product' => 'required|max_length[11]',
        ];

        $messages = [
            'category_id' => [
                'required' => 'Không được để trống!',
            ],
            'title_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
            'price_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tên quá dài, vui lòng nhập {param} ký tự!',
            ],
            'description_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
            'gender_product' => [
                'required' => 'Không được để trống!',
            ],
            'status_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    private function validateUpdateProduct($requestData) 
    {
        $rules = [
            'category_id' => 'required',
            'title_product' => 'required|max_length[300]',
            'price_product' => 'required|max_length[200]',
            'description_product' => 'required|max_length[500]',
            'gender_product' => 'required',
            'status_product' => 'required|max_length[11]',
        ];

        $messages = [
            'category_id' => [
                'required' => 'Không được để trống!',
            ],
            'title_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
            'price_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tên quá dài, vui lòng nhập {param} ký tự!',
            ],
            'description_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
            'gender_product' => [
                'required' => 'Không được để trống!',
            ],
            'status_product' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    public function getProductId($idsanpham) 
    {
        return $this->adminModel->getProductId($idsanpham);
    } 

    public function deleteProductModel($idsanpham) 
    {
        return $this->adminModel->deleteProductModel($idsanpham);
    } 

    public function getProducts() 
    {
        return $this->adminModel->getProducts();
    } 
    
    /**
     * Attribute Handle
     */
    public function addAttributeModel($requestData)
    {
        $validate = $this->validateAddAttribute($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();
        
        try {
            $this->adminModel->addAttributeModel($dataSave['name_attribute'], $dataSave['code_attribute'], $dataSave['unit_attribute']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    }

    private function validateAddAttribute($requestData) 
    {
        $rules = [
            'name_attribute' => 'required|max_length[50]',
            'code_attribute' => 'required|max_length[20]|is_unique[attributes.attribute_sku]',
            'unit_attribute' => 'required|max_length[50]',
        ];

        $messages = [
            'name_attribute' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tên quá dài, vui lòng nhập {param} ký tự!',
            ],
            'code_attribute' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
                'is_unique' => 'Mã sku đã tồn tại!'
            ],
            'unit_attribute' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    public function updateAttributeModel($requestData)
    {
        $validate = $this->validateUpdateAttribute($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();
        
        try {
            $this->adminModel->updateAttributeModel($dataSave['name_update'], $dataSave['code_update'], $dataSave['unit_update'], $dataSave['attribute_id']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }
    }

    private function validateUpdateAttribute($requestData) 
    {
        $rules = [
            'name_update' => 'required|max_length[50]',
            'code_update' => 'required|max_length[20]',
            'unit_update' => 'required|max_length[50]',
        ];

        $messages = [
            'name_update' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tên quá dài, vui lòng nhập {param} ký tự!',
            ],
            'code_update' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
            'unit_update' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }

    public function deleteAttributeModel($idAtt) 
    {
        return $this->adminModel->deleteAttributeModel($idAtt);
    }
    
    public function getAttributes() 
    {
        return $this->adminModel->getAttributes();
    }

    public function getAttribute($id) 
    {
        return $this->adminModel->getAttribute($id);
    }

    /**
     * Pagination Handle
     */
    public function getCategoryPaginationData() 
    {
        return $this->adminModel->getCategoryPaginationData();
    }  
    
    public function getProductPaginationData() 
    {
        return $this->adminModel->getProductPaginationData();
    } 

    public function getAttributePaginationData()
    {
        return $this->adminModel->getAttributePaginationData();
    } 
    
    public function getOrderPaginationData() 
    {
        return $this->adminModel->getOrderPaginationData();
    } 
    
    public function getCustomerPaginationData() 
    {
        return $this->adminModel->getCustomerPaginationData();
    } 
    
    public function getPagerCategories() 
    {
        return $this->adminModel->pagerCategories();
    }
    
    public function getPagerProducts()
     {
        return $this->adminModel->pagerProducts();
    }
    
    public function getPagerAttributes() 
    {
        return $this->adminModel->pagerAttributes();
    }
    
    public function getPagerOrders() 
    {
        return $this->adminModel->pagerOrders();
    }
    
    public function getPagerCustomers() 
    {
        return $this->adminModel->pagerCustomers();
    }

    public function productFilter($filterSubmit, $containerInputFilter, $page) 
    {
        return $this->adminModel->productFilter($filterSubmit, $containerInputFilter, $page);
    } 

    public function paginationProducts($page) 
    {
        return $this->adminModel->paginationProducts($page);
    } 

    public function paginationProductAtt($pageGet) 
    {
        return $this->adminModel->paginationProductAtt($pageGet);
    }

    /**
     * Product Attribute Handle
     */
    public function updateProductAttributeModel($requestData) 
    {

        $validate = $this->validateUpdateProductAttribute($requestData);

        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }

        $dataSave = $requestData->getPost();
        
        try {
            $this->adminModel->updateProductAttributeModel($dataSave['product_id'], $dataSave['attribute_id'], $dataSave['id']);
            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }

    }

    private function validateUpdateProductAttribute($requestData) 
    {
        $rules = [
            'product_id' => 'required',
            'attribute_id' => 'required',
        ];

        $messages = [
            'product_id' => [
                'required' => 'Không được để trống!',
            ],
            'attribute_id' => [
                'required' => 'Không được để trống!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }
    
    public function addAttributeProductModel($requestData) 
    {  
        $validate = $this->validateLinkProductAttribute($requestData);
        
        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }
        
        $dataSave = $requestData->getPost();

        $checkLink = $this->adminModel->hasAttPrdInfo($dataSave['product_id'], $dataSave['attribute_id']);
        if($checkLink === true){
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => 'Liên kết đã bị trùng'], 
            ];               
        }
        
        try {
            $this->adminModel->addAttributeProductModel($dataSave['product_id'], $dataSave['attribute_id']);

            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }

    }

    private function validateLinkProductAttribute($requestData) 
    {
        $rules = [
            'product_id' => 'required',
            'attribute_id' => 'required',
        ];

        $messages = [
            'product_id' => [
                'required' => 'Không được để trống!',
            ],
            'attribute_id' => [
                'required' => 'Không được để trống!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }
        
    public function deleteProductAttributeModel($idPrdAtt) 
    {
        return $this->adminModel->deleteProductAttributeModel($idPrdAtt);
    }

    public function getProductAttribute() 
    {
        return $this->adminModel->getProductAttribute();
    }
        
    public function getProductAttributeId($idPrdAtt) 
    {
        return $this->adminModel->getProductAttributeId($idPrdAtt);
    }
    
    /**
     * Order handle
     */
    public function getOrders() 
    {
        return $this->adminModel->getOrders();
    }
        
    public function getOrder($idUpdate) 
    {
        return $this->adminModel->getOrder($idUpdate);
    }

    public function updateOrderModel($requestData) {
        
        $validate = $this->validateUpdateOrder($requestData);
        
        if($validate->getErrors()){
            return [
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR, 
                'massages' => $validate->getErrors(),
            ];
        }
        
        $dataSave = $requestData->getPost();
        
        try {
            $this->adminModel->updateOrderModel($dataSave['fullname'], $dataSave['address'], $dataSave['phone_number'], $dataSave['total_price'], $dataSave['status'],);

            return [ 
                'status' => ResultUtils::STATUS_CODE_OK,
                'massageCode' => ResultUtils::MESSAGE_CODE_OK,
                'massages' => ['success' => 'Cập nhật dữ liệu thành công'], 
            ];
        } catch (Exception $e) {
            return [ 
                'status' => ResultUtils::STATUS_CODE_ERR,
                'massageCode' => ResultUtils::MESSAGE_CODE_ERR,
                'massages' => ['error' => $e->getMessage()], 
            ];
        }

    }

    private function validateUpdateOrder($requestData) 
    {
        $rules = [
            'fullname' => 'required|max_length[200]',
            'address' => 'required',
            'phone_number' => 'required|max_length[13]|min_length[11]',
            'total_price' => 'required|max_length[50]',
            'status' => 'required|max_length[11]',
        ];

        $messages = [
            'fullname' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
            ],
            'address' => [
                'required' => 'Không được để trống!',
            ],
            'phone_number' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
                'min_length' => 'Tối thiểu là {param} ký tự!',
            ],
            'total_price' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
            ],
            'status' => [
                'required' => 'Không được để trống!',
                'max_length' => 'Tối đa là {param} ký tự!',
            ],
        ];

        // reset all previous errors
        $this->validation->reset();

        $this->validation->setRules($rules, $messages);
        $this->validation->withRequest($requestData)->run(); 

        return $this->validation;
    }
  
    public function deleteOrderModel($idUpdate) 
    {
        return $this->adminModel->deleteOrderModel($idUpdate);
    }
        
    public function getDetailOrder($idUpdate)
    {
        return $this->adminModel->getDetailOrder($idUpdate);
    }
       
    /**
     * Login handle
     */
    public function LoginAdmin($loginAdmin, $emailAddress, $password) 
    {
        return $this->adminModel->LoginAdmin($loginAdmin, $emailAddress, $password);
    }
        
    public function RegisterAdmin($checkSubmit, $name, $emailAddress, $password) 
    {
        if(isset($checkSubmit)) {
            return $this->adminModel->RegisterAdmin($name, $emailAddress, $password);
        }
    }

    /**
     * User handle
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

    public function getUSers()
    {
        return $this->adminModel->getUSers();
    }

    public function getUSer($id)
    {
        return $this->adminModel->getUSer($id);
    }

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