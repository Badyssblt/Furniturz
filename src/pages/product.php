<?php
    $id = $params['id'];
    require('./class/Product.php');
    $productInstance = new Product($db);
    $product = $productInstance->getSingleProduct($id);
    $src = 'data:image/png;base64,' . base64_encode($product[0]["image"]);
?>
<div class="single__product__container">
    <div class="single__img__container">
        <img src="<?= $src ?>" alt="">
    </div>
    
    <div class="product__info">
        <h1 class="product__title"><?= $product[0]['name'] ?></h1>
        <h2 class='product__price'><?= $product[0]["price"] . ' € TTC' ?></h2>
        <p class="product__desc"><?= $product[0]["description"] ?></p>
        <div class="product__cart">
            <a class="cart" href="../process/addCart.php?id=<?= $id ?>">Ajouter au panier</a>
            <a href="#" class="product__buy__now">Acheter maintenant</a>
        </div>
        
    </div>
    
</div>