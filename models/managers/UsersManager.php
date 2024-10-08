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

    //connexion user
    public static function connectUser ($pseudo) {
        $dbh = dbconnect ();
        $query = "SELECT * FROM users
        WHERE pseudo = :pseudo";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':pseudo', $pseudo);
        $stmt-> execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $stmt->fetch();
        return $result;
    }

    //fonction pour remplacer l'id_autor de game par le pseudo de l'auteur
    public static function getPseudoByAutorId($id) {
        $dbh = dbconnect();
        $query = "SELECT *
            FROM users
            WHERE user_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $result = $stmt->fetch();
        return $result;
}


}