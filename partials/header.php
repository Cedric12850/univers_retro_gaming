<?php
session_start();
require_once 'function.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Univers RetroGaming</title>
    <link rel="stylesheet" href="./src/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>

<header>
    <section class="paralax">
        <nav>
            <div id="divLogo">
                <img id="logoSite" src="./src/img/Logo_urg.jpg" alt="logo du site">               
            </div>

            <div class="menuBurger">
                <button id="burgerBtn"><i class="fa-solid fa-gamepad"></i></button>
            </div>          
        </nav>
        <div id="headerForm">
            <form action="suscribe.php" method="get">
                <input id="btnStyle1" type="submit" name="suscribe" value="S'inscrire">
            </form>

            <form action="login.php" method="get">
                <input id="btnStyle1" type="submit" value="Se connecter" name="login">
            </form>

            <form action="logout.php" method="get">
                <input id="btnStyle1" type="submit" value="Déconnexion" name="logout">
            </form>
        </div>
    </section>
    <div>
            <ul class="menu" id="myMenu">
                    <li><a href="#carte"> La carte</a></li>
                    <li><a href="#aPropos">A propos</a></li>
                    <li><a href="#reserver">Reserver</a></li>
            </div>
</header>