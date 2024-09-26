<?php
require_once 'partials/header.php';
require_once './models/managers/GameManager.php';


$game_id = $_GET['id'];
$gamesById = GameManager::showGameByid($id);
var_dump($games);

// $gameById = $gamesById[0];
// $pegi = $pegis[0];
// $game_id = $_GET['id'];
// $comments = getComments($game_id);
//récupère tous les genres et leurs id pour pouvoir les afficher
// foreach($genres as $genre){
//      $genre_id = $genre['genre_id'];
//          $genre_name = $genre['genre_name'];
//  }
 



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