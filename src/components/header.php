<?php
session_start();
require('./class/Cart.php');
if(isset($_SESSION['email'])){
    $cartInstance = new Cart($db);
    $cart = $cartInstance->getCart($_SESSION['ID']);
    
}

?>
<nav class="navbar__container">
    <ul class="navbar">
        <div class="navbar__title">
            <a href="/" style="text-decoration: none; color: black;"><li class='item logo'>Furniturz</li></a>
        </div>
        <div class="navbar__menu">
        <a href="/products" style='color: black; text-decoration: none;'><li class='item'>Nos produits</li></a>
            <li class='item'>Nous contacter</li>
        </div>
        <div class="navbar__icons" style="justify-self: end;">
            <li class='item'><input type="search" name="search" id="search" placeholder="Rechercher.."></li>
            <?php
                if(isset($_SESSION['email'])){ ?>
                    <a href="/account" style="color: black"><li class='item'><i class="fas fa-user"></i></li></a>
                    <li class='item' id='cart'><i class="fas fa-cart-shopping"></i>
                    <div class="cart__length">
                        <span><?=  count($cart); ?></span>
                    </div>
                        <div class="cart__content" style="display: none;">
                            <?php 
                                for($i = 0; $i < min(count($cart), 5); $i++){
                                    $ids = $cart[$i]['productID'];
                                    $cartItem = $db->query("SELECT * FROM products WHERE ID = '$ids'");                                    $src = 'data:image/png;base64,' . base64_encode($cartItem[0]["image"]);
                                    $price = $cart[$i]['quantity'] * $cartItem[0]['price'];
                                    ?>  
                                    <div class="item">
                                        <div class="cart__img__container">
                                            <img src="<?= $src ?>" alt="">
                                        </div>
                                        <div class="cart__item__info">
                                            
                                            <h1><?= $cartItem[0]["name"] ?></h1>
                                            <h3>Quantité : <span><?=  $cart[$i]["quantity"] ?></span></h3>
                                            <h3>Prix : <span><?=  $price ?></span> €</h4>
                                            <a href="./process/delete.php?id=<?= $cart[$i]['ID'] ?>&userid=<?= $_SESSION['ID']  ?>">Supprimer</a>
                                        </div>
                                    </div>
                                    
                                    <?php
                                   
                                } ?>
                            
                           <a href="/cart">Voir mon panier</a>
                        </div>
                    </li>
                    
                    <?php
                }else { ?>
                    <a href="/signin" style="text-decoration: none; color: black;"><li class='item'><i class="fa fa-sign-in"></i></li></a>
                    <?php
                }
            ?>
            
        </div>
        
    </ul>
</nav>