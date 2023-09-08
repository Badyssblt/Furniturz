<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/slider.css">
    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>
<body>
    <ul class="navbar">
        <li><a href="/">Accueil</a></li>
        <li>Rechercher</li>
        <?php if(isset($_SESSION['email'])){ ?>
            <li><a href="/account">Mon compte</a></li>
        <?php
        }else { ?>
            <li><a href="/signin">Connexion</a></li>
            <?php
        } ?>
        <?php
            if(isset($_SESSION["email"])){ ?>
                <li>Mes favoris</li>
                <li>Mon panier</li>
                <?php
            }
        ?>
        
    </ul>

