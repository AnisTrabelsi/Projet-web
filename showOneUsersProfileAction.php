<?php 


require('database.php');
if(isset($_GET['id']) AND !empty($_GET['id'])){

$idOfUser = $_GET['id']; 


$checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE id = ?');

$checkIfUserExists->execute(array($_GET['id']));

if($checkIfUserExists->rowCount() > 0){

$usersInfos = $checkIfUserExists->fetch();

$user_pseudo = $usersInfos['pseudo'];


}else{

    $errormsg= "aucun utilisateur trouvé";

}

}else{

$errormsg= "aucun utilisateur trouvé";


}








?>