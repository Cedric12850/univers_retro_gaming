<?php
require_once 'partials/header.php';
require_once 'partials/function_game.php';
?>

<?php if($user != 'visiteur') { ?>
    <div id="addGame">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="addGameForm">
                <input type="text" name="game_titre" placeholder="Nom du jeu:">
                <input type="text" name="game_year" placeholder="Année de sortie:">
                <input type="text" name="game_description" placeholder="Description:">
                
                <p>Envoyer une image (jpeg ou png):</br> 
                <input type="file" name="game_img" id=""> </p>
            </div>
            <div>
                <?php foreach($genres as $genre)  {  ?>
                    <label >
                    <input type="checkbox" name="addGenresIntoGame" id="checkboxBtn"/> <span><?php echo ucfirst($genre['genre_name']) ?></span>
                    </label>
                <?php } ?>
            </div>
            <div id="radioBtn">
                <?php foreach($pegis as $pegi)  {  ?>
                    <label > 
                        <!-- for="<?php echo $pegi["pegi_id"] ?>" -->
                    <input class="with-gap" type="radio" name="addPegiIntoGame" id="" value="<?php echo $pegi["pegi_id"] ?>" >
                        <span>
                        <img src="<?php echo ($pegi['pegi_img']) ?>" alt="" id="pegi">
                        </span>
                    </label>
                    <?php } ?>
            </div>
                <input id="btnStyle2" type="submit" value="Envoyer">
           
        </form>
    </div>
<?php } ?>




<?php require_once 'partials/footer.php' ?>