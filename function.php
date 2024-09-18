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

function connectUser ($pseudo) {
    $dbh = dbconnect ();
    $query = "SELECT * FROM users
    WHERE pseudo = :pseudo";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt-> execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function addUser ($firstName, $lastName, $pseudo, $birthdate, $adresse, $town, $town_cp, $email, $password) {
    $dbh = dbconnect();
    $query = "INSERT INTO users(firstName, lastName, pseudo, birthdate, adresse, town, town_cp, email, password) VALUES (:firstName, :lastName, :pseudo, :birthdate, :adresse, :town, :town_cp, :email, :password)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':birthdate', $birthdate);
    $stmt->bindParam('adresse', $adresse);
    $stmt->bindParam(':town', $town);
    $stmt->bindParam(':town_cp', $town_cp);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $count = $stmt->rowCount(); 
        if ($count == 0) {
            header('location: suscribe.php');
        }else {
            header('location:login.php');
        }  
        die();
}

function addConsole($console_name, $console_year, $console_description, $console_img) {
    $dbh = dbconnect();
    $query = "INSERT INTO console(console_name, console_year, console_description, console_img) VALUES (:console_name, :console_year, :console_description, :console_img)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':console_name', $console_name);
    $stmt->bindParam(':console_year', $console_year);
    $stmt->bindParam('console_description', $console_description);
    $stmt->bindParam(':console_img', $console_img);
    $stmt->execute();
    $count = $stmt->rowCount();
        if ($count == 0) {
            echo 'Nous ne sommes pas parvenus à ajouter la console';
        }else {
            echo 'Merci pour votre ajout';
        }
        die();
}

function getAllConsole() {
    $dbh = dbconnect();
    $query = "SELECT * FROM console";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function insertGameIntoDB($game_titre, $game_year, $game_description, $game_img, $pegi, $dateArticle, $autorArticle) {
    $dbh= dbconnect();
    $query= "INSERT INTO game(game_titre, game_year, game_description, game_img, pegi_id, date_article, autor_article) VALUES (:game_titre, :game_year, :game_description, :game_img, :pegi, :dateArticle, :autorArticle)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':game_titre', $game_titre);
    $stmt->bindParam(':game_year', $game_year);
    $stmt->bindParam(':game_description', $game_description);
    $stmt->bindParam(':game_img', $game_img);
    $stmt->bindParam(':pegi', $pegi);
    $stmt->bindParam(':dateArticle', $dateArticle);
    $stmt->bindParam(':autorArticle', $autorArticle);
    $stmt->execute();
    $idGame = $dbh->lastInsertId();
        die();
        return $idGame;
}

function addPegiToGame($pegi_id) {
    $dbh = dbconnect();
    $query = "INSERT INTO game(pegi_id) VALUES (:pegi_id)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':pegi_id', $pegi_id);
    $stmt->execute();
}

//fonction pour ajouter l'id users dans l'id_autor de game
// function addAutorIntoGame($user_id) {
//     $dbh = dbconnect();
//     $query = "INSERT INTO game(autor_id) VALUES (:autor_id)";
//     $stmt = $dbh->prepare($query);
//     $stmt->bindParam(':autor_id', $user_id);
//     $stmt->execute();    
// }

function addGenreToGame($genreId, $gameId){
    $dbh = dbconnect();
    $query = "INSERT INTO genre_game(tableInt_genre_id, tableInt_game_id) VALUES (:tableInt_genre_id, :tableInt_game_id)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':tableInt_genre_id', $genreId);
    $stmt->bindParam(':tableInt_game_id', $gameId);
    $stmt->execute();
}

// function joinAutorArticle (){
//     $dbh = dbconnect();
//     $query = "SELECT game.autor_article, pseudo FROM users
//         JOIN  game ON users.user_id = game.autor_article
//         WHERE game.game_id";
//     $stmt = $dbh->prepare($query);
//     $stmt->execute();

// }

function getAllGame () {
    $dbh = dbconnect();
    $query = "SELECT * FROM game";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getAllGenre() {
    $dbh= dbconnect();
    $query = "SELECT * FROM genre";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getAllPegi() {
    $dbh= dbconnect();
    $query = "SELECT * FROM pegi";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function deleteThisGame($game_titre) {
    $dbh =dbconnect();
    $query = "DELETE FROM game
        WHERE game_titre = :game_titre";
    $stmt =$dbh->prepare($query);
    $stmt->bindParam(':game_titre', $game_titre);
    $stmt-> execute();
}

//Afficher les jeux que l'utilisateur à ajouter

?>