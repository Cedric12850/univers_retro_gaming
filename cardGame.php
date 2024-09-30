<?php
require_once 'partials/header.php';
require_once './models/managers/GameManager.php';


$game_id = $_GET['id'];
$gameById = GameManager::showGameByid($game_id);
$getAutorPseudo = UsersManager::getPseudoByAutorId($gameById->getAutorID());
$genres = GenreManager::getGenreByGameId($gameById->getGameId());
foreach($genres as $genre){}
$getPegi = PegiManager::ShowPegiGame($gameById->getPegiId());


require_once './models/managers/UserCommentManager.php';
$getComments = UserCommentManager::getComments($gameById->getGameId());



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

require_once './vues/cardGameVue.php';