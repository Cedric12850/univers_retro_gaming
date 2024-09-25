<?php
require_once 'partials/header.php';
$games = getAllGame();

?>



<div class="row" id="cardContainer">
    <?php foreach($games as $game)  {  ?>
        <article class="col s12 m5 offset-m1 xl3 offset-xl1 card">
            <div class="col s12">
                <a href="cardGame.php?id=<?php echo $game['game_id'] ?>">
                    <img id="cardImg" src="<?php echo $game['game_img']?>" alt="<?php echo $game['game_titre'] ?>">
                    <h3><?php echo $game['game_titre'] ?></h3>
                </a>
            </div>
            <div class="col s12" id="card_btnUser">
                <small><?php echo $game['game_year'] ?></small>
                <small><?php echo $game['genre_name'] ?></small>
                <?php if(($user != 'visiteur')&& ($user_id == $game['user_id'])){ ?>    
                    <button class="btn waves-effect waves-light" type="submit"  id="reset" name="deleteBtn" >reset </button>
                <?php } ?>
            </div>
            <div class="col s12" id="card_details">
                <small>Jeu ajouté par <a href="gameByAutor.php?id=<?php echo $game['user_id']?>"><?php echo ucfirst($game['pseudo']) ?></small></a>
                <div id="gameDescritpion">
                    <p><?php echo $game['game_description'] ?></p>
                    <small><img id="pegiImg" src="<?php echo $pegi['pegi_img'] ?> ?>" alt="pegi"></small>
                </div>
            </div>
        </article> 
    <?php } ?>
</div>

<?php require_once 'partials/footer.php' ?>