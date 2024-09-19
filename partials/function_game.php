<?php

if (isset($_POST)&& !empty($_POST)) {
    if(!(isset($_SESSION['user']))) {
        echo 'Veuillez vous connecter pour envoyer votre ajout de console';
            header ('location:login.php');
        }else{
    //     //upload de l'image
        if(isset($_FILES['game_img'])&& $_FILES['game_img']['error']){
            $uploadDirectory = "/";
            $tmp_name = $_FILES['game_img']['tmp_name'];
            $allowed = array("jpg"=>"image/jpg", "jpeg"=>"image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $name = $_FILES['game_img']['name'];
            $type = $_FILES['game_img']['type'];
            $size = $_FILES['game_img']['size'];
            $error = $_FILES['game_img']['error'];       
        //vérifie l'extension du fichier image
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) die("Erreur: selectionner un format valide (jpg, jpeg, png, gif)");
        //vérifie la taille de l'image
        $maxsize = 5 * 1024 * 1024;
            if($size > $maxsize) die("Erreur: la taille est trop importante.");
        //Vérifie le type MIME du fichier
        if(in_array($name, $allowed)) { 
            //si le fichier existe déja
            if(file_exists($uploadDirectory.$_FILES['game_img']['name'])){
                echo $_FILES ['game_img']['name']. "existe déjà.";
            }else {
                move_uploaded_file($_FILES ['game_img']['tmp_name'], $uploadDirectory.$_FILES['game_img']['name'] );
                echo "votre fichier a été télécharger";
            }
        }else{
            echo "Erreur: il y a eu un problème de téléchargement";
        }
    }else {
        echo "Error: " . $_FILES["game_img"]["error"];
    }
       
        $game_titre = $_POST['game_titre'];
        $game_year = $_POST['game_year'];
        $game_description = $_POST['game_description'];
        $game_img = $uploadDirectory.$_FILES["game_img"]["name"];
        $pegi = $_POST['addPegiIntoGame'];
        $autor_id = $user_id;   //En atttente de réparation pour afficher le nom de l'auteur
       
       
        //$idInsertGame récupère l'id de 'linsertGameIntoDB pour l'utiliser ensuite dans l'ajout du genre
        $idInsertGame = insertGameIntoDB(
            $game_titre,
            $game_year,
            $game_description,
            $game_img,
            $pegi,
            "2024/06/25",
            $autor_id
        );
        
        // addGenreToGame (
        //     1,
        //     $idInsertGame
        // );
        
        header('location:index.php');
    } 
}

//affichage des jeux, genres et pegi
$games = getAllGame();
$genres = getAllGenre();
$pegis = getAllPegi();




//Delete a game by user or admin
// if(isset($_POST)) {
//     $resetgame = $_POST['game_titre'];
//     $resetgame = deleteThisGame('game_titre');
// }

//Affichage des jeu par auteur de l'article

?>