<?php
session_start();
require_once 'function.php';

require_once 'models/managers/GameManager.php';
    $games = GameManager::getAllGame();
require_once 'models/managers/GenreManager.php';
    $genres = GenreManager::getGenreByGameId();
    foreach($genres as $genre) {  
    }
require_once 'models/managers/UsersManager.php';
    $user = UsersManager::connectUser($pseudo);
    $getAutorsPseudo = UsersManager::getPseudoByAutorId();
    
    foreach ($getAutorsPseudo as $getAutorPseudo){
    }   
    
  

$pegis = getAllPegi();
$pegi = $pegis[0]; //permet l'affichage des pegi dans les cards


if(isset($_SESSION['user'])&& !empty($_SESSION['user'])) {
    $user = $_SESSION['user']['pseudo'];
    $user_id = $_SESSION['user']['id'];
    
}else{
    $user = 'visiteur';
}

//php de la page cardGame.php ___ a remettre dans cette dernière si problème


require_once './vues/headerVue.php';

