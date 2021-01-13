<?php
include('../com.dd.HuyVu.entity/category.php');
include('Database.php');
class CategoryDao extends Database{
    public function insert(Category $row){
        if($this->insertTable('category', $row)){
            return true;
        }
        else{
            return false;
        }
    }

    public function update($row){

    }

    public function delete($row){

    }
    
    public function findAll(){

    }

    public function findById($name){

    }
}