<?php
require_once 'partials/header.php';

if(isset($_POST)&& !empty($_POST)) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $userArray = connectUser($pseudo);  
    $user = $userArray[0];  
        if($user) {
            
            $registered_password = $user['password'];
            $isCredentialsOk = password_verify($password, $registered_password);
        if($isCredentialsOk){
            $_SESSION['user'] = [
                'id' => $user['user_id'],
                'pseudo' => $user['pseudo']
            ];
            header('location:index.php');
        }else{
            echo 'Erreur de mot de passe';
        }
    }else{
        echo 'Pseudo Inconnu';
    }
}
?>


<div class="row">
    <form action="" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="pseudo" class="validate">
                    <label for="pseudo">Pseudo:</label>
                </div>
            
           
                <div class="input-field col s6">
                    <input type="password" name="password" class="validate">
                    <label for="password">Mot de passe:</label>
                </div>
            </div>
            
       
        <input class="btn waves-effect waves-light" type="submit" value="Se connecter">
    </form>
</div>


<?php require_once 'partials/footer.php' ?>