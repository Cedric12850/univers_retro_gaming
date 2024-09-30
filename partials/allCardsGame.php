<!-- 


<div id="cardContainer">
    <?php foreach($games as $game)  {  ?>
        <article class="card">
            <a href="cardGame.php?id=<?php echo $game['game_id'] ?>">
                <img id="cardImg" src="<?php echo $game['game_img']?>" alt="<?php echo $game['game_titre'] ?>">
                <h3><?php echo $game['game_titre'] ?></h3>
            </a>
        <div>
            <small><?php echo $game['game_year'] ?></small>
            <?php if(($user != 'visiteur')&& ($user_id == $game['user_id'])){ ?>    
                <button type="submit"  id="reset" name="deleteBtn" >reset </button>
            <?php } ?>
        </div>

            <small>Jeu ajouté par <a href="gameByAutor.php?id=<?php echo $game['user_id']?>"><?php echo ucfirst($game['pseudo']) ?></small></a>
            
            <p><?php echo $game['game_description'] ?></p>
            <small><img id="pegiImg" src="<?php echo $pegi['pegi_img'] ?> ?>" alt="pegi"></small>

        </article>

    <?php } ?>
</div> -->