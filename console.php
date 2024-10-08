<?php
require_once 'partials/header.php';
    
    if(isset($_POST)&& !empty($_POST)) {
        if(!(isset($_SESSION['user']))) {            
            echo 'Veuillez vous connecter pour envoyer votre ajout de console';
            header ('refresh:3 ;location:login.php');
        }else{
            header('location: allCardsConsole.php');
        }
        if(isset($_FILES['console_img'])&& !empty($_FILES['console_img'])){        
            $upload_dir = "upload";
            $tmp_name = $_FILES['console_img']['tmp_name'];
            $allowed = array("jpg"=>"image/jpg", "jpeg"=>"image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $name = uniqid()."-".basename($_FILES['console_img']['name']);
            move_uploaded_file($tmp_name, "$upload_dir/$name" );
    }

        $console_name = $_POST['console_name'];
        $console_year = $_POST['console_year'];
        $console_description = $_POST['console_description'];
        $console_img = "$upload_dir/$name";

        addConsole(
            $console_name,
            $console_year,
            $console_description,
            $console_img
        );

        header('location: allCardsConsole.php');
    }

    $consoles = getAllConsole(); 
?>

<?php if($user != 'visiteur') { ?>
    <div class="row">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s6 m7">
                    <input type="text" name="console_name"class="validate">
                    <label for="console_name">Nom de la console:</label>
                </div> 

                <div class="input-field col s4 m3 offset-m2">
                    <input type="text" name="console_year">
                    <label for="console_year">Année de sortie:</label>
                </div> 
            </div>
            
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="console_description">
                    <label for="console_description">Description:</label>
                </div> 
            </div>

            <div class="row">
                <div class="col s12 offset-m3">
                    Envoyer une image (jpeg ou png):</br> 
                    <input type="file" name="console_img" >
                </div>
            </div>   
            <div class="row">
                <div class="offset-s5 col s4">
                    <input class="btn waves-effect waves-light" type="submit" value="Envoyer">
                </div>
            </div> 
        </form>
    </div>
<?php } ?>





<?php require_once 'partials/footer.php' ?>