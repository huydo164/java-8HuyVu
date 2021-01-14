<?php

include_once('../com.dd.HuyVu.entity/product.php');
class ProductDemo extends Product{
    public function createProductTest(){
        $pro = new Product(1, 'Huy', 2);
        return $pro;
    }
    public function printProduct($product){
        var_dump($this->createProductTest());
    }
}

$pro = new ProductDemo(1, 'Chien', 2);
$pro->printProduct($pro->createProductTest());

