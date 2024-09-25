<?php
require_once 'partials/header.php';

$game_id = $_GET['id'];
$gamesById = showGameByid($game_id);
$gameById = $gamesById[0];
$pegi = $pegis[0];
$comments = getComments($game_id);
//récupère tous les genres et leurs id pour pouvoir les afficher
foreach($genres as $genre){
     $genre_id = $genre['genre_id'];
         $genre_name = $genre['genre_name'];
 }
 



//ajout des commentaires:
if(isset($_POST)&& !empty($_POST)){
    $comment = $_POST['user_comment'];
    $tableInt_autor_id = $user_id;
    $tableInt_comment_id = $gameById["game_id"];

    $insertComment = addCommentIntoBdd(
        $comment,
        $tableInt_autor_id,
        $tableInt_comment_id
    );
    header('refresh:0');
};



?>


<div class="row" id="cardContainer">
   
    <article class="col s12 offset-m2 m8 l12 card">
        <div class="col xl12">
            <div class="col s12 xl6">
                <img id="cardImg" src="<?php echo $gameById['game_img']?>" alt="<?php echo $gameById['game_titre'] ?>">   
            </div>
            <div class="col xl6">
                <div class="col s12">
                    <h3 class="col xl12"><?php echo $gameById['game_titre'] ?></h3>
                </div> 
                <div  id="card_btnUser">
                    <div id="year_genre">
                        <small><?php echo $gameById['game_year'] ?></small>
                        <small><?php echo $gameById['genre_name'] ?></small>
                    </div>
                    <?php if( ($user != 'visiteur')&& ($user_id == $gameById['autor_id'])){ ?>  
                        <button class="btn waves-effect waves-light" type="submit"  id="reset btnStyle2" name="deleteBtn" >reset </button>
                    <?php } ?>
                </div>
                
                <div class="col s12" id="card_details">
                    <small>Jeu ajouté par <a href="gameByAutor.php?id=<?php echo $gameById['user_id']?>"><?php echo ucfirst($gameById['pseudo']) ?></a> le <?php echo $gameById['date_article'] ?></small>
                    <div  id="gameDescritpion">
                        <p class="col s12 m8 offset-m3"><?php echo $gameById['game_description'] ?></p>
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