<?php
include_once('Database.php');
include_once('../com.dd.HuyVu.entity/category.php');

class CategoryDao{
    //Insert
    public function insert(Category $row){
        $db = new Database();
        $db->insertTable('category', $row);
        if($db){
            return $db;
        }
        else{
            return false;
        }
    }

    //update
    public function update(Category $row){
        $db = new Database();
        if($db->updateTable('category', $row)){
            return $db;
        }
        else{
            return false;
        }
    }

    //delete
    public function delete($row){
        $db = new Database();
        if($db->deleteTable('category', $row)){
            return true;
        }
        else{
            return false;
        }
    }
    
    //findAll
    public function findAll(){
        $db = new Database();
        $db->selectTable('category');
        if($db){
            return $db;
        }
        else{
            return false;
        }
    }

    //findById
    public function findById($id){
        $db = new Database();
        foreach($db->selectTable('category') as $key => $category){
            if($category->getId() == $id){
                return $category->getId();
            }
        }
    }
}