<?php
require_once 'partials/header.php';

$autor_id = $_GET['id'];
$game = showGameByUser($autor_id);

var_dump($game);
?>
<div id="cardContainer">
    <article class="card">
        <h3><?php echo $game['game_titre'] ?></h3>
        <button type="submit"  id="reset" name="deleteBtn" >reset </button>
        <small><?php echo $game['game_year'] ?></small>
        <small>Jeu ajouté par <?php echo $game['pseudo'] ?></small></a>
        <img src="<?php echo $game['game_img']?>" alt="<?php echo $game['game_titre'] ?>">
        <p><?php echo $game['game_description'] ?></p>
        <small><img src="<?php echo $game['pegi_id'] ?>" alt="pegi"></small>

    </article>
</div>

<?php require_once 'partials/footer.php' ?>