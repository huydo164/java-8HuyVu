<?php
define('PRODUCT', 'product');
define('CATEGORY', 'category');
define('ACCESSORY', 'accessory');

class Database{
    public $productTable = [];
    public $categoryTable = [];
    public $accessoryTable = [];
    public $instance;

    //Insert
    public function insertTable($name,BaseRow $row){
        if($name === PRODUCT){
            array_push($this->productTable, $row);
        }
        elseif($name === CATEGORY){
            array_push($this->categoryTable, $row);
        }
        elseif($name === ACCESSORY){
            array_push($this->accessoryTable, $row);
        }
    }

    //Select
    public function selectTable( $name){
        if($name === PRODUCT){
            return $this->productTable;
        }
        elseif($name === CATEGORY){
            return $this->categoryTable;
        }
        elseif($name === ACCESSORY){
            return $this->accessoryTable;
        }
    }

    //Update
    public function updateTable($name,BaseRow $row){
        if($name === PRODUCT){
            foreach($this->productTable as $key => $product){
                if($product->getId() == $row->getId()){
                    $this->productTable[$key] = $row;
                    return $this->productTable;
                }
            }
        }
        elseif($name === CATEGORY){
            foreach($this->categoryTable as $key => $category){
                if($category->getId() == $row->getId()){
                    $this->categoryTable[$key] = $row;
                    return $this->categoryTable;
                }
            }
        }
        elseif($name === ACCESSORY){
            foreach($this->accessoryTable as $key => $accessory){
                if($accessory->getId() == $row->getId()){
                    $this->accessoryTable[$key] = $row;
                    return $this->accessoryTable;
                }
            }
        }
    }
    
    //Delete
    public function deleteTable($name,BaseRow $row){
        if($name === PRODUCT){
            foreach($this->productTable as $key => $product){
                if($product->getId() == $row->getId()){
                    unset($this->productTable[$key]);
                    return $this->productTable;
                }
            }
        }
        elseif($name === CATEGORY){
            foreach($this->categoryTable as $key => $category){
                if($category->getId() === $row->getId()){
                    unset($this->categoryTable[$key]);
                    return $this->categoryTable;
                }
            }
        }
        elseif($name === ACCESSORY){
            foreach($this->accessoryTable as $key => $accessory){
                if($accessory->getId() === $row->getId()){
                    unset($this->accessoryTable[$key]);
                    return $this->accessoryTable;
                }
            }
        }
    }

    //Truncate
    public function truncateTable( $name){
        if($name === PRODUCT){
            $this->productTable = [];
            return $this->productTable;
        }
        elseif($name === CATEGORY){
            $this->productTable = [];
            return $this->categoryTable;
        }
        elseif($name === ACCESSORY){
            $this->productTable = [];
            return $this->accessoryTable;
        }
    }

    public function updateTable1($id,$name , BaseRow $row){
        if($name === PRODUCT){
            foreach($this->productTable as $key => $product){
                if($product->getId() == $id){
                    $this->productTable[$key] = $row;
                    return $this->productTable;
                }
            }
        }
        elseif($name === CATEGORY){
            foreach($this->categoryTable as $key => $category){
                if($category->getId() == $id){
                    $this->categoryTable[$key] = $row;
                    return $this->categoryTable;
                }
            }
        }
        elseif($name === ACCESSORY){
            foreach($this->accessoryTable as $key => $accessory){
                if($accessory->getId() == $id){
                    $this->accessoryTable[$key] = $row;
                    return $this->accessoryTable;
                }
            }
        }
    }
}
