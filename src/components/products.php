<?php
require ('./class/Product.php');
$productInstance = new Product($db);
if(isset($_GET['category'])){
    $id = $_GET['category'];
    $products = $productInstance->getProductsByCategory($id);
}else {
    $products = $productInstance->getAllProduct("SELECT * from products");
}
?>
<form action="" class='products__form'>
    <span>Rechercher par catégorie</span>
    <select name="category">
        <option value="1">Bureau</option>
        <option value="2">Armoire</option>
        <option value="3">Canapé</option>
    </select>
    <input type="submit">
</form>
<div class="all__products__container">
    <?php
        foreach($products as $item){ 
            $src = 'data:image/png;base64,' . base64_encode($item["image"]);
            ?>
            <div class="item">
                <div class="img__container">
                    <img src="<?= $src ?>" alt="">
                </div>
                <h1><?=  $item['name'] ?></h1>
                <h2><?= $item['price'] ?> € TTC</h2>
                <a href="/product/<?= $item['ID'] ?>" class="product__details">Voir plus</a>
            </div>

        <?php
        }
    ?>
</div>