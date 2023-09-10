<?php
    require("../class/User.php");
    require("../class/Db.php");
    $db = new Database("localhost", "root", "", "ecommerce");
    $user = new User($db);
    extract($_POST);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $user->Register($name, $surname, $email,$password);
    header("Location: /signin");
?>