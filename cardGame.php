<?php
require_once 'partials/header.php';

$game_id = $_GET['id'];
$games = getAllGame();
$gamesById = showGameByid($game_id);
$gameById = $gamesById[0];


?>


<div id="cardContainer">
   
    <article class="card">

        <img id="cardImg" src="<?php echo $gameById['game_img']?>" alt="<?php echo $gameById['game_titre'] ?>">
        <h3><?php echo $gameById['game_titre'] ?></h3>
        <div id="card_btnUser">
            <small><?php echo $gameById['game_year'] ?></small>
            <?php if( ($user != 'visiteur')&& ($user_id == $gameById['autor_id'])){ ?>  
                <button  type="submit"  id="reset btnStyle2" name="deleteBtn" >reset </button>
            <?php } ?>
        </div>
        <div id="card_details">
            <small>Jeu ajouté par <?php echo $gameById['autor_id'] ?></a> le <?php echo $gameById['date_article'] ?></small>
            
            <p><?php echo $gameById['game_description'] ?></p>
            <small><img src="<?php echo $gameById['pegi_id'] ?>" alt="pegi"></small>
        </div>

        <div id="card_comment">
            <?php if($user == 'visiteur') { ?> 
                <small>Pour commenter, vous devez être inscrit.</small>
            <?php } ?>
            <?php if($user != 'visiteur') { ?> 
                <button class="btn waves-effect waves-light" >Ajouter un commentaire</button>
                <form action="" class="formclose">
                    <input type="text" name="user_comment" id="">
                    <input class="btn waves-effect waves-light"  type="submit" value="Envoyer">
                </form>
            <?php } ?>
            <p>Commentaires: </p>
        </div>

    </article>

    
</div>

<?php require_once 'partials/footer.php' ?>