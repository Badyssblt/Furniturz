<?php
    require("../class/User.php");
    require("../class/Db.php");
    $db = new Database("localhost", "root", "", "ecommerce");
    $user = new User($db);
    extract($_POST);
    $user->Login($email, $password);
    
?>