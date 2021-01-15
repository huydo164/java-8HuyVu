<?php
include_once('../com.dd.HuyVu.entity/product.php');
include_once('../com.dd.HuyVu.entity/category.php');
include_once('../com.dd.HuyVu.entity/Accessotion.php');
include_once('../com.dd.HuyVu.dao/Database.php');

class DatabaseDemo{

    //Hàm kiểm tra Thêm dữ liệu
    public function insertTableTest(){
        $db = Database::getInstance();
        $pro = new Product(1, 'adidas', 1);
        $cate = new Category(2, 'nike');
        $access = new Accessotion(3, 'van');

        $db->insertTable('product', $pro);
        $db->insertTable('category', $cate);
        $db->insertTable('accessory', $access);
        
        var_dump($db);
    }

    //Hàm kiểm tra lấy dữ liệu
    public function selectTableTest(){
        $db = Database::getInstance();
        $db->selectTable('product');
        $db->selectTable('category');
        $db->selectTable('accessory');

        var_dump($db);
    }

    //Hàm kiểm tra cập nhật dữ liệu
    public function updateTableTest(){
        $db = Database::getInstance();
        $pro1 = new Product(1, 'bitisHunter',3);
        $cate1 = new Category(2, 'chelseBoot');
        $access1 = new Accessotion(3, 'convert');

        $pro2 = new Product(4, 'thuongdinh', 3);
        $cate2 = new Category(2, 'balenciaga');
        $access2 = new Accessotion(5, 'puma');

        $db->updateTable('product', $pro1);
        $db->updateTable('category', $cate1);
        $db->updateTable('accessory', $access1);

        $db->updateTable1(1,'product',$pro2 );
        $db->updateTable1(2, 'category', $cate2);
        $db->updateTable1(3, 'accessory', $access2);

        var_dump($db);
    }

    //Hàm kiểm tra xóa dữ liệu
    public function deleteTableTest(){
        $db = Database::getInstance();
        $pro1 = new Product(1, 'adidas',3);
        $cate1 = new Category(2, 'rolex');
        $access1 = new Accessotion(3, 'pipo');

        $db->deleteTable('product', $pro1);
        $db->deleteTable('category', $cate1);
        $db->deleteTable('accessory', $access1);

        var_dump($db);
    }

    //Hàm kiểm tra xóa hết dữ liệu
    public function truncateTableTest(){
        $db->truncateTable('product');
        $db->truncateTable('category');
        $db->truncateTable('accessory');

        var_dump($db);
    }

    //Hàm tạo 10 dữ liệu
    public function initDatabase(){
        $db = Database::getInstance();
        for($i = 1; $i <= 10; $i++){
            $pro = new Product(rand(1, 10), substr(md5(microtime()),rand(0,26),5), rand(1,10));
            $cate = new Category(rand(1,10), substr(md5(microtime()),rand(0,26),5));
            $access = new Accessotion(rand(1,10), substr(md5(microtime()),rand(0,26),5));

            $db->insertTable('product',$pro);
            $db->insertTable('category', $cate);
            $db->insertTable('accessory', $access);

            var_dump($db);
        }
    }

    //Hàm chạy chương trình
    public function printTest(){
        $db = Database::getInstance();
        var_dump($db);
    }
}

$dbd = new DatabaseDemo();
$dbd->insertTableTest();
$dbd->selectTableTest();
echo '<br>';
$dbd->updateTableTest();
echo '<br>';
$dbd->printTest();  
