<?php
    require("class/Product.php");
    $query = new Product($db);
    $products = $query->getAllProduct();
?>
    <h1 style="color: white; font-family: 'Merriweather'; padding: 20px ">Meilleurs ventes</h1>
    <div class="slider__container">

    
    <div class="slider__content">
        
    <?php foreach($products as $slide): ?>
        <div class="slide">
            <h1 style="font-family: 'Merriweather'; color: white; font-size: 3em; letter-spacing: 3px; font-weight: 100;"><?= $slide["name"] ?></h1>
            <div class="imageContainer">
            <img src="data:image/jpeg;base64,<?= base64_encode($slide['image'])?>"/>
            </div>
            <h3 style="font-family: 'Roboto'; color: white; font-size: 1em; font-size: 1.3em;" ><?= $slide["price"]?> €</h3>
            <a href="#" class="link">Acheter maintenant</a>
        </div>
    
    <?php endforeach ?>
    </div>
    </div>
</div>