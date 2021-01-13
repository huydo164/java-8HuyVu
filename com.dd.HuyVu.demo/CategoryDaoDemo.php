<?php
include('../com.dd.HuyVu.dao/CategoryDao.php');
class categoryDaoDemo extends CategoryDao{
    public function insertTest(){
        $row = new Category(1, 'adidas');
        $this->insert($row);
    }
}

$cate = new categoryDaoDemo();
$cate->insertTest();
var_dump($cate);