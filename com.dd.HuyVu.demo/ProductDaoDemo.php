<?php
include_once('../com.dd.HuyVu.dao/ProductDao.php');
class ProductDaoDemo extends ProductDao{

    //insert
    public function insertTest(){
        $row = new Product(1, 'Rolex', 1);
        $product = new ProductDao();
        var_dump($product->insert($row));
    }

    //UpdateTest
    public function updateTest(){
        $row = new Product(1, 'LV', 1);
        $product = new ProductDao();
        var_dump($product->update($row));
    }

    //DeleteTest
    public function deleteTest(){
        $row = new Product(1, 'LV', 2);
        $product = new ProductDao();
        var_dump($product->delete($row));
    }

    //findAllTest
    public function findAllTest(){
        $product = new ProductDao();
        var_dump($product->findAll());
    }

    //findByIdTest
    public function findByIdTest(){
        $product = new ProductDao();
        var_dump($product->findById(1));
    }

    //findByName
    public function findByNameTest(){
        $product = new ProductDao();
        var_dump($product->findByName('huy'));
    }
}

$pro = new ProductDaoDemo();
$pro->insertTest();
$pro->updateTest();
$pro->deleteTest();
$pro->findAllTest();
$pro->findByIdTest();
$pro->findByNameTest();