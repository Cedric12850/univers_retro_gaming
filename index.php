<?php
require_once 'partials/header.php';

require_once 'models/managers/GenreManager.php';
    $genres = GenreManager::getGenreByGameId();
    foreach($genres as $genre) {  
    }
require_once 'models/managers/UsersManager.php';
    $getAutorsPseudo = UsersManager::getPseudoByAutorId();
    foreach ($getAutorsPseudo as $getAutorPseudo){
    }


    require_once './vues/indexVue.php'
?>

