<?php
require_once 'partials/header.php';
require_once 'function_game.php';
?>

<?php if($user != 'visiteur') { ?>
    <div class="row">
        <form class="col s12" action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s8 m7">
                    <input type="text" name="game_titre" class="validate">
                    <label for="game_titre">Nom du jeu:</label>
                </div>
                <div class="input-field col s4 m3 offset-m2">
                    <input type="text" name="game_year" class="validate">
                    <label for="game_year">Année de sortie:</label>
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s12">
                <input type="text" name="game_description" class="validate">
                <label for="game_description">Description:</label>
            </div>
            
            <div class="row">
                <div class="col s12 offset-m3">
                    <p>Envoyer une image (jpeg, png ou gif):</br> 
                    <input type="file" name="game_img" > </p>
                </div>
            </div>

            <div class="row">
                
                    <?php foreach($genres as $genre)  {  ?>
                        <div class="col s6 m3"><label >
                        <input type="checkbox" name="checkGenres[]" id="checkboxBtn" value="<?php echo $genre['genre_id']?>"/> <span><?php echo ucfirst($genre['genre_name']) ?></span>
                        </label></div>
                    <?php } ?>
                
            </div>

            <div class="row">
                
                    <?php foreach($pegis as $pegi)  {  ?>
                        <div class="col s4 m2"><label > 
                            <!-- for="<?php echo $pegi["pegi_id"] ?>" -->
                        <input class="with-gap" type="radio" name="addPegiIntoGame" id="" value="<?php echo $pegi["pegi_id"] ?>" >
                            <span>
                            <img src="<?php echo ($pegi['pegi_img']) ?>" alt="" id="pegi">
                            </span>
                        </label></div>
                    <?php } ?>
                
            </div>

            <div class="row">
                <div class="offset-s5 col s4">
                    <input class="btn waves-effect waves-light" type="submit" value="Envoyer">
                </div>
            </div> 
        </form>
    </div>
<?php } ?>




<?php require_once 'partials/footer.php' ?>