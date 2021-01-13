<?php
include('../com.dd.HuyVu.entity/product.php');
include('../com.dd.HuyVu.dao/Database.php');
include('../com.dd.HuyVu.entity/category.php');
include('../com.dd.HuyVu.Accessotion/Accessotion.php');


class DatabaseDemo extends Database{

    public function insertTableTest(){
        $pro = new Product(1, 'adidas', 1);
        $cate = new Category(2, 'nike');
        $access = new Accessotion(3, 'van');

        $this->insertTable('product', $pro);
        $this->insertTable('category', $cate);
        $this->insertTable('accessory', $access);
    }

    public function selectTableTest(){

        var_dump($this->selectTable('product'));
        var_dump($this->selectTable('category'));
        var_dump($this->selectTable('accessory'));
    }

    public function updateTableTest(){
        $pro1 = new Product(1, 'bitisHunter',3);
        $cate1 = new Category(2, 'chelseBoot');
        $access1 = new Accessotion(3, 'convert');

        $pro2 = new Product(4, 'thuongdinh', 3);
        $cate2 = new Category(2, 'balenciaga');
        $access2 = new Accessotion(5, 'puma');

        var_dump($this->updateTable('product', $pro1));
        var_dump($this->updateTable('category', $cate1));
        var_dump($this->updateTable('accessory', $access1));

        var_dump($this->updateTable1(1,'product',$pro2 ));
        var_dump($this->updateTable1(2, 'category', $cate2));
        var_dump($this->updateTable1(3, 'accessory', $access2));
    }

    public function deleteTableTest(){
        $pro1 = new Product(1, 'adidas',3);
        $cate1 = new Category(2, 'rolex');
        $access1 = new Accessotion(3, 'pipo');

        var_dump($this->deleteTable('product', $pro1));
        var_dump($this->deleteTable('category', $cate1));
        var_dump($this->deleteTable('accessory', $access1));
    }

    public function truncateTableTest(){
        var_dump($this->truncateTable('product'));
        var_dump($this->truncateTable('category'));
        var_dump($this->truncateTable('accessory'));
    }

    public function initDatabase(){
        $listName = ['adidas', 'LV', 'bitistHunter', 'Rolex', 'Hublot', 'Mac', 'lenovo', 'hp', 'dell'];
        
        for($i = 1; $i <= 10; $i++){
            $pro = new Product(rand(1, 10), $listName[array_rand($listName)], rand(1,10));
            $cate = new Category(rand(1,10), $listName[array_rand($listName)]);
            $access = new Accessotion(rand(1,10), $listName[array_rand($listName)]);

            $this->insertTable('product',$pro);
            $this->insertTable('category', $cate);
            $this->insertTable('accessory', $access);
        }
    }
    public function printTest(){
        return $this;
    }
}

$dbd = new DatabaseDemo();
$dbd->initDatabase();
var_dump($dbd->printTest());