<?php
require_once 'partials/header.php';


?>

    <h1>UNIVERS RETRO-GAMING</h1>
    <h4>Bienvenue <?php echo ucfirst($user) ?></h4>

<?php if($user != 'visiteur') { ?>    
    <div>  
        <nav class="sideMenu">
            <ul>
                <?php if($user == 'super admin') { ?>
                    <li><a href="admin.php">Page administrateur</li></a>
                    <?php } ?>
                <li><a href="console.php">Ajouter une console</li></a>
                <li><a href="game.php">Ajouter un jeu</li></a>
                
                <li></li>
            </ul>
        </nav>   
    </div>
 <?php } ?>


<div>




<?php require_once 'partials/footer.php' ?>