<?php

// Connexion à la base de données
function dbconnect () {
    try {
        $dbh = new PDO ('mysql:host=localhost;dbname=univers_retro_gaming', 'root', '');
        echo 'connexion établie';
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
?>