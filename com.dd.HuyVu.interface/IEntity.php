<?php

interface IEntity{
    
    public function setData($id, $name);
    public function setName($name);
    public function getName();
    public function getId();
}