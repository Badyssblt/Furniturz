<?php

class Product {

    private $database;

    public function __construct($db){
        $this->database = $db;
    }

    public function getAllProduct($sql){
        $allProduct = $this->database->query($sql);
        return $allProduct;
        var_dump($allProduct);
    }

    public function getSingleProduct($id){
        $singleProduct = $this->database->query("SELECT * FROM products WHERE ID = " . $id);
        return $singleProduct;
    }

    public function getProductByName($name){
        $productName = $this->database->query("SELECT * FROM products WHERE name LIKE '%$name%' ");
        return $productName;
    }

    public function createProduct($name, $description, $price, $image){
        $sql = "INSERT INTO products VALUES (0, :name, :description, :price, :image)";
        $params = array("name" => $name, "description" => $description, "price" => $price, "image" => "");
        $createProduct = $this->database->create($sql, $params);
    }
    
    public function getProductsByCategory($id){
        $sql = "SELECT * FROM products WHERE category = '$id'";
        $getProduct = $this->database->query($sql);
        return $getProduct;
    }
}

    
?>