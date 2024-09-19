<?php
session_start();
require_once 'function.php';

if(isset($_SESSION['user'])&& !empty($_SESSION['user'])) {
    $user = $_SESSION['user']['pseudo'];
    $user_id = $_SESSION['user']['id'];
    
}else{
    $user = 'visiteur';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Univers RetroGaming</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./src/css/styles.css">

</head>
<body>

<header>
    <section class="paralax">
        <nav id="menuHeader">
            <div id="divLogo">
                <a href="index.php"><img id="logoSite" src="./src/img/Logo_urg.jpg" alt="logo du site"></a>               
            </div>

            <div class="menuBurger">
                <button id="burgerBtn"><i class="fa-solid fa-gamepad"></i></button>
            </div>          
        </nav>
        <div id="headerForm">
            
                <?php if($user == 'visiteur') { ?>
            <form action="suscribe.php" method="get">
                <input id="btnStyle1" type="submit" name="suscribe" value="S'inscrire">
            </form>
            

            <form action="login.php" method="get">
                <input id="btnStyle1" type="submit" value="Se connecter" name="login">
            </form>
            <?php } ?>

            <form action="logout.php" method="get">
                <input id="btnStyle1" type="submit" value="Déconnexion" name="logout">
            </form>
        </div>
        <h4>Bienvenue <?php echo ucfirst($user) ?></h4>
    </section>
    <div>
            <ul class="menu" id="myMenu">
                    <li id="btnStyle2"><a href="allCardsConsole.php"> Console</a></li>
                    <li id="btnStyle2"><a href="index.php">Game</a></li>
                    <li id="btnStyle2"><a href="#contact">Contact</a></li>
            </div>
</header>

<main>
    <h1>UNIVERS RETRO-GAMING</h1>
        <?php if($user != 'visiteur') { ?>    
            <div>  
                <nav class="sideMenu">
                    <ul>
                        <?php if($user == 'super admin') { ?>
                            <li><a href="admin.php">Page administrateur</li></a>
                            <?php } ?>
                        <li><a href="console.php">Ajouter une console</li></a>
                        <li><a href="addGame.php">Ajouter un jeu</li></a>               
                        <li></li>
                    </ul>
                </nav>   
            </div>
        <?php } ?>