<?php
require_once 'partials/header.php';


$autor_id = $_GET['id'];
$result = showGameByUser($autor_id);

var_dump($result);
?>



<?php require_once 'partials/footer.php' ?>