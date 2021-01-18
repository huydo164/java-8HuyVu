<?php
include_once('../com.dd.HuyVu.interface/IEntity.php');
class Category implements IEntity{
    private $name;
    private $id;
    
    public function __construct($id, $name){
        $this->setData($id, $name);
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

