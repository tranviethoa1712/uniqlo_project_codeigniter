<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\Query;

class AdminModel extends Model
{
    protected $table = 'products';

    /**
     * Category handle 
     * 1. CURD
     * 2. Check Info 
     */
    public function addCategoryModel($titlePost, $namePost)
    {
        if (isset($titlePost) && isset($namePost))  {

            $db = $this->db;

            // Prepare the Query
            $pQuery = $db->prepare(static function ($db) {
                return $db->table('categories')->insert([
                    'name'    => 'x',
                    'title'   => 'y',
                ]);
            });

            // Run the Query
            $pQuery->execute($namePost, $titlePost);

            // Close out the prepared statement
            $pQuery->close();
        }
    }

    public function updateCategoryModel($titlePost, $namePost, $iddanhmuc)
    {
        if (isset($titlePost) && isset($namePost)) {

            $sql = "UPDATE categories SET title = ?, name = ? WHERE category_id = ?";
            $this->db->query($sql, array($titlePost, $namePost, $iddanhmuc));
        }
    }

    public function deleteCategoryModel($iddanhmuc)
    {
        $sql = "DELETE FROM categories WHERE category_id = ?";
        return $this->db->query($sql, array($iddanhmuc));
    }

    public function getCategories()
    {
        $db = db_connect();

        $builder = $db->table('categories');
        $builder->select('*');
        $query   = $builder->get()->getResultArray();
        return $query;
    }

    public function getCategoriesDistinct()
    {
        $db = $this->db;

        $builder = $db->table('categories');
        $builder->distinct('title');
        $query   = $builder->get()->getResultArray();

        return $query;
    }

    public function getCategory($iddanhmuc)
    {
        $db = $this->db;
        $id_category = $iddanhmuc;

        $builder = $db->table('categories');
        $builder->select('*');
        $builder->where('category_id', $id_category);
        $query   = $builder->get()->getResultArray();

        return $query;
    }

    public function hasCategoryInfo($title_category, $name_category)
    {
        //check category
        $sql = "SELECT * FROM categories WHERE title = ? AND name = ?";

        $result = $this->db->query($sql, array($title_category, $name_category));
        $number_of_result = $result->getNumRows();

        if ($number_of_result > 0) {
            return true;
        }
        return false;
    }

    /**
     * Attributes handle 
     * main: CURD
     */

     public function addAttributeModel($name_attribute, $code_attribute, $unit_attribute)
     {
         if (isset($name_attribute) && isset($code_attribute) && isset($unit_attribute)) {
 
             $db = $this->db;
 
             $nameCollect = "";
             $skuCollect = "";
             $unitCollect = "";
 
             $sql = "SELECT * FROM attributes WHERE attribute_sku = '$code_attribute'";
             $query = $db->query($sql);
             $checkRow = $query->getNumRows();
 
             if ($checkRow > 0) {
                 $alert = "attribute đã tồn tại";
                 return $alert;
             } else {
                 // Prepare the Query
                 $pQuery = $db->prepare(static function ($db) {
                     return $db->table('attributes')->insert([
                         'name'    => 'x',
                         'attribute_sku'   => 'y',
                         'unit' => 'z',
                     ]);
                 });
 
                 $nameCollect = $name_attribute;
                 $skuCollect = $code_attribute;
                 $unitCollect = $unit_attribute;
 
 
                 // Run the Query
                 $pQuery->execute($nameCollect, $skuCollect, $unitCollect);
 
                 // Close out the prepared statement
                 $pQuery->close();
             }
         }
     }
  
    public function updateAttributeModel($name_update, $code_update, $unit_update, $idAtt)
    {
        if (isset($name_update) && isset($code_update) && isset($unit_update)) {
            $sql = "UPDATE attributes SET name = ?, attribute_sku = ?, unit = ? WHERE attribute_id = ?";
            $this->db->query($sql, array($name_update, $code_update, $unit_update, $idAtt));
        }
    }

    public function deleteAttributeModel($idAtt)
    {
        $db = $this->db;

        // Prepare the Query
        $pQuery = $db->prepare(static function ($db) {
            return $db->table('attributes')->delete([
                'attribute_id'    => 'x',
            ]);
        });

        // Run the Query
        $pQuery->execute($idAtt);
        // Close out the prepared statement
        $pQuery->close();
    }

    public function getAttributes()
    {
        $db = $this->db;

        $builder = $db->table('attributes');
        $builder->select('*');
        $query   = $builder->get()->getResultArray();

        return $query;
    }

    public function getAttribute($id_attribute)
    {
        $db = $this->db;
        $builder = $db->table('attributes');
        $builder->select('*');
        $builder->where('attribute_id', $id_attribute);
        $query   = $builder->get()->getResultArray();

        return $query;
    }

    /**
     * Products handle
     * 1. CURD
     * 2. Check Info 
     */
    public function addProductModel($category_id, $code_product, $title_product, $price_product, $thumbnails , $description_product, $images, $gender_product, $status_product)
    {
        if (isset($category_id)  && isset($code_product) && isset($title_product) && isset($price_product) && isset($thumbnails)  && isset($images) && isset($gender_product) && isset($description_product) && isset($status_product)) {

            $db = $this->db;
            $code_product = url_title($code_product, '-', true);
            // Prepare the Query
            $pQuery = $db->prepare(static function ($db) {
                return $db->table('products')->insert([
                    'category_id'    => 'x',
                    'sku'   => 'y',
                    'title'   => 'z',
                    'price'   => 'a',
                    'thumbnail'   => 'b',
                    'description'   => 'c',
                    'images'   => 'd',
                    'gender'   => 'e',
                    'status'   => 'f',
                ]);
            });

 
            //lấy name paths
            foreach ($thumbnails['images'] as $key) {
                $containerFileNameThumnails[] = $key->getClientName();
            }

            $containerFileNameThumnails = json_encode($containerFileNameThumnails);

            //lấy name paths
            foreach ($images['images'] as $key) {
                $containerFileNameImages[] = $key->getClientName();
            }

            $containerFileNameImages = json_encode($containerFileNameImages);

            // Run the Query
            $pQuery->execute($category_id, $code_product, $title_product, $price_product, $containerFileNameThumnails, $description_product,  $containerFileNameImages, $gender_product, $status_product);
            // Close out the prepared statement
            $pQuery->close();
        }
    }

    public function updateProductModel($categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $thumbnailsProductPost, $descriptionProductPost, $imagesProductPost, $genderProductPost, $statusProductPost, $product_id)
    {
        if (isset($categoryIdPost)  && isset($codeProductPost) && isset($titleProductPost) && isset($priceProductPost) && isset($thumbnailsProductPost)  && isset($imagesProductPost) && isset($genderProductPost) && isset($descriptionProductPost) && isset($statusProductPost)) {

            //lấy name paths
            foreach ($thumbnailsProductPost['images'] as $key) {
                $containerFileNameThumnails[] = $key->getRandomName();
            }

            $containerFileNameThumnails = json_encode($containerFileNameThumnails);

            //lấy name paths
            foreach ($imagesProductPost['images'] as $key) {
                $containerFileNameImages[] = $key->getRandomName();
            }

            $containerFileNameImages = json_encode($containerFileNameImages);

            $sql = "UPDATE products SET category_id = ?, sku = ?, title = ?, price = ?, thumbnail = ?, description = ?, images = ?, gender = ?, status = ?  WHERE product_id = ?";
            $this->db->query($sql, array($categoryIdPost, $codeProductPost, $titleProductPost, $priceProductPost, $containerFileNameThumnails, $descriptionProductPost,  $containerFileNameImages, $genderProductPost, $statusProductPost, $product_id));
        }
    }

    public function deleteProductModel($product_id)
    {
        $db = $this->db;

        // Prepare the Query
        $pQuery = $db->prepare(static function ($db) {
            return $db->table('products')->delete([
                'product_id'    => 'x',
            ]);
        });

        // Run the Query
        $pQuery->execute($product_id);
        // Close out the prepared statement
        $pQuery->close();
    }

    public function getProductId($idsanpham)
    {
        $db = $this->db;

        $builder = $db->table('products');
        $builder->select('*');
        $builder->where('product_id', $idsanpham);
        $query   = $builder->get(1)->getResultArray();

        return $query;
    }

    public function getProducts()
    {
        $db = $this->db;

        $builder = $db->table('products');
        $builder->select('*');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    /**
     * Product Attributes handle
     * 1. CURD
     * 2. Check Info 
     */
    public function hasAttPrdInfo($product_id, $attribute_id)
    {
        //check trùng liên kết

        $query = "SELECT * FROM product_attribute WHERE product_id = $product_id AND attribute_id = $attribute_id";
        $result = $this->db->query($query);
        $number_of_result = $result->getNumRows();

        if ($number_of_result > 0) {
            return true;
        }
        return false;
    }

    public function addAttributeProductModel($product_id, $attribute_id)
    {
        if (isset($product_id)  && isset($attribute_id)) {

            $db = $this->db;

            // Prepare the Query
            $pQuery = $db->prepare(static function ($db) {
                return $db->table('product_attribute')->insert([
                    'product_id'    => 'x',
                    'attribute_id'   => 'y',
                ]);
            });

            // Run the Query
            $results = $pQuery->execute($product_id, $attribute_id);

            // Close out the prepared statement
            $pQuery->close();
            return $results;
        }
    }

    public function updateProductAttributeModel($product_id, $attribute_id, $idPrdAtt)
    {
        if ($product_id && $attribute_id) {

            $db = $this->db;

            $sql = "UPDATE product_attribute SET product_id = ?, attribute_id = ? WHERE id = ?";
            $this->db->query($sql, array($product_id, $attribute_id, $idPrdAtt));
        }
    }

    public function deleteProductAttributeModel($idPrdAtt)
    {
        $db = $this->db;

        // Prepare the Query
        $pQuery = $db->prepare(static function ($db) {
            return $db->table('product_attribute')->delete([
                'id'    => 'x',
            ]);
        });

        // Run the Query
        $pQuery->execute($idPrdAtt);
        // Close out the prepared statement
        $pQuery->close();
    }

    public function getProductAttribute()
    {
        $db = $this->db;
        $query = $db->query('SELECT products.product_id, products.title, products.sku, 
        attributes.attribute_id, attributes.name, attributes.attribute_sku, 
        products.gender, product_attribute.id
        FROM products, attributes, product_attribute
        WHERE product_attribute.product_id = products.product_id
        AND product_attribute.attribute_id = attributes.attribute_id');

        $result =  $query->getResultArray();

        return $result;
    }

    public function getProductAttributeId($idPrdAtt)
    {

        $db = $this->db;

        $builder = $db->table('product_attribute');
        $builder->select('*');
        $builder->where('id', $idPrdAtt);
        $query   = $builder->get(1)->getResultArray();

        return $query;
    }

    /**
     * Pagination Data Ci4
     */
    public function getCategoryPaginationData()
    {
        $this->table = 'categories';
        return $this->orderBy('category_id', 'DESC')->paginate(10);
    }

    public function getProductPaginationData()
    {
        $this->table = 'products';
        return $this->orderBy('product_id', 'DESC')->paginate(10);
    }

    public function getAttributePaginationData()
    {
        $this->table = 'attributes';
        return $this->orderBy('attribute_id', 'DESC')->paginate(10);
    }

    public function getOrderPaginationData()
    {
        $this->table = 'orders';
        return $this->orderBy('order_id', 'DESC')->paginate(10);
    }

    public function getCustomerPaginationData()
    {
        $this->table = 'customers';
        return $this->orderBy('customer_id', 'DESC')->paginate(10);
    }

    public function pagerCategories()
    {
        $this->table = 'categories';
        return $this->pager;
    }

    public function pagerProducts()
    {
        $this->table = 'products';
        return $this->pager;
    }

    public function pagerAttributes()
    {
        $this->table = 'attributes';
        return $this->pager;
    }

    public function pagerOrders()
    {
        $this->table = 'orders';
        return $this->pager;
    }
 
    public function pagerCustomers()
    {
        $this->table = 'customers';
        return $this->pager;
    }
 
    public function pagerAttributeProducts()
    {
        $this->table = 'product_attribute';
        return $this->pager;
    }

    /**
     * Pagination manually
     */
    public function paginationProducts($pageCurrent)
    {
 
        //define total number of results you want per page  
        $results_per_page = 10;

        //find the total number of results stored in the database  
        $query = "SELECT * FROM products";
        $result = $this->db->query($query);
        $number_of_result = $result->getNumRows();

        //determine the total number of pages available  
        $number_of_page = ceil($number_of_result / $results_per_page);

        //determine which page number visitor is currently on  
        if (!isset($pageCurrent)) {
            $page = 1;
        } else {
            $page = $pageCurrent;
        }

        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page - 1) * $results_per_page;

        //retrieve the selected results from database   
        $query = "SELECT *FROM products LIMIT " . $page_first_result . ',' . $results_per_page;
        $result = $this->db->query($query);

        $data = [];
        $data['result'] = $result->getResultArray();
        $data['numberOfPage'] =  $number_of_page;
        return $data;
    }

    public function getAttributeProductPaginationData (?int $perPage = null) {
        $this->table('product_attribute');
        $perPage = 10;

        $this->builder('product_attribute')
        ->select('product_attribute.*')
        ->select('products.title, products.sku, products.gender')
        ->select('attributes.name, attributes.attribute_sku, attributes.unit')
        ->join('attributes', 'attributes.attribute_id = product_attribute.attribute_id', 'LEFT')
        ->join('products', 'products.product_id = product_attribute.product_id', 'LEFT')
        ->orderBy('product_attribute.id' ,'DESC');
        
        return [
            'ProductAtrributePaginationData'  => $this->paginate($perPage),
            'pager' => $this->pager,
        ];

    }

    public function paginationProductAtt($pageGet)
    {
        //define total number of results you want per page  
        $results_per_page = 10;

        //find the total number of results stored in the database  
        $query = "SELECT products.title, products.sku, 
        attributes.name, attributes.attribute_sku, 
        products.gender, product_attribute.id
        FROM products, attributes, product_attribute
        WHERE product_attribute.product_id = products.product_id
        AND product_attribute.attribute_id = attributes.attribute_id
        "; 

        $result = $this->db->query($query);
        $number_of_result = $result->getNumRows();

        //determine the total number of pages available  
        $number_of_page = ceil($number_of_result / $results_per_page);

        //determine which page number visitor is currently on  
        if (!isset($pageGet)) {
            $page = 1;
        } else {
            $page = $pageGet;
        }

        //determine the sql LIMIT starting number for the results on the displaying page  
        $page_first_result = ($page - 1) * $results_per_page;

        //retrieve the selected results from database   
        $query = "SELECT products.title, products.sku, 
        attributes.name, attributes.attribute_sku, attributes.unit,
        products.gender, product_attribute.id
        FROM products, attributes, product_attribute
        WHERE product_attribute.product_id = products.product_id
        AND product_attribute.attribute_id = attributes.attribute_id
        LIMIT " . $page_first_result . ',' . $results_per_page;
        $result = $this->db->query($query);

        $data = [];
        $data['result'] = $result->getResultArray();
        $data['numberOfPage'] =  $number_of_page;
        return $data;
    }

    /**
     * Filter product data
     */
    public function productFilter($filterSubmit, $containerInputFilter, $page)
    {
        if (isset($filterSubmit) && isset($containerInputFilter)) {

            //lấy data filter 
            $inputFilter = $containerInputFilter;

            $result = [];
            foreach ($inputFilter as $each) {
                $sql = "SELECT * FROM products WHERE gender = '$each'";
                $query = $this->db->query($sql);
                $result[] = $query->getResultArray();
            }

            //pagination
            //số trang muốn chia = 10
            $results_per_page = 10;

            //số hàng của filter data
            $countRow = 0;
            foreach ($result as $val) {
                foreach ($val as $item => $row) {
                    $countRow++;
                }
            }

            //tổng số page có thể show
            $number_of_page = ceil($countRow / $results_per_page);

            //hiện tại đang ở page nào
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page = $_GET['page'];
            }

            //dùng LIMIT để quyết định xem bắt đầu show dữ liệu từ row nào
            $page_first_result = ($page - 1) * $results_per_page;
            $countRowStart = 0;
            $endRow = 0;
            $data = [];
            $data['resultPaginationFilter'] = [];

            foreach ($result as $val) {
                foreach ($val as $item => $row) {
                    $countRowStart++;
                    if ($countRowStart == $endRow) {
                        break;
                    }
                    if ($countRowStart == $page_first_result) {

                        $endRow = $countRowStart + $results_per_page;
                    }
                    if ($countRowStart >= $page_first_result) {
                        $data['resultPaginationFilter'][] = $row;
                    }
                }
            }

            $data['numberOfPageFilter'] =  $number_of_page;

            return $data;
        }
    }

    /**
     * Order handle
     * 1. URD
     * 2. Check Info 
     */
    
    public function updateOrderModel($order_id, $fullname, $address, $phone_number, $status)
    {
        if (isset($fullname) && isset($address) && isset($phone_number) && isset($status)) {
            $sql = "UPDATE orders SET fullname = ?, address = ?, phone_number = ?, status = ? WHERE order_id = ?";
            $this->db->query($sql, array($fullname, $address, $phone_number, $status, $order_id));
        }
    }

    public function deleteOrderModel($idUpdate)
    {
        $db = $this->db;

        // Prepare the Query
        $pQuery = $db->prepare(static function ($db) {
            return $db->table('order_items')->delete([
                'order_id'    => 'x',
            ]);
        });

        // Run the Query
        $pQuery->execute($idUpdate);
        // Close out the prepared statement
        $pQuery->close();

        // Prepare the Query
        $pQuery = $db->prepare(static function ($db) {
            return $db->table('orders')->delete([
                'order_id'    => 'x',
            ]);
        });

        // Run the Query
        $pQuery->execute($idUpdate);
        // Close out the prepared statement
        $pQuery->close();
    }

    public function getOrders()
    {
        $db = $this->db;

        $builder = $db->table('orders');
        $builder->select('*');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    public function getOrder($id_order)
    {
        $db = $this->db;

        $builder = $db->table('orders');
        $builder->select('*');
        $builder->where('order_id', $id_order);
        $query = $builder->get()->getResultArray();

        return $query;
    }

    public function getDetailOrder($idUpdate)
    {
        $db = $this->db;
        $query = $db->query("SELECT order_items.order_item_id, order_items.order_id, order_items.product_id,
        order_items.price, order_items.quantity, order_items.total_money,
        products.title
        FROM order_items, products 
        WHERE order_items.order_id = '$idUpdate'
        AND order_items.product_id = products.product_id");

        $result = $query->getResultArray();
        return $result;
    }

    /**
     * Login handle
     * main: login process
     *  */ 
    public function LoginAdmin($loginAdmin, $emailAddress)
    {
        if (isset($loginAdmin)) {
            $db = $this->db;
            $builder = $db->table('admin_user');
            $builder->select('*');
            $builder->where('email', $emailAddress);
            $result = $builder->get()->getResultArray();
            return $result;
        }
    }

    /**
     * User handle
     * main: URD
     */
    public function updateUser($namePost, $emailPost, $passwordPost, $dobPost, $genderPost, $idUser)
    {
        $sql = "UPDATE customers SET name = ?, email = ?, password = ?, dob = ?, gender = ? WHERE customer_id = ?";
        $this->db->query($sql, array($namePost, $emailPost, $passwordPost, $dobPost, $genderPost, $idUser));
    }
    
    public function deleteUser($id)
    {
        $sql = "DELETE FROM customers WHERE customer_id = ?";
        $this->db->query($sql, array($id));
    }

    public function getUSers()
    {

        $db = $this->db;
        $builder = $db->table('customers');
        $builder->select('*');
        $result = $builder->get()->getResultArray();

        return $result;
    }

    public function getUSer($id)
    {
        $db = $this->db;
        $builder = $db->table('customers');
        $builder->select('*');
        $builder->where('customer_id', $id);
        $result = $builder->get()->getResultArray();

        return $result;
    }
}
