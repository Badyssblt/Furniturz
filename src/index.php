<?php   
    require("../vendor/autoload.php");
    $router = new AltoRouter();
    require("./class/Db.php");
    $db = new Database("localhost", "root", "", "ecommerce");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/signin.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/account.css">
    <link rel="stylesheet" href="/css/homeProducts.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/hero.css">
    <title>Accueil</title>
</head>
<body>
    
</body>
</html>

<?php
    require('./components/header.php');
    $router->map('GET', '/', function() use ($db){ 
        require('./components/hero.php');
        require("./components/homeProducts.php");
    });

    $router->map("GET", '/signin', 'signin');
    $router->map("GET", '/signup', 'signup');
    $router->map("GET", '/account', 'account');
    $router->map("GET", '/logout', function () use ($db) {
        require("./process/logout.php");
    });
    $router->map('GET', '/product/[i:id]', 'product');
    $router->map("GET", '/product/process/addCart/[i:id]', 'addCart');


    $match = $router->match();
   if($match !== null){
    $target = $match['target'];
    if(is_callable($target)){
        call_user_func($target, $match['params']);
    }else {
        $params = $match['params'];
        require './pages/' . $match["target"] . ".php";
    }
   }

?>

<script src="https://kit.fontawesome.com/c1cb64b22b.js" crossorigin="anonymous"></script>
<script src="./javascript/account.js"></script>
<script src="/javascript/cart.js"></script>