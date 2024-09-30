<?php
require_once 'partials/header.php';
?>

<div class="row" id="cardContainer">
    <?php foreach($gamesByUserId as $gameByUserId) { 
        $getAutorPseudo = UsersManager::getPseudoByAutorId($gameByUserId->getAutorID());
        $getPegi = PegiManager::ShowPegiGame($gameByUserId->getPegiId());
    ?>

        <article class="col s12 m5 offset-m1 card">
            <div class="col s12">
                <a href="cardGame.php?id=<?php echo $gameByUserId->getGameId() ?>">
                    <img id="cardImg" src="<?php echo $gameByUserId->getGameImg()?>" alt="<?php echo $gameByUserId-> getGameTitre() ?>">
                    <h3><?php echo $gameByUserId-> getGameTitre() ?></h3>
                </a>
            </div> 
            <div class="col s12" id="card_btnUser">
                <small><?php echo $gameByUserId->getGameYear() ?></small>
                <?php if( ($user != 'visiteur')&&($user_id == $gameByUserId->getAutorId())){ ?>    
                        <button class="btn waves-effect waves-light" type="submit"  id="reset" name="deleteBtn" >reset </button>
                <?php } ?>
            </div>
            <div  class="col s12" id="card_details">
                <small>Jeu ajouté par <?php echo ucfirst($getAutorPseudo->getPseudo()) ?> </small></a>
                <div id="gameDescritpion">
                    <p><?php echo $gameByUserId->getGameDescription() ?></p>
                    <small><img id="pegiImg" src="<?php echo $getPegi->getPegiImg() ?>" alt="pegi"></small>
                </div>
            </div>  
        </article>

    <?php } ?>
</div>

<?php require_once 'partials/footer.php' ?>