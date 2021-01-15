<?php
abstract class BaseDao{

    //Hàm Thêm dữu liệu vào Database 
    public function insert($name,$row){
        $db = new Database();
        return $db->insertTable($name,$row);
    }

    //Hàm cập nhật dữ liệu theo tên
    public function update($name, $row){
        $db = new Database();
        if($db->updateTable($name, $row)){
            return $db;
        }
        else{
            return null;
        }
    }

    //Hàm Xóa dữ liệu trong database theo tên
    public function delete($name, $row){
        $db = new Database();
        return $db->deleteTable($name, $row);
    }

    //Hàm tìm kiếm dữ liệu database
    public function findAll($name){
        $db = new Database();
        return $db->selectTable($name);
    }
    
    //Hàm tìm kiếm dữ liệu database theo id 
    public function findById($name , $id){
        $db = new Database();
        foreach($db->selectTable($name) as $key => $category){
            if($category->getId() == $id){
                return $category->getId();
            }
        }
    }
}