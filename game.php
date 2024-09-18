<?php
require_once 'partials/header.php';
require_once 'partials/function_game.php'
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
                    <input type="checkbox" name="addGenresIntoGame" id=""> <?php echo ucfirst($genre['genre_name']) ?>
                <?php } ?>
            </div>
            <div id="radioBtn">
                <?php foreach($pegis as $pegi)  {  ?>
                    <input type="radio" name="addPegiIntoGame" id="" value="<?php echo $pegi["pegi_id"] ?>" >
                    <label for="<?php echo $pegi["pegi_id"] ?>"><img src="<?php echo ($pegi['pegi_img']) ?>" alt="" id="pegi"></label>
                    <?php } ?>
            </div>
                <input id="btnStyle2" type="submit" value="Envoyer">
           
        </form>
    </div>
<?php } ?>

<div id="cardContainer">
    <?php foreach($games as $game)  {  ?>
        <article class="card">
            <h3><?php echo $game['game_titre'] ?></h3>
            <button type="submit"  id="reset" name="deleteBtn" >reset </button>
            <small><?php echo $game['game_year'] ?></small>
            <small>Jeu ajouté par <?php echo $game['autor_id'] ?></small>
            <img src="<?php echo $game['game_img']?>" alt="<?php echo $game['game_titre'] ?>">
            <p><?php echo $game['game_description'] ?></p>
            <small><img src="<?php echo $game['pegi_id'] ?>" alt="pegi"></small>

        </article>

    <?php } ?>
</div>


<?php require_once 'partials/footer.php' ?>