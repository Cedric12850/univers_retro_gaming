<?php
require_once 'partials/header.php';

if(isset($_SESSION['user'])&& !empty($_SESSION['user'])) {
    $user = $_SESSION['user']['pseudo'];
}else{
    $user = 'visiteur';
}

?>

<p>Bienvenue <?php echo ucfirst($user) ?> sur le site</p>

    <h1>UNIVERS RETRO-GAMING</h1>
    
<div>
    <nav class="sideMenu">
        <ul>
            <li><a href="addconsole.php">Ajouter une console</li></a>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </nav>
</div>



<?php require_once 'partials/footer.php' ?>