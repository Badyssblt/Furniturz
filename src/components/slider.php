<?php
    require("class/Product.php");
    $query = new Product($db);
    $products = $query->getAllProduct();
?>
<div class="slider">
    <div class="slider__content">
    <?php foreach($products as $slide): ?>
        <div class="slide">
            <h1 style="font-family: 'Merriweather'; color: white; font-size: 3em; letter-spacing: 3px; font-weight: 100;"><?= $slide["name"] ?></h1>
            <img src="data:image/jpeg;base64,<?= base64_encode($slide['image'])?>"/>
            <h3 style="font-family: 'Alegreya'; color: white; font-size: 1em;" ><?= $slide["price"]?> €</h3>
            <a href="#" class="link">Acheter maintenant</a>
        </div>
    
    <?php endforeach ?>
    </div>
    <div>
        <button onclick="previous()"  class="btn"><i class="fa-solid fa-arrow-left"></i></button>
        <button onclick="next()" class="btn"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
</div>