<?php

interface IDao{
    public function insert($name,$row);
    public function update($name, $row);
    public function delete($name, $row);
    public function findAll($name);
    public function findById($name , $id);
    public function findByName($name);
}