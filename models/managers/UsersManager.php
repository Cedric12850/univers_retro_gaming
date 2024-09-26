<?php
require_once './models/dbconnect.php';
require_once './models/entities/Users.php';

class UsersManager
{
    //s'inscrire sur le site
    public static function addUser ($firstName, $lastName, $pseudo, $birthdate, $adresse, $town, $town_cp, $email, $password) 
    {
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
    }

    //fonction pour remplacer l'id_autor de game par le pseudo de l'auteur
    public static function getPseudoByAutorId() {
        $dbh = dbconnect();
        $query = "SELECT *
            FROM users
            JOIN game ON users.user_id = game.autor_id;";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
        return $results;
}
}