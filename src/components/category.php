<?php
$products = new Product($db);
$stmt = $db->query("SELECT * FROM category");
$length = count($stmt);
var_dump($length);
$products->getProductsByCategory("Bureau");
foreach($products as $item){ ?>

    <h1><?= $item["name"] ?></h1>
<?php
}
?>