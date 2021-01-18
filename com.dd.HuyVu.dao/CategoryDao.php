<?php
include_once('Database.php');
include_once('BaseDao.php');
include_once('../com.dd.HuyVu.entity/category.php');

class CategoryDao extends BaseDao{

     //Hàm Thêm dữu liệu vào Database 
     public function insert($name,$row){
        $db = Database::getInstance();
        return $db->insertTable($name,$row);
    }

    //Hàm cập nhật dữ liệu theo tên
    public function update($name, $row){
        $db = Database::getInstance();
        if($db->updateTable($name, $row)){
            return $db;
        }
        else{
            return null;
        }
    }

    //Hàm Xóa dữ liệu trong database theo tên
    public function delete($name, $row){
        $db = Database::getInstance();
        return $db->deleteTable($name, $row);
    }

    //Hàm tìm kiếm dữ liệu database
    public function findAll($name){
        $db = Database::getInstance();
        return $db->selectTable($name);
    }
    
    //Hàm tìm kiếm dữ liệu database theo id 
    public function findById($name , $id){
        $db = Database::getInstance();
        foreach($db->selectTable($name) as $key => $category){
            if($category->getId() == $id){
                return $category->getId();
            }
        }
    }
}