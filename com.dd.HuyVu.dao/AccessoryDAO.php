<?php
include('Database.php');
include('../com.dd.HuyVu.entity/Accessotion.php');
include_once('BaseDao.php');

class AccessionDao extends BaseDao{
    
    //Hàm tìm kiếm dữ liệu database theo tên truyền vào
    public function findByName($name){
        $db = Database::getInstance();
        foreach($db->selectTable('accessory') as $key => $accessory){
            if($accessory->getName() == $name){
                return $accessory->getName();
            }
        }
    }

    //Search
    public function search($where){}
}