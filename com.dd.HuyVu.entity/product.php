<?php
include_once('../com.dd.HuyVu.interface/IEntity.php');
class Product implements IEntity{
    private $name;
    private $id;
    private $categoryId;
    
    public function __construct($id, $name, $categoryId){
        $this->setData($id, $name);
        $this->categoryId = $categoryId;
    }

    public function setData($id, $name){
        $this->id = $id;
        $this->name = $name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getId(){
        return $this->id;
    }
}
