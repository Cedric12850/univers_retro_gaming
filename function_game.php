<?php

if (isset($_POST)&& !empty($_POST)) {
    if(!(isset($_SESSION['user']))) {
        echo 'Veuillez vous connecter pour envoyer votre ajout de console';
            header ('location:login.php');
        }else{
    //     //upload de l'image
        if(isset($_FILES['game_img'])&& !empty($_FILES['game_img'])){        
            $upload_dir = "upload";
            $tmp_name = $_FILES['game_img']['tmp_name'];
            $allowed = array("jpg"=>"image/jpg", "jpeg"=>"image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $name = uniqid()."-".basename($_FILES['game_img']['name']);
            move_uploaded_file($tmp_name, "$upload_dir/$name" );
    }
       
        $game_titre = $_POST['game_titre'];
        $game_year = $_POST['game_year'];
        $game_description = $_POST['game_description'];
        $game_img = "$upload_dir/$name";
        $pegi = $_POST['addPegiIntoGame'];
        $autor_id = $user_id;   // pour afficher le nom de l'auteur
        
        //récupère tous les genres et leurs id pour remplir la table mais on ne peut entrer qu'un seul genre ?
        $game_genre = $_POST['checkGenres'];
        // var_dump($game_genre);
        die();
        
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
        //ajout du genre
        $addGenres = addGenreToGame (
            $game_genre,
            $idInsertGame
        );
        
        header('location:index.php');
    } 
}

//Delete a game by user or admin


?>