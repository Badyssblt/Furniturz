<?php   
    require("../vendor/autoload.php");
    $router = new AltoRouter();
    require("./class/Db.php");
    $db = new Database("localhost", "root", "", "ecommerce");

    require('./components/header.php');

    $router->map('GET', '/', function() use ($db){ ?>
        <div class="container">
             <?php require("./components/slider.php"); ?>
        </div>
        <?php
    });

    $router->map('GET', '/signup', function(){ ?>
    <main>
        <?php require('./components/signinForm.php'); ?>
    </main>

    <?php
    });


    $match = $router->match();
   if($match !== null){
    call_user_func_array($match["target"], $match["params"]);
   }

   require("./components/footer.php");
?>
