<?php
include_once('baserow.php');
class Accessotion extends BaseRow{
    private $id;
    private $name;

    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
}