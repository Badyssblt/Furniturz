<?php
    require('./class/Product.php');
    $productInstance = new Product($db);
    $products = $productInstance->getAllProduct();
?>

<div class="product__container">
    <?php
        foreach($products as $item){ 
            $src = 'data:image/png;base64,' . base64_encode($item["image"]);
            ?>
            <div class="item">
                <div class="img__container">
                    <img src="<?= $src ?>" alt="">
                </div>
                <h1><?= $item["name"] ?></h1>
                <a href="/product/<?= $item["ID"] ?>">Voir plus</a>
            </div>
            

    <?php
        }
    ?>
</div>