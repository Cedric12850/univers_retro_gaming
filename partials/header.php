<?php 
session_start();
require_once 'function.php';

require_once 'models/managers/GameManager.php';
    $games = GameManager::getAllGame();
require_once 'models/managers/GenreManager.php';
require_once 'models/managers/UsersManager.php';
require_once 'models/managers/PegiManager.php';


  

if(isset($_SESSION['user'])&& !empty($_SESSION['user'])) {
    $user = $_SESSION['user']['pseudo'];
    $user_id = $_SESSION['user']['id'];
require_once './models/managers/UsersManager.php';
    $user = UsersManager::connectUser($user);
    $user = $user->getPseudo();
    
}else{
    $user = 'visiteur';
}

//php de la page cardGame.php ___ a remettre dans cette dernière si problème


require_once './vues/headerVue.php';

