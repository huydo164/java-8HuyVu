<?php
class Product{
    private $id;
    private $name;
    private $categoryId;

    public function __construct($id, $name, $categoryId){
        $this->id = $id;
        $this->name = $name;
        $this->categoryId = $categoryId;
    }
    public function setId($id){
        $this->id = $id;
    }
    public  function getId(){
        return $this->id;
    }
}

$pro = new Product(21, 'huy', 1);