<?php
session_start();
require('../class/Cart.php');
require('../class/Db.php');
$id = $_GET['id'];
$userID = $_GET['userid'];
$db = new Database("localhost", "root", "", "ecommerce");
$cartInstance = new Cart($db);

if($_SESSION['ID'] == $userID){
    $cartInstance->removeProduct($id);
    header('Location: /');
} 

?>