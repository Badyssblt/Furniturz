<?php
    session_start();
    if(isset($_SESSION['email'])){
        $productID = $_GET['id'];
        $userID = $_SESSION['ID'];
        require("../class/Cart.php");
        require("../class/Db.php");
        $db = new Database("localhost", "root", "", "ecommerce");
        $cart = new Cart($db);
        $cart->add($productID, $userID);
        header("Location: /");
    }else {
        header("Location : /signin");
    }
    
    
?>