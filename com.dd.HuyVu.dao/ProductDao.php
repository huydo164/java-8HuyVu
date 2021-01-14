<?php
include_once('../com.dd.HuyVu.entity/product.php');
include_once('Database.php');
class ProductDao{

    //insert
    public function insert(product $row){
        $db = new Database();
        $db->insertTable('product',$row);
        if($db){
            return $db;
        }
        else{
            return false;
        }
    }

    //update
    public function update(product $row){
        $db = new Database();
        if($db->updateTable('product', $row)){
            return $db;
        }
        else{
            return false;
        }
    }
    
    //delete
    public function delete($row){
        $db = new Database();
        if($db->deleteTable('product', $row)){
            return true;
        }
        else{
            return false;
        }
    }

    //findAll
    public function findAll(){
        $db = new Database();
        $db->selectTable('product');
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
        foreach($db->selectTable('product') as $key => $category){
            if($category->getId() == $id){
                return $category->getId();
            }
        }
    }

    //findByName
    public function findByName($name){
        $db = new Database();
        foreach($db->selectTable('product') as $key => $category){
            if($category->getName() == $name){
                return $category->getName();
            }
        }
    }

    //Search
    public function search($where){

    }
}