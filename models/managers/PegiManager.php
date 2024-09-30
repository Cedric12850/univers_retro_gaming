<?php
require_once './models/dbconnect.php';
require_once './models/entities/Pegi.php';

class PegiManager {

    //Afficher les pegi dans les jeux
    public static function ShowPegiGame($id) {
        $dbh = dbconnect ();
        $query = "SELECT * FROM pegi
        WHERE pegi_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt-> execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Pegi');
        $result = $stmt->fetch();
        return $result;
    }


}