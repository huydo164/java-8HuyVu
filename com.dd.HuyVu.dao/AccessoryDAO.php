<?php
include('Database.php');
include('../com.dd.HuyVu.entity/Accessotion.php');

class AccessionDao{
    //Insert
    public function insert(Accessotion $row){
        $db = new Database();
        $db->insertTable('accessory', $row);
        if($db){
            return $db;
        }
        else{
            return false;
        }
    }

    //update
    public function update(Accessotion $row){
        $db = new Database();
        if($db->updateTable('accessory', $row)){
            return $db;
        }
        else{
            return false;
        }
    }

    //delete
    public function delete($row){
        $db = new Database();
        if($db->deleteTable('accessory', $row)){
            return true;
        }
        else{
            return false;
        }
    }
    
    //findAll
    public function findAll(){
        $db = new Database();
        $db->selectTable('accessory');
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
        foreach($db->selectTable('accessory') as $key => $accessory){
            if($accessory->getId() == $id){
                return $accessory->getId();
            }
        }
    }

    //findByName
    public function findByName($name){
        $db = new Database();
        foreach($db->selectTable('accessory') as $key => $category){
            if($accessory->getName() == $name){
                return $accessory->getName();
            }
        }
    }

    //Search
    public function search($where){

    }
}