<?php

// Connexion à la base de données
function dbconnect () {
    try {
        $dbh = new PDO ('mysql:host=localhost;dbname=univers_retro_gaming', 'root', '');
        //echo 'connexion établie';
        return $dbh;
    }catch (PDOException $e){
        echo 'Connexion failed';
    }
}