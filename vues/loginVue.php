<?php
require_once 'partials/header.php';
?>


<div class="row">
    <form action="" method="post">
            <div class="row">
                <div class="input-field col s5 offset-s1">
                    <input type="text" name="pseudo" class="validate">
                    <label for="pseudo">Pseudo:</label>
                </div>
            
           
                <div class="input-field col s5 offset-s1">
                    <input type="password" name="password" class="validate">
                    <label for="password">Mot de passe:</label>
                </div>
            </div>
            
       
        <input class="btn waves-effect waves-light" type="submit" value="Se connecter">
    </form>
</div>


<?php require_once 'partials/footer.php' ?>