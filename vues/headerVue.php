<?php
require_once 'partials/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Univers RetroGaming</title>

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./src/css/styles.css">

</head>
<body>

<header>
    <section class="paralax">
        <nav id="menuHeader">
            <div id="divLogo">
                <a href="index.php"><img id="logoSite" src="./src/img/logo_retrogaming2.1.png" alt="logo du site"></a>             
            </div>

            <div class="menuBurger">
                <button id="burgerBtn"><i class="fa-solid fa-gamepad"></i></button>
            </div>          
        </nav>
        <div class="row" id="headerForm">
            
                <?php if($user == 'visiteur') { ?>
            <form action="suscribe.php" method="get">
                <input class="btn  pulse waves-effect waves-light" type="submit" name="suscribe" value="S'inscrire">
            </form>
            

            <form action="login.php" method="get">
                <input class="btn waves-effect waves-light" type="submit" value="Se connecter" name="login">
            </form>
            <?php } ?>

            <form action="logout.php" method="get">
                <input class="btn waves-effect waves-light"  type="submit" value="Déconnexion" name="logout">
            </form>
        </div>
        
    </section>
    <div>
            <ul class="menu" id="myMenu">
                    <li class="btn waves-effect waves-light"><a href="index.php">Game</a></li>
                    <li class="btn waves-effect waves-light"><a href="allCardsConsole.php"> Console</a></li>
                    <li class="btn waves-effect waves-light"><a href="#mon_compte">Mon compte</a></li>
            </div>
</header>

<main class="container">
    <div>  
        <h4>Bienvenue <?php echo ucfirst($user->getPseudo()) ?> sur le site:</h4>
        <h1>UNIVERS RETRO-GAMING</h1> 
    </div>
    <?php if($user != 'visiteur') { ?>    
        <div>
            <nav></nav>
                <ul id="slide-out" class="sidenav">
                        
                    <li>
                        <div class="user-view">
                            <h3><?php echo ucfirst($user->getPseudo()) ?></h3>
                            <a href="#mon_compte">Mon compte</a>
                            <?php if($user == 'super admin') { ?>
                                <li><a href="admin.php">Page administrateur</li></a>
                            <?php } ?>
                    <li><a href="console.php">Ajouter une console</li></a>
                    <li><a href="addGame.php">Ajouter un jeu</li></a>
                </div> </li>                               
                </ul>                       
                <a href="#" data-target="slide-out"  class="btn waves-effect waves-light sidenav-trigger"><i class="material-icons">Ajouter un article</i></a>                        
            </div>            
    <?php } ?>
