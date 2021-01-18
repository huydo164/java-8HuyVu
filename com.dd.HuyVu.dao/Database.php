<?php
define('PRODUCT', 'product');
define('CATEGORY', 'category');
define('ACCESSORY', 'accessory');

class Database{
    private $productTable = [];
    private $categoryTable = [];
    private $accessoryTable = [];
    protected static $instance = null;
    
    private function __construct(){}

    //Hàm lấy đối tượng 
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    //Hàm thêm dữ liệu vào database
    public function insertTable($name, $row){
        if($name === PRODUCT){
            array_push($this->productTable, $row);
        }
        if($name === CATEGORY){
            array_push($this->categoryTable, $row);
        }
        if($name === ACCESSORY){
            array_push($this->accessoryTable, $row);
        }
        return $this;
    }

    //Hàm lấy dữ liệu theo tên
    public function selectTable($name){
        if($name === PRODUCT){
            return $this->productTable;
        }
        if($name === CATEGORY){
            return $this->categoryTable;
        }
        if($name === ACCESSORY){
            return $this->accessoryTable;
        }
    }

    //Hàm cập nhật dữ liệu Database theo $row
    public function updateTable($name, $row){
        if($name === PRODUCT){
            foreach($this->productTable as $key => $product){
                if($product->getId() == $row->getId()){
                    $this->productTable[$key] = $row;
                    return $this->productTable;
                }
            }
        }
        if($name === CATEGORY){
            foreach($this->categoryTable as $key => $category){
                if($category->getId() == $row->getId()){
                    $this->categoryTable[$key] = $row;
                    return $this->categoryTable;
                }
            }
        }
        if($name === ACCESSORY){
            foreach($this->accessoryTable as $key => $accessory){
                if($accessory->getId() == $row->getId()){
                    $this->accessoryTable[$key] = $row;
                    return $this->accessoryTable;
                }
            }
        }
    }
    
    //Hàm xóa dữ liệu Database theo id
    public function deleteTable($name, $row){
        if($name === PRODUCT){
            foreach($this->productTable as $key => $product){
                if($product->getId() == $row->getId()){
                    unset($this->productTable[$key]);
                    return $this->productTable;
                }
            }
        }
        if($name === CATEGORY){
            foreach($this->categoryTable as $key => $category){
                if($category->getId() === $row->getId()){
                    unset($this->categoryTable[$key]);
                    return $this->categoryTable;
                }
            }
        }
        if($name === ACCESSORY){
            foreach($this->accessoryTable as $key => $accessory){
                if($accessory->getId() === $row->getId()){
                    unset($this->accessoryTable[$key]);
                    return $this->accessoryTable;
                }
            }
        }
    }

    //Hàm xáo dữ liệu database
    public function truncateTable( $name){
        if($name === PRODUCT){
            $this->productTable = [];
            return $this->productTable;
        }
        if($name === CATEGORY){
            $this->productTable = [];
            return $this->categoryTable;
        }
        if($name === ACCESSORY){
            $this->productTable = [];
            return $this->accessoryTable;
        }
    }

    //Hàm update dữ liệu database
    public function updateTable1($id,$name , $row){
        if($name === PRODUCT){
            foreach($this->productTable as $key => $product){
                if($product->getId() == $id){
                    $this->productTable[$key] = $row;
                    return $this->productTable;
                }
            }
        }
        if($name === CATEGORY){
            foreach($this->categoryTable as $key => $category){
                if($category->getId() == $id){
                    $this->categoryTable[$key] = $row;
                    return $this->categoryTable;
                }
            }
        }
        if($name === ACCESSORY){
            foreach($this->accessoryTable as $key => $accessory){
                if($accessory->getId() == $id){
                    $this->accessoryTable[$key] = $row;
                    return $this->accessoryTable;
                }
            }
        }
    }   
}
