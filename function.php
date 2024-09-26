<?php

require_once 'models/entities/Users.php';
require_once 'models/entities/Game.php';

//connexion user
// function connectUser ($pseudo) {
//     $dbh = dbconnect ();
//     $query = "SELECT * FROM users
//     WHERE pseudo = :pseudo";
//     $stmt = $dbh->prepare($query);
//     $stmt->bindParam(':pseudo', $pseudo);
//     $stmt-> execute();
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }

//ajout user in bdd
// function addUser ($firstName, $lastName, $pseudo, $birthdate, $adresse, $town, $town_cp, $email, $password) {
//     $dbh = dbconnect();
//     $query = "INSERT INTO users(firstName, lastName, pseudo, birthdate, adresse, town, town_cp, email, password) VALUES (:firstName, :lastName, :pseudo, :birthdate, :adresse, :town, :town_cp, :email, :password)";
//     $stmt = $dbh->prepare($query);
//     $stmt->bindParam(':firstName', $firstName);
//     $stmt->bindParam(':lastName', $lastName);
//     $stmt->bindParam(':pseudo', $pseudo);
//     $stmt->bindParam(':birthdate', $birthdate);
//     $stmt->bindParam('adresse', $adresse);
//     $stmt->bindParam(':town', $town);
//     $stmt->bindParam(':town_cp', $town_cp);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':password', $password);
//     $stmt->execute();
//     $count = $stmt->rowCount(); 
//         if ($count == 0) {
//             header('location: suscribe.php');
//         }else {
//             header('location:login.php');
//         }  
// }

//ajout console in bdd
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
            header('location:console.php');
        }
}

//affiche toutes les consoles
// function getAllConsole() {
//     $dbh = dbconnect();
//     $query = "SELECT * FROM console";
//     $stmt = $dbh->prepare($query);
//     $stmt->execute();
//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $results;
// }

//ajout d'un jeu dans bdd
function insertGameIntoDB($game_titre, $game_year, $game_description, $game_img, $pegi, $dateArticle, $autor_id) { 
    $dbh= dbconnect();
    $query= "INSERT INTO game(game_titre, game_year, game_description, game_img, pegi_id, date_article, autor_id) VALUES (:game_titre, :game_year, :game_description, :game_img, :pegi, :dateArticle, :autor_id)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':game_titre', $game_titre);
    $stmt->bindParam(':game_year', $game_year);
    $stmt->bindParam(':game_description', $game_description);
    $stmt->bindParam(':game_img', $game_img);
    $stmt->bindParam(':pegi', $pegi);
    $stmt->bindParam(':dateArticle', $dateArticle);
    $stmt->bindParam(':autor_id', $autor_id);
    $stmt->execute();
    $idGame = $dbh->lastInsertId();
        
        return $idGame;
}

//ajout pegi dans bdd-jeu
function addPegiToGame($pegi_id) {
    $dbh = dbconnect();
    $query = "INSERT INTO game(pegi_id) VALUES (:pegi_id)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':pegi_id', $pegi_id);
    $stmt->execute();
}

// //fonction pour remplacer l'id_autor de game par le pseudo de l'auteur
// function replaceIdAutoByPseudo() {
//     $dbh = dbconnect();
//     $query = "SELECT users.pseudo, game.autor_id
//         FROM users
//         JOIN game ON users.user_id = game.autor_id;";
//     $stmt = $dbh->prepare($query);
//     $stmt->execute();    
// }

//ajout genre dans bdd-jeux
function addGenreToGame($genreId, $gameId){
    $dbh = dbconnect();
    $query = "INSERT INTO game_genre(tableInt_genre_id, tableInt_game_genre_id) VALUES (:tableInt_genre_id, :tableInt_game_genre_id)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':tableInt_genre_id', $genreId);
    $stmt->bindParam(':tableInt_game_genre_id', $gameId);
    $stmt->execute();
}


//affiche tous les genre pour checkbox
function getAllGenre() {
    $dbh= dbconnect();
    $query = "SELECT * FROM genre";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

//affiche tous les pegi pour chackbox
function getAllPegi() {
    $dbh= dbconnect();
    $query = "SELECT * FROM pegi";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

//supprimer un jeu
function deleteThisGame($game_titre) {
    $dbh =dbconnect();
    $query = "DELETE FROM game
        WHERE game_titre = :game_titre";
    $stmt =$dbh->prepare($query);
    $stmt->bindParam(':game_titre', $game_titre);
    $stmt-> execute();
}

//Afficher les jeux par utilisateurs
function showGameByUser($id) {
    $dbh = dbconnect();
    $query = "SELECT * 
        FROM game
        JOIN users ON user_id = autor_id
        WHERE autor_id = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

// //afficher les jeux par id
// function showGameByid($id) {
//     $dbh = dbconnect();
//     $query = "SELECT * 
//         FROM game
//         JOIN users ON user_id = autor_id
//         join game_genre on tableInt_game_genre_id = game_id
//         join genre on genre_id = tableInt_genre_id
//         WHERE game_id = :id";
//     $stmt = $dbh->prepare($query);
//     $stmt->bindParam(':id', $id);
//     $stmt->execute();
//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $results;
// }


//stoker les commentaires dans Bdd
function addCommentIntoBdd($comment, $tableInt_autor_id, $tableInt_comment_id) {
    $dbh = dbconnect();
    $query = "INSERT INTO user_comment(comment, tableInt_autor_id, tableInt_comment_id) VALUES (:comment, :tableInt_autor_id, :tableInt_comment_id)";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':tableInt_autor_id', $tableInt_autor_id);
    $stmt->bindParam(':tableInt_comment_id', $tableInt_comment_id);
    $stmt->execute();
    $idComment = $dbh->lastInsertId();
        return $idComment;
}

//récupère les commentaire pour les afficher
function getComments($id) {
    $dbh = dbconnect();
    $query = "SELECT * 
        FROM game
        JOIN user_comment ON game_id = tableInt_comment_id
        join users ON user_id = tableInt_autor_id
        WHERE game.game_id = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

//supprimer les commentaires
function deleteComment($id){
    $dbh = dbconnect();
    $query = "DELETE FROM user_comment
    WHERE id_comment = :id";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
?>