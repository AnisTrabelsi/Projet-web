<?php 

require ('database.php');


$getallmyquestions = $bdd->prepare('SELECT * FROM questions WHERE id_auteur= ? ORDER BY id DESC');
$getallmyquestions->execute(array($_SESSION['id']));


?>