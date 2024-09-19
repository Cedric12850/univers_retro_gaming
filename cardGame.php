<?php
require_once 'partials/header.php';
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
$gameArray = showGameByUser($id);
$game = $gameArray[0];

}

?>
<div id="cardContainer">
    <article class="card">
        
        <h3><a href="cardGame.php?id=<?php echo $game[('game_titre')] ?>"><?php echo $game['game_titre'] ?></h3></a>
        <button type="submit"  id="reset" name="deleteBtn" >reset </button>
        <small><?php echo $game['game_year'] ?></small>
        <small>Jeu ajouté par <a href="gameByAutor.php"><?php echo $game['autor_id'] ?></small></a>
        <img src="<?php echo $game['game_img']?>" alt="<?php echo $game['game_titre'] ?>">
        <p><?php echo $game['game_description'] ?></p>
        <small><img src="<?php echo $game['pegi_id'] ?>" alt="pegi"></small>

    </article>
</div>

<?php require_once 'partials/footer.php' ?>