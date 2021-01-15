<?php
include_once('baserow.php');
class Category extends BaseRow{
    
    public function __construct($id, $name){
        $this->setData($id, $name);
    }
}
