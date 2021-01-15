<?php
abstract class BaseRow{
    private $id;
    private $name;

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