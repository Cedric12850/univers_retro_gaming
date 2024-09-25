<?php
require_once 'partials/header.php';


$autor_id = $_GET['id'];
$gameArray = showGameByUser($autor_id);



?>


<div class="row" id="cardContainer">
    <?php foreach($gameArray as $gamebyUser) { ?>
        <article class="col s12 m5 offset-m1 card">
            <div class="col s12">
                <a href="cardGame.php?id=<?php echo $gamebyUser['game_id'] ?>">
                    <img id="cardImg" src="<?php echo $gamebyUser['game_img']?>" alt="<?php echo $gamebyUser['game_titre'] ?>">
                    <h3><?php echo $gamebyUser['game_titre'] ?></h3>
                </a>
            </div> 
            <div class="col s12" id="card_btnUser">
            <small><?php echo $gamebyUser['game_year'] ?></small>
            <?php if( ($user != 'visiteur')&&($user_id == $gamebyUser['autor_id'])){ ?>    
                    <button class="btn waves-effect waves-light" type="submit"  id="reset" name="deleteBtn" >reset </button>
                <?php } ?>
            </div>
            <div  class="col s12" id="card_details">
                <small>Jeu ajouté par <?php echo ucfirst($gamebyUser['pseudo']) ?> </small></a>
                <div id="gameDescritpion">
                    <p><?php echo $gamebyUser['game_description'] ?></p>
                    <small><img id="pegiImg" src="<?php echo $pegi['pegi_img'] ?>" alt="pegi"></small>
                </div>
            </div>
    
        </article>

    <?php } ?>
</div>

<?php require_once 'partials/footer.php' ?>