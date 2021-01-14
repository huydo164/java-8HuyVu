<?php
include_once('../com.dd.HuyVu.entity/product.php');
include_once('../com.dd.HuyVu.entity/category.php');
include_once('../com.dd.HuyVu.entity/Accessotion.php');
include_once('../com.dd.HuyVu.dao/Database.php');

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
        
        for($i = 1; $i <= 10; $i++){
            $pro = new Product(rand(1, 10), substr(md5(microtime()),rand(0,26),5), rand(1,10));
            $cate = new Category(rand(1,10), substr(md5(microtime()),rand(0,26),5));
            $access = new Accessotion(rand(1,10), substr(md5(microtime()),rand(0,26),5));

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
$dbd->insertTableTest();
$dbd->selectTableTest();
echo '<br>';
$dbd->updateTableTest();
