<?php   
    require("../vendor/autoload.php");
    $router = new AltoRouter();
    require("./class/Db.php");
    $db = new Database("localhost", "root", "", "ecommerce");

    require('./components/header.php');

    $router->map('GET', '/', function() use ($db){ ?>
        <div class="container">
             <?php 
             require("./components/slider.php");
             require("./components/category.php");
             ?>
        </div>
        <?php
    });

    $router->map('GET', '/signup', function(){ ?>
    <main>
        <?php require('./components/signupForm.php'); ?>
    </main>

    <?php
    });

    $router->map('GET', '/signin', function(){ ?>
        <main>
            <?php require('./components/signinForm.php'); ?>
        </main>
    <?php
    });

    $router->map('GET', '/account', function(){?>
    <main>
        <?php require("./components/account.php"); ?>
    </main>
    <?php
    });

    $router->map("GET", '/logout', function() use ($db){
        require("./process/logout.php");
    });


    $match = $router->match();
   if($match !== null){
    $target = $match['target'];
    if(is_callable($target)){
        call_user_func($target);
    }else {
        echo "Erreur de routes";
    }
   }

   require("./components/footer.php");
?>
