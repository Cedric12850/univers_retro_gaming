<?php
require_once 'partials/header.php';

?>

<div class="row" id="cardContainer">
    <?php foreach($games as $game)  { 
        $getAutorPseudo = UsersManager::getPseudoByAutorId($game->getAutorId());
        $genres = GenreManager::getGenreByGameId($game->getGameId());
        foreach($genres as $genre){      }
        $getPegi = PegiManager::ShowPegiGame($game->getPegiId());
         ?>
        <article class="col s12 m5 offset-m1 xl2 offset-xl1 card">
            <div class="col s12">
                <a href="cardGame.php?id=<?php echo $game->getGameId() ?>">
                    <img id="cardImg" src="<?php echo $game->getGameImg()?>" alt="<?php echo $game->getGameTitre() ?>">
                    <h3><?php echo $game->getGameTitre() ?></h3>
                </a>
            </div>
            <div class="col s12" id="card_btnUser">
                <small><?php echo $game->getGameYear() ?></small>
                <small><?php echo $genre->getGenreName() ?></small>
                <?php if(($user != 'visiteur')&& ($user_id == $game->getAutorId())){ ?>    
                    <button class="btn waves-effect waves-light" type="submit"  id="reset" name="deleteBtn" >reset </button>
                <?php } ?>
            </div>
            <div class="col s12" id="card_details">
                <small>Jeu ajouté par <a href="gameByAutor.php?id=<?php echo $game->getAutorId()?>"><?php echo ucfirst($getAutorPseudo->getPseudo()) ?></small></a>
                <div id="gameDescritpion">
                    <p><?php echo $game->getGameDescription() ?></p>
                    <small><img id="pegiImg" src="<?php echo $getPegi->getPegiImg() ?> ?>" alt="pegi"></small>
                </div>
            </div>
        </article> 
    <?php   }
           
    ?>
</div>

<?php require_once 'partials/footer.php' ?>