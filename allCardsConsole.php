<?php
require_once 'partials/header.php';
    
    if(isset($_POST)&& !empty($_POST)) {
        if(!(isset($_SESSION['user']))) {            
            echo 'Veuillez vous connecter pour envoyer votre ajout de console';
            header ('refresh:3 ;location:login.php');
        }else{
            header('location: console.php');
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

<h2>Liste des consoles:</h2>
<div id="cardContainer">
    <?php foreach ($consoles as $console) { ?>
        <article class="card">
            <h3><?php echo $console['console_name'] ?></h3> <small><?php echo $console['console_year'] ?></small>
            <img src="<?php echo $console['console_img']?>" alt="Photo de la NES">
            <p><?php echo $console ['console_description'] ?></p>

        </article>
   <?php } ?>
    

</div>

<?php require_once 'partials/footer.php' ?>