<?php
require_once 'partials/header.php';


$autor_id = $_GET['id'];
$gameArray = showGameByUser($autor_id);



?>


<div id="cardContainer">
    <?php foreach($gameArray as $gamebyUser) { ?>

   
    <article class="card">
        <h3><a href="cardGame.php?id=<?php echo $gamebyUser['game_id'] ?>"><?php echo $gamebyUser['game_titre'] ?></h3>
        <?php if( ($user != 'visiteur')&&($user_id == $gamebyUser['autor_id'])){ ?>    
                <button type="submit"  id="reset" name="deleteBtn" >reset </button>
            <?php } ?>

        <small><?php echo $gamebyUser['game_year'] ?></small>
        <small>Jeu ajouté par <?php echo $gamebyUser['autor_id'] ?> </small></a>
        <img src="<?php echo $gamebyUser['game_img']?>" alt="<?php echo $gamebyUser['game_titre'] ?>">
        <p><?php echo $gamebyUser['game_description'] ?></p>
        <small><img src="<?php echo $gamebyUser['pegi_id'] ?>" alt="pegi"></small>

    </article>

    <?php } ?>
</div>

<?php require_once 'partials/footer.php' ?>