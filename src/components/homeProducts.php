<?php
    require('./class/Product.php');
    $productInstance = new Product($db);
    $products = $productInstance->getAllProduct("SELECT * FROM products LIMIT 5");
?>

<div class="product__container">
    <?php
    if(isset($_SESSION['ID'])){
        $userID = $_SESSION['ID'];
    }
    
        foreach($products as $item){ 
            $id = $item['ID'];
            $userID = $_SESSION['ID'];
            $exist = $db->query("SELECT * FROM favorites WHERE productID = '$id' AND userID = '$userID'  ");
            $src = 'data:image/png;base64,' . base64_encode($item["image"]);
            ?>
            <div class="item">
                
                <div class="img__container">
                    <img src="<?= $src ?>" alt="">
                </div>
                <h1><?= $item["name"] ?></h1>
                <a href="/product/<?= $item["ID"] ?>" class="product__details">Voir plus</a>
                <a href="" id="favorites__item" class="favs" data-productID="<?= $item['ID'] ?>" data-userID='<?= $userID ?>'><i 
                <?php
                    if($exist){ ?>
                        style="color: red;"
                    <?php
                        
                    }
                ?>
                class="fas fa-heart"></i></a>
            </div>
            

    <?php
        }
    ?>
</div>


