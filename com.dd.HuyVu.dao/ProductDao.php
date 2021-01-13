<?php
include('../com.dd.HuyVu.entity/product.php');
include('Database.php');
class ProductDao extends Database{
    public function insert(product $row){
        if($this->insertTable('product', $row)){
            return true;
        }
        else{
            return false;
        }
    }

    public function update(product $row){

    }
    
    public function delete($row){

    }

    public function findAll(){

    }

    public function findById($id){

    }

    public function findByName($name){

    }

    public function search($where){

    }
}