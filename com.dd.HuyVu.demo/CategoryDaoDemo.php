<?php
include_once('../com.dd.HuyVu.dao/CategoryDao.php');

class categoryDaoDemo{
    
    //Hàm kiểm tra thêm dữ liệu
    public function insertTest(){
        $row = new Category(1, 'adidas');
        $category = new CategoryDao();
        
        var_dump($category->insert('category', $row));
    }

    //Hàm kiểm tra cập nhật dữ liệu
    public function updateTest(){
        $row = new Category(1, 'LV');
        $category = new CategoryDao();
        var_dump($category->update( 'category',$row));
    }

    //Hàm kiểm tra tìm kiếm dữ liệu
    public function findAllTest(){
        $category = new CategoryDao();
        var_dump($category->findAll('category'));
    }

    //Hàm kiểm tra tìm kiếm dữ liệu theo id
    public function findByIdTest(){
        $category = new CategoryDao();
        var_dump($category->findById('category',1));
    }

    //Hàm kiểm tra xóa dữ liệu
    public function deleteTest(){
        $row = new Category(1, 'LV');
        $category = new CategoryDao();
        var_dump($category->delete('category',$row));
    }
}

$cate = new categoryDaoDemo();
$cate->insertTest();
$cate->updateTest();
$cate->findAllTest();
$cate->findByIdTest();
$cate->deleteTest();