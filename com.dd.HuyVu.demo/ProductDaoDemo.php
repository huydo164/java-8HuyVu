<?php
include('../com.dd.HuyVu.dao/ProductDao.php');
class ProductDaoDemo extends ProductDao{
    public function insertTest(){
        $row = new Product(1, 'Rolex', 1);
        $this->insert($row);
    }
}

$pro = new ProductDaoDemo();
$pro->insertTest();
var_dump($pro);