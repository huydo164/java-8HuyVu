<?php
include_once('baserow.php');
class Product extends BaseRow{
    private $categoryId;
    
    public function __construct($id, $name, $categoryId){
        $this->setData($id, $name);
        $this->categoryId = $categoryId;
    }
}
