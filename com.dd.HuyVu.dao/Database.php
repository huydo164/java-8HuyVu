<?php
define('pro', 'product');
define('cate', 'category');
define('access', 'accessory');

class Database{
    public $productTable = [];
    public $categoryTable = [];
    public $accessoryTable = [];
    public $instance;

    

    //Insert
    public function insertTable($name, $row){
        if ($name){
            if($name === pro){
                array_push($this->productTable, $row);
            }
            elseif($name === cate){
                array_push($this->categoryTable, $row);
            }
            elseif($name === access){
                array_push($this->accessoryTable, $row);
            }
        }
    }

    //Select
    public function selectTable($name){
        if($name === pro){
            return $this->productTable;
        }
        elseif($name === cate){
            return $this->categoryTable;
        }
        elseif($name === access){
            return $this->accessoryTable;
        }
    }

    //Update
    public function updateTable($name,$row){
        if($name === pro){
            foreach($this->productTable as $key => $value){
                if($value->getId() == $row->getId()){
                    $this->productTable[$key] = $row;
                    return $this->productTable;
                }
            }
        }
        elseif($name === cate){
            foreach($this->categoryTable as $key => $value){
                if($value->getId() == $row->getId()){
                    $this->categoryTable[$key] = $row;
                    return $this->categoryTable;
                }
            }
        }
        elseif($name === access){
            foreach($this->accessoryTable as $key => $value){
                if($value->getId() == $row->getId()){
                    $this->accessoryTable[$key] = $row;
                    return $this->accessoryTable;
                }
            }
        }
    }
    
    //Delete
    public function deleteTable($name, $row){
        if($name === pro){
            foreach($this->productTable as $key => $value){
                if($value->getId() == $row->getId()){
                    unset($this->productTable[$key]);
                    return $this->productTable;
                }
            }
        }
        elseif($name === cate){
            foreach($this->categoryTable as $key => $value){
                if($value->getId() === $row->getId()){
                    unset($this->categoryTable[$key]);
                    return $this->categoryTable;
                }
            }
        }
        elseif($name === access){
            foreach($this->accessoryTable as $key => $value){
                if($value->getId() === $row->getId()){
                    unset($this->accessoryTable[$key]);
                    return $this->accessoryTable;
                }
            }
        }
    }

    //Truncate
    public function truncateTable($name){
        if($name === pro){
            $this->productTable = [];
            return $this->productTable;
        }
        elseif($name === cate){
            $this->productTable = [];
            return $this->categoryTable;
        }
        elseif($name === access){
            $this->productTable = [];
            return $this->accessoryTable;
        }
    }

    public function updateTable1($id,$name ,$row){
        if($name === pro){
            foreach($this->productTable as $key => $value){
                if($value->getId() == $id){
                    $this->productTable[$key] = $row;
                    return $this->productTable;
                }
            }
        }
        elseif($name === cate){
            foreach($this->categoryTable as $key => $value){
                if($value->getId() == $id){
                    $this->categoryTable[$key] = $row;
                    return $this->categoryTable;
                }
            }
        }
        elseif($name === access){
            foreach($this->accessoryTable as $key => $value){
                if($value->getId() == $id){
                    $this->accessoryTable[$key] = $row;
                    return $this->accessoryTable;
                }
            }
        }
    }
}
