<?php
include_once('../com.dd.HuyVu.dao/ProductDao.php');
class ProductDaoDemo{

    //Hàm kiểm tra thêm dữ liệu
    public function insertTest(){
        $row = new Product(1, 'Rolex', 1);
        $product = new ProductDao();
        var_dump($product->insert('product',$row));
    }

    //Hàm kiểm tra cập nhật dữ liệu
    public function updateTest(){
        $row = new Product(1, 'LV', 1);
        $product = new ProductDao();
        var_dump($product->update('product',$row));
    }

    //Hàm kiểm tra xóa dữu liệu
    public function deleteTest(){
        $row = new Product(1, 'LV', 2);
        $product = new ProductDao();
        var_dump($product->delete('product',$row));
    }

    //Hàm kiểm tra tìm kiếm dữ liệu
    public function findAllTest(){
        $product = new ProductDao();
        var_dump($product->findAll('product'));
    }

    //Hàm kiểm tra tìm kiếm dữ liệu theo id
    public function findByIdTest(){
        $product = new ProductDao();
        var_dump($product->findById('product',1));
    }

    //Hàm kiểm tra tìm kiếm dữ liệu theo name
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