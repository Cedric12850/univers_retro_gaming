<?php
require_once 'partials/header.php';
    
    if(isset($_POST)&& !empty($_POST)) {
        if(!(isset($_SESSION['user']))) {            
            echo 'Veuillez vous connecter pour envoyer votre ajout de console';
            header ('refresh:3 ;location:login.php');
        }else{
            header('location: allCardsConsole.php');
        }

        $console_name = $_POST['console_name'];
        $console_year = $_POST['console_year'];
        $console_description = $_POST['console_description'];
        $console_img = $_POST['console_img'];

        addConsole(
            $console_name,
            $console_year,
            $console_description,
            $console_img
        );

        echo 'Console bien ajoutée';
    }

    $consoles = getAllConsole(); 
?>

<?php if($user != 'visiteur') { ?>
    <div>
        <form action="" method="post">
            <p>Nom de la console de jeu: <input type="text" name="console_name"></p>
            <p>Année de sortie: <input type="text" name="console_year"> </p>
            <p>Description: <input type="text" name="console_description"></p>
            <p>Lien vers image: <input type="text" name="console_img" id=""></p>
            <p>ou <input type="file" name="console_img" id=""> </p>
            <input id="" type="submit" value="Envoyer">
        </form>
    </div>
<?php } ?>





<?php require_once 'partials/footer.php' ?>