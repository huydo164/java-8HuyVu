<?php
include_once('../com.dd.HuyVu.entity/product.php');
include_once('Database.php');
include_once('BaseDao.php');
class ProductDao extends BaseDao{

    //Hàm tìm kiếm dữ liệu database theo tên truyền vào
    public function findByName($name){
        $db = Database::getInstance();
        foreach($db->selectTable('product') as $key => $product){
            if($product->getName() == $name){
                return $product->getName();
            }
        }
    }

    //Search
    public function search($where){}
}