<?php
    require("class/Product.php");
    $query = new Product($db);
    $products = $query->getAllProduct();
?>
<div class="slider">
    <div class="slider__left">
        <button onclick="previous()"  class="btn"><i class="fa-solid fa-arrow-left"></i></button>
    </div>
    <div class="slider__content">
        
    <?php foreach($products as $slide): ?>
        <div class="slide">
            <h1 style="font-family: 'Merriweather'; color: white; font-size: 3em; letter-spacing: 3px; font-weight: 100;"><?= $slide["name"] ?></h1>
            <div class="imageContainer">
            <img src="data:image/jpeg;base64,<?= base64_encode($slide['image'])?>"/>
            </div>
            <h3 style="font-family: 'Roboto'; color: white; font-size: 1em; font-size: 1.3em" ><?= $slide["price"]?> €</h3>
            <a href="#" class="link">Acheter maintenant</a>
        </div>
    
    <?php endforeach ?>
    </div>
    <div class="slider__right">
        <button onclick="next()" class="btn"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
    
</div>