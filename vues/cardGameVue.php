<?php
require_once 'partials/header.php';
?>


<div class="row" id="cardContainer">
   
    <article class="col s12 offset-m2 m8 l12 card">
        <div class="col xl12">
            <div class="col s12 xl6">
                <img id="cardImg" src="<?php echo $gameById->getGameImg()?>" alt="<?php echo $gameById->getGameImg() ?>">   
            </div>
            <div class="col xl6">
                <div class="col s12">
                    <h3 class="col xl12"><?php echo $gameById->getGameTitre() ?></h3>
                </div> 
                <div  id="card_btnUser">
                    <div id="year_genre">
                        <small><?php echo $gameById->getGameYear() ?></small>
                        <small><?php echo ucfirst($genre->getGenreName()) ?></small>
                    </div>
                    <?php if( ($user != 'visiteur')&& ($user_id == $gameById['autor_id'])){ ?>  
                        <button class="btn waves-effect waves-light" type="submit"  id="reset btnStyle2" name="deleteBtn" >reset </button>
                    <?php } ?>
                </div>
                
                <div class="col s12" id="card_details">
                    <small>Jeu ajouté par <a href="gameByAutor.php?id=<?php echo $getAutorPseudo->getUser_id()?>"><?php echo ucfirst($getAutorPseudo->getPseudo()) ?></a> le <?php echo $gameById->getDateArticle() ?></small>
                    <div  id="gameDescritpion">
                        <p class="col s12 m8 offset-m3"><?php echo $gameById->getGameDescritpion() ?></p>
                        <img id="pegiImg" src="<?php echo $pegi['pegi_img'] ?>" alt="pegi">
                    </div>
            </div>
        </div>
        </div>

        <div class="col s12" id="card_comment">
            <?php if($user == 'visiteur') { ?> 
                <small>Pour commenter, vous devez être inscrit.</small>
            <?php } ?>
            <?php if($user != 'visiteur') { ?> 
                <button class="btn waves-effect waves-light" id="commentBtn " >Ajouter un commentaire</button>
                <form id="comment" action="" id="" class="formclose" method="post">
                    <input  type="text" name="user_comment">
                    <input id="commentBtn" class="btn waves-effect waves-light col offset-s9 offset-m9"  type="submit" value="Envoyer">
                </form>
            <?php } ?>
            <h5>Commentaires: </h5>
        
            <?php foreach($comments as $comment) { ?>
                
                <div id="userComment">
                    <div class="row">
                        <p class="col s8"><?php echo $comment['pseudo'] ?> a écrit:</p>
                        <?php if($user_id == $comment['tableInt_autor_id'] ) { ?>
                            <form class="" action="" method="post">
                                <button class="btn waves-effect waves-light col s1" type="submit"  id="btnStyle3" name="modifBtn" ><i class="fa-solid fa-pen-nib"></i></button>
                                <button class="btn waves-effect waves-light col s1 offset-s1 " type="submit"  id="btnStyle3" name="deleteBtn" ><i class="fa-solid fa-xmark"></i></button>
                            </form>
                        <?php } ?>
                        
                    </div>
                    <div>
                        <p><?php echo $comment['comment'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>        
        
    </article>

    
</div>

<?php require_once 'partials/footer.php' ?>