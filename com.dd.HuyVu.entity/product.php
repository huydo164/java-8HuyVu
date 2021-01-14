<?php
include_once('baserow.php');
class Product extends BaseRow{
    protected $id;
    protected $name;
    protected $categoryId;

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

    public function getName(){
        return $this->name;
    }
}
