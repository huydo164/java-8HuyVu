<?php
include_once('../com.dd.HuyVu.dao/CategoryDao.php');

class categoryDaoDemo extends CategoryDao{
    
    //InsertTest
    public function insertTest(){
        $row = new Category(1, 'adidas');
        $category = new CategoryDao();
        var_dump($category->insert($row));
    }

    //UpdateTest
    public function updateTest(){
        $row = new Category(1, 'LV');
        $category = new CategoryDao();
        var_dump($category->update($row));
    }

    //DeleteTest
    public function deleteTest(){
        $row = new Category(1, 'LV');
        $category = new CategoryDao();
        var_dump($category->delete($row));
    }

    //findAllTest
    public function findAllTest(){
        $category = new CategoryDao();
        var_dump($category->findAll());
    }

    //findByIdTest
    public function findByIdTest(){
        $category = new CategoryDao();
        var_dump($category->findById(1));
    }
}

$cate = new categoryDaoDemo();
$cate->insertTest();
$cate->updateTest();
$cate->deleteTest();
$cate->findAllTest();
$cate->findByIdTest();
